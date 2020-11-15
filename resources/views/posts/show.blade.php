@extends('layouts.app')

@section('style')

    <style>
        
    </style>
    
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container" id="fstyle">
                    <div class="card">
                        <div class="container shadow">
                            <h2 style="float: left">{{$post->title}}</h2>
                            <h2 style="float: right">{{$post->Date}}</h2>
                            <br><br><br><br><br><br><br><br>
                    
                            <h5 style="float: none; text-align: center;">
                                <i>{{$post->body}}</i>
                            </h5>

                            <a class="btn btn-info btn-sm " href="{{ url('/home') }}"   role="button">Back</a>

                            <div style="float: right">
                                <a class="btn btn-info btn-sm " href="{{$post->id}}/edit"   role="button">Edit</a>

                                <a class="btn btn-danger btn-sm " href="#"   role="button">Delete</a>
                            </div>
                            


                            <br><br>
                            <small style="text-align:right ">
                                updated on {{$post->updated_at}}
                            </small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection