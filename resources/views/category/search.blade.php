@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Flower on <b><u>{{$data->name}}</u></b> Category</h5>
                    <br>

                    <form action="{{route('search-flow',$data->id)}}" method="POST">
                        <div class="form-group row">
                            <div class="col-md-2 col-12">
                                @csrf
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Search By Name And Price" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary btn-md">
                                    {{ __('search') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row">

                            @if($table->first() != null)

                            @foreach ($table as $item)
                                    <div class="col-lg-2 col-12 mt-2">
                                        <div class="card" style="width: 18rem;">
                                            <a href="{{route('show-flow',$item->id)}}"><img class="card-img-top" src="{{asset('storage/img/'.$item->image)}}" alt="Card image cap"></a>
                                            <div class="card-body">
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            {{-- <p class="card-text">RP. {{$item->price_money}}</p> --}}
                                            @if (Auth::user()->roles->level == 'Manager')
                                                <a href="{{route('edit-flow',$item->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete-flow',$item->id)}}" class="btn btn-danger">Delete</a>
                                            @else
                                                <a href="{{route('show-flow',$item->id)}}" class="btn btn-primary">See Detail</a>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                            @else
                                <div class="col-12">
                                    <center>
                                        <h2> Uh Oh</h2>
                                        <h4>No Flower In this Category</h4>
                                    </center>
                                </div>
                            @endif
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <br>
                            <p><i>Paging</i></p>
                            {{$table->links()}}

                            <a href="/" class="btn btn-success" style="float:right;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

