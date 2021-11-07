<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('user/post');
    }

}
