
@extends('pages.base')

@section('content')
    <h1>Add Product</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('products/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="order_id">Select Price</label>
                  <select class="form-select" name="order_id" id="order_id">
                     <option hidden="true">Select Price</option>
                     <option selected disabled>Select Price</option>
                     @foreach ($orders as $orderId => $order)
                         <option value="{{$orderId}}">{{$order}}</option>
                     @endforeach
                  </select>
                  @error('order_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="product_name">Product Name</label>
                    <input class="form-control" type="text" name="product_name">
                    @error('product_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="product_brand">Product Brand</label>
                    <input class="form-control" type="text" name="product_brand">
                    @error('product_brand')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Product
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
