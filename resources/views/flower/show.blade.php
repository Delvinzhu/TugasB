
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
                            <img class="card-img-top-d" src="{{asset('storage/img/'.$data->image)}}" alt="Card image cap">
                        </div>

                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$data->name}}</b></h5>
                                <p class="card-text text-danger">RP. {{$data->price}}</p>

                                <p class="card-text">{{$data->description}}.</p>
                                @if (Auth::user() != null && Auth::user()->roles->level == 'Manager')
                                    <div class="row ml-1">
                                        <a href="{{route('edit-flow',$data->id)}}" class="btn btn-primary mr-2">Edit</a>
                                        <a href="{{route('delete-flow',$data->id)}}" class="btn btn-danger">Delete</a>
                                    </div>
                                @else
                                    <form action="{{route('add-cart')}}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="" class="ml-3"> Quantity </label>
                                            <div class="col-4">
                                                <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="1">
                                                <input type="hidden" name="product_id" value="{{$data->id}}">
                                                @error('quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{route('show-cat',$data->units()->first()->id)}}" class="btn btn-success" style="float:right;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

