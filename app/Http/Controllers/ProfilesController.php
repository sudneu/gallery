<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Auth;
use \Validator;
use File;
use App\Profile;

class ProfilesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('insta_example.pages.profile', compact('user'));
    }

    public function edit(\App\User $user)
    {
        // $this->authorize('update', $user->profile);         //policy authorization

        return view('insta_example.pages.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        // $this->authorize('update', $user->profile); //policy authorization
        
        $data = Validator::make($request->all(), [
            'url' => 'url',
            'image' => ''
        ]);

        if($data->fails()){
            return $data->errors();
        }
        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');
            $extension = $request->image->getClientOriginalExtension();
            $filename = $request->pname.'.' . $extension;
            $imagePath = $request->image->move(storage_path('pictures').'/'.$filename);
        }
        $dataTrack = Profile::create(array_merge(
            $request->except('image', '_token'),
            ['image' => $filename],
        ));
       dd($dataTrack);


        return redirect('profile/{$user->id}');

        // $extension = $request->image->getClientOriginalExtension();
        // $filename = $request->desc . '.' . $extension;
        // $storagePath = $request->image->move(storage_path('app/public/uploads/profile').'/'. $filename );
        
        // $saveData = auth()->user()->profile->update(array_merge(
        //     $data,
        //     ['image' => $storagePath],
        // ));
     
    }
}
