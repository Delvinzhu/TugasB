@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <center>
                <h1>Welcome to Flowelto Shop</h1>
                <h4>The best Flower Shop in Binus University</h4>
            </center>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>We Have some brand new category now , sign up for order , and happy shopping</h5>
                    <br>
                    <div class="row">
                        @foreach ($cats as $item)
                                <div class="col-4 mt-2">
                                    <div class="card" style="width: 18rem;">
                                        <a href="{{route('show-cat',$item->id)}}">
                                            <img class="card-img-top" src="{{asset('storage/img/'.$item->image)}}" alt="Card image cap">
                                        </a>
                                        <div class="card-body">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        <p class="card-text">There is <b>{{$item->products->count()}}</b> Flower, in this Category</p>
                                        <a href="{{route('show-cat',$item->id)}}" class="btn btn-primary">See List</a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

