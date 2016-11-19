<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Description of CategoryController
 *
 * @author Andrii
 */
class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        
        return view('categories', ['categories' => $categories]);
    }
    
    public function doAdd(Request $request)
    {
        DB::table('categories')->insert(
            ['name' => $request->input('categoryName'), 'parent_id' => 0]
        );
            
        return redirect('categories');
    }
}
