@extends('insta_example.layout')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div style="border:#e2e2e2 solid; width:50%; margin: auto; margin-top: 2em;">
            <div style="background-color: #afafb5;">
                <h1 style="margin:0px;padding:1em;">Add New Post</h1>
            </div>
            <div style=" padding:1.5em;display:flex; flex-direction: column; justify-content : space-between;">                
                <div style="padding:.5em 0 ;">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption"
                            name="caption"
                            type= "text"
                            class="form-control{{$errors->has('caption') ? ' is-invalid' : ''}}"
                            caption="caption"
                            value= "{{old('caption') }}"
                            autocomplete="caption"                     
                            autofocus/>
                      
                </div>

                <div style="padding:.5em 0;">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                </div>
                <div style="padding:.5em 0;">
                    <button style="border:none; border-radius:  3px; cursor:pointer; padding: .5em; background: green; color: #fefefe; ">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection