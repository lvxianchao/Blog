<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderByDesc('id')->paginate(5);
        
        return view('admin.tags.index', compact('tags'));
    }
}
