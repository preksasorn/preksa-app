
    @extends('Dashboard.front_end')
    @section('content')
    <link rel="stylesheet" href="<?php echo asset('css/all.css')?>" type="text/css">
    <div class="container">
        <h2>All Product</h2>
        <div>
            <div>
                <a href="{{ url('product_create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add new product</a>
            </div>
            <br>
            <div>

            <table class="table" style="border: 1px solid;">
                <thead>
                    <tr style="text-align: center;">
                    <div class="th">
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Model</th>
                        <th>Product Price</th>
                        <th>Date</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>Action</th>
                    </div>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr class="td">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->productName}}</td>
                        <td>{{ $data->productModel}}</td>
                        <td>{{ $data->Price }}</td>
                        <td>{{ $data->dob }}</td>
                        <td><img src="{{asset('img/'. $data->image)}}" style="width: 70px; height:60px; border-radius:3px;"/></td>
                        <td>{{ $data->description }}</td>
                        <td  class="a">
                         <button class="b2"> <a href="{{ url('product_edit/'.$data->id) }}"><span class="glyphicon glyphicon-pencil"></span> Edit</a></button>  <button class="b3"><a href="{{ url('product_delete/'.$data->id) }}" onclick="return confirm('Do you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a></button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        </div>
    </div>
    @endsection
