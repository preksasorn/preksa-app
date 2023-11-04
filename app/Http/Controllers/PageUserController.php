<?php

namespace App\Http\Controllers;

use App\Models\ath;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function index(ath $ath)
    {


    }
      function allproduct(){
        return view('PageUser.allproduct');
      }
      function buy(){
        return view('PageUser.buy_watch');
      }
      function home (){
        return view('PageUser.homepage');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function create(ath $ath)
    {

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
        //
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
    public function edit(ath $ath)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ath $ath)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ath  $ath
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function destroy(ath $ath)
    {
        //
    }
}
