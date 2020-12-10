
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6">
                            <h4>My Chart</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped table-hovered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($carts as $row)
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{ asset('storage/img/' . $row['image']) }}" width="100px" height="100px" alt="{{ $row['name'] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $row['name'] }}
                                        </td>
                                        <td>
                                            <h5>Rp {{ number_format($row['price']) }}</h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <form action="{{route('update-cart')}}" method="POST">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-3">
                                                            <input type="number" name="quantity[]" class="form-control @error('quantity') is-invalid @enderror" value="{{ $row['quantity'] }}" id="{{ $row['product_id'] }}">
                                                            <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}">
                                                            @error('quantity')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-1">
                                                            <button type="submit" class="btn btn-primary">+</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>Rp {{ number_format($row['price'] * $row['quantity']) }}</h5>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No item</td>
                                    </tr>
                                    @endforelse
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <h5>Total</h5>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h5>Rp {{ number_format($subtotal) }}</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{route('checkout-cart',$subtotal)}}" class="btn btn-success" style="float:right;">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

