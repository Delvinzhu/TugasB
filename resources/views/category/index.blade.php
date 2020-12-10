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
                    <h5 class="d-inline">Manage Categories</h5>
                    {{-- <a href="{{route('add-cat')}}" class="btn btn-primary" style="float:right;">Add More Category</a> --}}
                    <br>
                    <br>
                    <div class="row">
                        @foreach ($cats as $item)
                                <div class="col-4 mt-2">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{asset('storage/img/'.$item->image)}}" alt="Card image cap">
                                        <div class="card-body">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        <p class="card-text">There is <b>{{$item->products->count()}}</b> Flower, in this Category</p>
                                        <a href="{{route('show-cat',$item->id)}}" class="btn btn-primary">See List</a>
                                        <a href="{{route('edit-cat',$item->id)}}" class="btn btn-success">Update</a>
                                        <a href="{{route('delete-cat',$item->id)}}" class="btn btn-danger">Delete</a>
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
