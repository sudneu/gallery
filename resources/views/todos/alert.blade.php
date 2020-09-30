<div>
    @if(session()->has('message'))
    {{$slot}}
    <div class="py-4 px-2 bg-green-300">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div style="background-color : red; list-style:none; color :white;">{{session()->get('error')}}</div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="background-color : red; list-style:none; color :white; text-align: center;">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>