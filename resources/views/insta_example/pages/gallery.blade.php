<div class="gallery" style="background-color:#0c0c0c;padding:20px;">
    <div class="gal-grid" style="width:1000px;
                                 height:auto;
                                 margin: 0 auto;
                                 display:grid; 
                                 grid-template-columns : 300px 300px 300px; 
                                 grid-column-gap:50px;
                                 grid-row-gap:50px;"
                                 >
    @foreach($user->posts as $post)
        <a href="/p/{{$post->id}}">
            <div  >
                <img  height=200 style="width:100%;" src="/storage/uploads/{{$post->image}}" alt="{{$post->caption}}" />
            </div>
        </a>
    @endforeach        
    </div> 
</div>
