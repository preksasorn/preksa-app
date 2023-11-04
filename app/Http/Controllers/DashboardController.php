<?php

namespace App\Http\Controllers;

use App\Models\ath;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function index(ath $ath)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\ath  $ath
     * @return \Illuminate\Http\Response
     */
    public function create(ath $ath)
    {
        //
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
    function Dashboards(){
        return view('Dashboard.front_end');
    }
    function Dashboards1(){
        return view('Menudashboard.dashboard');
    }
    function Dashboards2(){
        return view('Menudashboard.allproduct');
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
