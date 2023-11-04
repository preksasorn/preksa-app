<?php

namespace App\Http\Controllers;

use App\Models\ath;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function index(ath $ath)
    {
        $data = DB::table('product')->get();
        return view('Menudashboard.allproduct', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function create(ath $ath)
    {
        return view('Menudashboard.createnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ath $ath)
    {
        $eImage = "";
        if($image=$request->file(key:'image')){
            $destinationPath='img/';
            $eImage = date('YmdHis').".".$image->getClientoriginalExtension();
            $image->move($destinationPath, $eImage);
        }

        $productName = $request->productName;
        $productModel = $request->productModel;
        $Price=$request->Price;
        $image = $eImage;
        $dob = $request->dob;
        $description = $request->description;

        DB::table('product')->insert([
            'productName' => $productName,
            'productModel' => $productModel,
            'Price'=>$Price,
            'dob' => $dob,
            'image' => $image,
            'description' => $description,
        ]);


        $data = DB::table('product')->get();
        return view('Menudashboard.allproduct', ['data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function show(ath $ath)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        return view('Menudashboard.update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $eImage = "";
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $eImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $eImage);
            $data['image'] = $eImage;
        }
        else {
            $product = DB::table('product')->find($id);
            $data['image'] = $product->image; // Keep the existing image value
        }

        $productName = $request->productName;
        $productModel = $request->productModel;
        $Price=$request->Price;
        $image = $eImage;
        $dob = $request->dob;
        $description = $request->description;

        DB::table('product')->where('id', $id)->update([
            'productName' => $productName,
            'productModel' => $productModel,
            'Price'=>$Price,
            'dob' => $dob,
            'image' => $image,
            'description' => $description,
        ]);

        $data = DB::table('product')->get();
        return view('Menudashboard.allproduct', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::destroy($id);
        $data = Product::all();
        return view('Menudashboard.allproduct', ['data' => $data]);
    }
}
