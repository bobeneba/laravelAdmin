<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Log;
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        Log::warning('warning');
       // return view('admin.index.index');
         $product = DB::table('wish_daysales_temp')->orderBy('daySales','desc')->paginate(20);
         return view('wish.index',['products'=>$product]);
       // return view('wish.index');
    }
    
}
