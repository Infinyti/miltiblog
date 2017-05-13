<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('post_govern');

        }

    public function add(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required|max:255',
                    'content' => 'required',
                    'url' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/post')
                            ->withInput()
                            ->withErrors($validator);
        }
        $post = new Post;
        $post->name = $request->name;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->save();

        return redirect('/admin/post');
    }

}
