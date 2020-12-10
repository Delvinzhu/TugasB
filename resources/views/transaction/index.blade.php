
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4>Transaction History</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped text-center">
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <a href="{{route('show-trans',$item->id)}}">
                                                    <h6>Transaction At - <b>{{$item->created_at}}</b></h6>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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

