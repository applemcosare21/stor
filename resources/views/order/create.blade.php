
@extends('pages.base')

@section('content')
    <h1>Add Order</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('orders/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select Customer</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select Customer</option>
                     <option selected disabled>Select Customer</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="order_price">order price</label>
                    <input class="form-control" type="numeric" name="order_price">
                    @error('order_price')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="order_date">order date</label>
                    <input class="form-control" type="date" name="order_date">
                    @error('order_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add order
                    </button>
                </div>

            </form>
        </div>
    </div>




@endsection
