@extends('Dashboard.front_end')
@section('content')
<div class="clearfix"></div>
<br/>

<div class="col-div-3">
    <div class="box">
        <p>67<br/><span>Customers</span></p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>99<br/><span>Product orders</span></p>
        <i class="fa fa-shopping-cart box-icon"></i>
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>88<br/><span>Total Profite</span></p>
        <i class="fa fa-money box-icon" aria-hidden="true"></i>
    </div>
</div>

<div class="col-div-3">
    <div class="box">
        <p>78<br/><span>Sold Product</span></p>
        <i class="fa fa-shopping-bag box-icon"></i>
    </div>
</div>
<div class="clearfix"></div>
<br/><br/>
<div class="col-div-8">
    <div class="box-8">
    <div class="content-box">
        <p>Top Selling Projects <span>Sell All</span></p>
        <br/>
        <table>
<tr>
<th>Company</th>
<th>Contact</th>
<th>Country</th>
</tr>
<tr>
<td>Alfreds Futterkiste</td>
<td>Maria Anders</td>
<td>Germany</td>
</tr>
<tr>
<td>Centro comercial Moctezuma</td>
<td>Francisco Chang</td>
<td>Mexico</td>
</tr>
<tr>
<td>Ernst Handel</td>
<td>Roland Mendel</td>
<td>Austria</td>
</tr>
<tr>
<td>Island Trading</td>
<td>Helen Bennett</td>
<td>UK</td>
</tr>


</table>
    </div>
</div>
</div>

<div class="col-div-4">
    <div class="box-4">
    <div class="content-box">
        <p>Total Sale <span>Sell All</span></p>

        <div class="circle-wrap">
<div class="circle">
  <div class="mask full">
    <div class="fill"></div>
  </div>
  <div class="mask half">
    <div class="fill"></div>
  </div>
  <div class="inside-circle"> 70% </div>
</div>
</div>
    </div>
</div>
</div>

<div class="clearfix"></div>
</div>
@endsection
