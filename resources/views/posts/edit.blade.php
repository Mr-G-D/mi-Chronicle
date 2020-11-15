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
                            <h2 class="blockquote text-center">
                                <p class="mb-0">Edit an Event</p>
                                
                            </h2>

                            <form method="POST" action="home/{{$post->id}}" style="padding: 25px"  >
                                @csrf
                                @method('PUT')
                                <div class="form-group" style="padding-bottom: 25px">
                                    
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$post->title}}" >
                                   
                                </div>
                                <div class="form-group" style="padding-bottom: 25px">
                                    
                                    <input name="date" type="date" class="form-control" value="{{$post->Date}}" >
                                </div>
                                <div class="form-group" >
                                    
                                    <textarea id="editor" name="body" placeholder="Body Text" cols="95" rows="10" >{{$post->body}}</textarea>
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