<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\post;

class HomeController extends Controller
{
    public function index() {
        return view('user/home')->with('posts',post::orderBy('updated_at', 'DESC')->get());
    }
}
