<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateForum;
use App\Models\Forum;
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

    public function store(StoreUpdateForum $request, Forum $forum)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $forum = $forum->create($data);

        return redirect()->route('forums.index');
    }

    public function edit(Forum $forum, string|int $id)
    {
        if (!$forum = $forum->where('id', $id)->first()) {
            return back();
        }
        return view('admin/forums.edit', compact('forum'));
    }

    public function update(StoreUpdateForum $request, Forum $forum, string $id)
    {
        if (!$forum = $forum->find($id)) {
            return back();
        }

        // $forum->subject = $request->subject;
        // $forum->body = $request->body;
        // $forum->save();

        $forum->update($request->validated());

        return redirect()->route('forums.index');
    }
    public function destroy(string|int $id)
    {
        if(!$forum = Forum::find($id)) {
            return back();
        }
        $forum->delete();

        return redirect()->route('forums.index');
    }
}
