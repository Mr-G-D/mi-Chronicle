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
                            {{-- {{ Form::open(['action' => [postsController::class] , 'method'=>'Post']) }}
                                <div class="form-group">
                                    {{Form::label('title','Title')}}
                                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('date','Date')}}
                                    {{Form::date('body','',['class'=>'form-control','placeholder'=>'00/00/0000'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('body','Body')}}
                                    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body text'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Submit',['class'=>'btn btn-info'])}}
                                    
                                </div>

                                
                            {{ Form::close() }} --}}
                            <h2 class="blockquote text-center">
                                <p class="mb-0">Add New Event</p>
                                
                            </h2>


                            <form style="padding: 25px" method="POST" action="{{ url('/home') }}">
                                @csrf
                                <div class="form-group" style="padding-bottom: 25px">
                                    
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" >
                                   
                                </div>
                                <div class="form-group" style="padding-bottom: 25px">
                                    
                                    <input name="date" type="date" class="form-control"  >
                                </div>
                                <div class="form-group" >
                                    
                                    <textarea id="editor" name="body" placeholder="Body Text" cols="95" rows="10" ></textarea>
                                </div>
                                
                                
                                <button type="submit" hre class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
@endsection