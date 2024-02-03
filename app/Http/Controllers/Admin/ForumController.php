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

        return view('admin/forums/index', compact('forums'));
    }

    public function Create()
    {
        return view('admin/forums/create');
    }

    public function store(Request $request, Forum $forum)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $forum = $forum->create($data);

        return redirect()->route('forums.index');
    }
}
