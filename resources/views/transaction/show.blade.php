
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4>Transaction Detail</h4>
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
                                    @php
                                        $subtotal = 0;
                                    @endphp
                                    @forelse ($data->carts as $row)
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{ asset('storage/img/' . $row->products->image) }}" width="100px" height="100px">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $row->products->name }}
                                        </td>
                                        <td>
                                            <h5>Rp. {{$row->products->price}}</h5>
                                        </td>
                                        <td>
                                            {{$row->quantity}}
                                        </td>
                                        <td>
                                            <h5>Rp {{ number_format($row->products->price * $row->quantity) }}</h5>
                                        </td>
                                    </tr>
                                    @php
                                        $subtotal += $row->products->price * $row->quantity;
                                    @endphp
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

