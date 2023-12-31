
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteProductModalLabel">Delete Product - {{$product->product_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('products/delete/' .$product->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit product</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('products/' .$product->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                @error('product_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="product_brand">Product Brand</label>
                <input type="text" name="product_brand" class="form-control" value="{{$product->product_brand}}">
                @error('product_brand')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteProductModal">Delete Product</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Product</button>
            </div>
        </form>
    </div>
</div>

@endsection
