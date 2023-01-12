<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $wines = Wine::paginate(20);
        return view('welcome',compact('wines'));
    }
}
