<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateForumDTO;
use App\DTO\UpdateForumDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateForum;
use App\Models\Forum;
use App\Services\ForumService;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function __construct(
        protected ForumService $service
    ){}

    public function index(Request $request)
    {   
        $forums = $this->service->getAll($request->filter);

        return view('admin/forums/index', compact('forums'));
    }

    public function show(string|int $id)
    {
        //Forum::find($id)
        //Forum::where('id', $id)->first();
        //Forum::where('id', '=', $id)->first();
        if (!$forum = $this->service->findOne($id)){
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
        $this->service->new(
            CreateForumDTO::makeFromRequest($request)
        );

        return redirect()->route('forums.index');
    }

    public function edit(string $id)
    {
        if (!$forum = $this->service->findOne($id)) {
            return back();
        }
        return view('admin/forums.edit', compact('forum'));
    }

    public function update(StoreUpdateForum $request, Forum $forum, string $id)
    {   
        $forum = $this->service->update(
            UpdateForumDTO::makeFromRequest($request)
        );
        
        if (!$forum) {
            return back();
        }

        return redirect()->route('forums.index');
    }
    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('forums.index');
    }
}
