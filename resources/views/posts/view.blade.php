@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}


                @if (count($posts) >= 1)
                    
                        <div class="row">
                            <div class="col-sm-12  flex-column justify-content-center order-md-2 about-text" >
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date</th>
                                        
                                        </tr>
                                    </thead>
                                    @foreach ($posts as $post)
                                        <tbody>
                                            <tr>
                                            <th scope="row">{{$post->id}}</th>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->Date}}</td>
                                            <td><a class="btn btn-info btn-sm " href="home/{{$post->id}}" >Open</a></td>
                                            </tr>
                                         
                                        </tbody>
                                    @endforeach  
                                </table>
                            </div>
                            
                        </div>
                        
                    
                    
                @else
                    <div class="container">
                        <h5>Share Your Thoughts</h5>
                    </div>
                    
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
