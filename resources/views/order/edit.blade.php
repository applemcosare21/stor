
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteOrderModalLabel">Delete Order - {{$order->order_price}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('orders/delete/' .$order->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this order?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit order</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('orders/' .$order->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="order_price">Order price</label>
                <input type="numeric" name="order_price" class="form-control" value="{{$order->order_price}}">
                @error('order_price')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="order_date">Order Date</label>
                <input type="date" name="order_date" class="form-control" value="{{$order->order_date}}">
                @error('order_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">Delete order</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit order</button>
            </div>
        </form>
    </div>
</div>

@endsection
