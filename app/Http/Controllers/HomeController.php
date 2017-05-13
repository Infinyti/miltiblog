<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
/**
 * Description of HomeController
 *
 * @author Админ
 */
class HomeController extends Controller{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = DB::table('categories')->select('id','name')->get();
                
        return view('home', [
            'categories' => $categories
            ]);
    }

}
