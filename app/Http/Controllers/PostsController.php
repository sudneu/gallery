<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use \Validator;
use Auth;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {    
        
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            'image' => 'required | max:4096',             //didn't work using image validation keyword
        ]); 

        if($validator->fails()){                        //images more than 2 mb couln't be uploaded even the validation logic is satisfied..Why?
            return $validator->errors();
        };
        
        $extension = $request->image->getClientOriginalExtension();
        $fileName = $request->caption . "." . $extension;
        // $imagePath = $request->image->storeAs('uploads', $request->caption.".".$extension, 'public');            //$validator cannout be used as an array
        $storagepath = $request->image->move(storage_path('app/public/uploads') . '/', $fileName);

        // $image = Image::make(public_path("storage/{$storagePath}"))->fit(300, 300);
        // $image->save();

        $postdata = Post::create([
            'user_id' =>  Auth::id(),
            'caption' => $request->caption,
            'image' => $fileName,
        ]); 
        
        return redirect()->action(
            'ProfilesController@index'
        );

    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }

}