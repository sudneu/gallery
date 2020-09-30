@extends('insta_example.layout')

@section('content')
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        <!-- @method('PATCH') -->
        <div style="border:#e2e2e2 solid; width:50%; margin: auto; margin-top: 2em;">
            <div style="background-color: #afafb5;">
                <h1 style="margin:0px;padding:1em;">Edit Profile</h1>
            </div>
            <div style=" padding:1.5em;display:flex; flex-direction: column; justify-content : space-between;">                
                <div style="padding:.5em 0 ;">
                    <label for="title" class="col-md-4 col-form-label">Profile Name</label>

                    <input id="title"
                            name="title"
                            type= "text"
                            class="form-control{{$errors->has('caption') ? ' is-invalid' : ''}}"
                            caption="title"
                            value= "{{$user->username }}"
                            autocomplete="title"                     
                            autofocus/>

                    
                      
                </div>
                <div style="padding:.5em 0 ;">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description"
                            name="description"
                            type= "text"
                            class="form-control{{$errors->has('caption') ? ' is-invalid' : ''}}"
                            caption="description"
                            value= "{{$user->name }}"
                            autocomplete="description"                     
                            autofocus/>
                      
                </div>
                <div style="padding:.5em 0 ;">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url"
                            name="url"
                            type= "text"
                            class="form-control{{$errors->has('caption') ? ' is-invalid' : ''}}"
                            caption="url"
                            value= "{{$user->email }}"
                            autocomplete="url"                     
                            autofocus/>
                      
                </div>

                <div style="padding:.5em 0;">
                    <label for="image" class="col-md-4 col-form-label">Profile Picture  </label>

                    <input type="file" class="form-control-file" id="image" name="image">

                </div>
                <div style="padding:.5em 0;">
                    <button style="border:none; border-radius:  3px; cursor:pointer; padding: .5em; background: green; color: #fefefe; ">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection

