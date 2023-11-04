@extends('Dashboard.front_end')
@section('content')
<div class="container">
    <div class=" mt-5 ">
        <h1 >Product Update</h1>
    </div>
<hr>
<div class="row ">
  <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
        <div class = "container">

        <form  method="POST"action="{{ route('product_update', ['id' => $product->id]) }}"  enctype="multipart/form-data">
            @csrf
         <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input value="{{ $product->productName }}"  type="text" name="productName" class="form-control"  >

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productModel">Barnd Name</label>
                        <select name="productModel" class="form-control">
                            <option value="Pu Watch" {{ $product->productModel == 'Pu Watch' ? 'selected' : '' }}>Pu Watch</option>
                            <option value="Zinvo Watch" {{ $product->productModel == 'Zinvo Watch' ? 'selected' : '' }}>Zinvo Watch</option>
                        </select>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Price">Product Price</label>
                        <input value="{{ $product->Price }}" type="text" name="Price" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">Date</label>
                        <input value="{{ $product->dob }}" type="date" name="dob" class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Product Images</label>
                        @if ($product->image)
                                <img src="{{ asset('img/' . $product->image) }}" alt="Employee Image" style="width: 50px; height:50px;">
                            @endif
                            <input type="file" name="image" id="image">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  name="description" class="form-control" rows="5">{{ $product->description }}</textarea>

                        </div>

                    </div>


                <div class="col-md-2">

                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" onclick="return confirm('Do you want to update?')" value="Commit" >

            </div>

            </div>


         </div>
        </form>
    </div>
        </div>


</div>
</div>


</div>
</div>

@endsection
