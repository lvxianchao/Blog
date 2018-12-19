<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

/**
 * Class PostController
 *
 * @package App\Http\Controllers\Admin
 */
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(5);
        
        return view('admin.posts.index', compact('posts'));
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::all(['id', 'name']);
        
        return view('admin.posts.create', compact('tags'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // 创建文章
        $post = Post::create($request->all());
        
        // 检测处理新添加标签
        if ($request->tags) {
            $tags = explode(',', $request->tags);
            
            $tags = collect($tags)->map(function ($tag) {
                if (!is_numeric($tag)) {
                    // 检测是否已存在同名标签，不存在则创建新标签并填充关联数据。
                    $exists = Tag::whereName($tag)->first();
                    
                    return $exists ? $exists->id : Tag::create(['name' => $tag])->id;
                }
                
                return $tag;
            });
            
            $post->tags()->attach($tags);
        }
        
        return redirect()->route('admin.posts.index')->with('success', '添加文章成功');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
