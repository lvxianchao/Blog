<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->paginate(10);
        
        return view('admin.categories.index', compact('categories'));
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }
    
    /**
     * @param CategoryRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        
        return redirect()->route('admin.categories.index')->with('success', '添加分类成功');
    }
    
    /**
     * @param Category $category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }
    
    /**
     * @param CategoryRequest $request
     * @param Category        $category
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        
        return redirect()->route('admin.categories.index')->with('success', '更新分类成功');
    }
    
    /**
     * @param Category $category
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        return back()->with('success', '删除分类成功');
    }
}
