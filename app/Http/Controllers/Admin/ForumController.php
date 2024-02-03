<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Forum $forum)
    {   
        $forums = $forum->all();

        return view('admin/forum/index', compact('forums'));
    }
}