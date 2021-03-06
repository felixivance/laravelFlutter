<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('tags.tags')->with(
            [
                'tags' => Tag::all()
            ]
        );
    }

    public function show($id){
        $tag = Tag::find($id);

        return view('tags.tag')->withTag($tag);
//        return view('tags.tag')->with(
//            [
//                'tag' => Tag::findOrFail($id)
//            ]
//        );
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
        ]);

        $tag = new Tag();

        $tag->title = $request->get('title');

        try{
            $tag->save();
        }catch (\Exception $ex){
            return $ex->getMessage();
        }

        return redirect()->back()->with('message','Tag Created Successfully');

    }

}
