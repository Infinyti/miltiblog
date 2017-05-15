<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\Categories;
use App\Http\Controllers\Controller;

class AdminCatController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $userid = Auth::id();
        $categories = DB::table('categories')->where('author_id', $userid)->get();
        $userinfo = DB::table('users')->where('id', $userid)->first();
        return view('cat_govern', [
            'cats' => $categories,
            'userid' => $userid,
            'userinfo' => $userinfo
        ]);
    }

    /**
     * Добавить новую категорию
     */
    public function add(Request $request) {
	dump($request->all());
	exit();
        $validator = Validator::make($request->all(), [
                    'name' => 'required|max:255',
                    'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/cat')
                            ->withInput()
                            ->withErrors($validator);
        }
        $cat = new Categories;
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->author_id = $request->author_id;
        $cat->save();

        return redirect('/admin/cat');
    }

    /**
     * Удалить категорию
     */
    public function del(Categories $cat) {
        $cat->delete();
        return redirect('/admin/cat');
    }
    /**
     * Редактировать категорию
     */
    public function update(Categories $cat) {

        $cat->id = filter_input(INPUT_POST, 'id');
      
        $cat->name = filter_input(INPUT_POST, 'newname');
        $cat->description = filter_input(INPUT_POST, 'newdescription');
        DB::table('categories')
                ->where('id', $cat->id)
                ->update( array('name'=> $cat->name,'description' => $cat->description,));
        $cat->save();
    return redirect('/admin/cat');
    }

}
