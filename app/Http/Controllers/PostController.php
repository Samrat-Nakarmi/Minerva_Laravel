<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function post(Request $request){
        $this -> validate($request,[
            'post' =>'required',
            'image' =>'mimes:png,jpg,mp4,mp3,gif',
            'category'=> 'required|max:200'
           ]);
           if ($request->image == null ) {
            auth()->user()->teacher()->create([
                'Text'=>$request->post,
                'category'=>$request->category,
                'media' => "no_value",


            ]);
              return redirect('/');

            }
            elseif($request->image != null){
                      $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('media'), $newImageName);

        auth()->user()->teacher()->create([
          'Text'=>$request->post,
          'media' => $newImageName,
          'category'=>$request->category,

      ]);
        return redirect('/');

            }


    }
}
