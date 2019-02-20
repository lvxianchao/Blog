<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

/**
 * Class TagController
 *
 * @package App\Http\Controllers\Admin
 */
class TagController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tags = Tag::orderByDesc('id')->paginate(10);
        
        return view('admin.tags.index', compact('tags'));
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tags.create');
    }
    
    /**
     * @param TagRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagRequest $request)
    {
        Tag::create($request->all());
        
        return redirect()->route('admin.tags.index')->with('success', '添加标签成功');
    }
    
    /**
     * @param Tag $tag
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
    
    /**
     * @param TagRequest $request
     * @param Tag        $tag
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->all());
        
        return back()->with('success', '更新标签成功');
    }
    
    /**
     * @param Tag $tag
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        
        return back()->with('success', '删除标签成功');
    }
}
