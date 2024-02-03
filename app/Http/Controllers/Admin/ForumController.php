<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Forum $forum)
    {   
        $forums = $forum->all();

        return view('admin/forums/index', compact('forums'));
    }

    public function show(string|int $id)
    {
        //Forum::find($id)
        //Forum::where('id', $id)->first();
        //Forum::where('id', '=', $id)->first();
        if (!$forum = Forum::find($id)){
            return back();
        }
        return view('admin/forums/show', compact('forum'));
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
