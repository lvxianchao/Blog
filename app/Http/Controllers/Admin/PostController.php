<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;

/**
 * Class PostController
 *
 * @package App\Http\Controllers\Admin
 */
class PostController extends Controller
{
    /**
     * 文章列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(5);
        
        return view('admin.posts.index', compact('posts'));
    }
    
    /**
     * 创建文章
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::all(['id', 'name']);
        
        return view('admin.posts.create', compact('tags'));
    }
    
    /**
     * 添加文章
     *
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
            $tags = $this->tagsHandler($request->tags);
            
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
     * 编辑文章
     *
     * @param Post $post
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        
        // 整已选中的标签字符串形式
        $tags_string = $post->tags->map(function ($tag) {
            return $tag->id;
        })->toArray();
        $tags_string = implode(',', $tags_string);
        
        return view('admin.posts.edit', compact('post', 'tags', 'tags_string'));
    }
    
    /**
     * 更新文章
     *
     * @param PostRequest $request
     * @param Post        $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        
        if ($request->tags) {
            $tags = $this->tagsHandler($request->tags);
            
            $post->tags()->sync($tags);
        }
        
        return redirect()->route('admin.posts.index')->with('success', '更新文章成功');
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
    
    /**
     * 处理文章和标签：检测标签 是否存在，存在则返回标签 ID，不存在则添加标签并返回 ID。
     *
     * @param string $tags
     *
     * @return array|string|static
     */
    private function tagsHandler(string $tags)
    {
        return collect(explode(',', $tags))->map(function ($tag) {
            if (!is_numeric($tag)) {
                // 检测是否已存在同名标签，不存在则创建新标签并填充关联数据。
                $exists = Tag::whereName($tag)->first();
                
                return $exists ? $exists->id : Tag::create(['name' => $tag])->id;
            }
            
            return $tag;
        });
    }
}
