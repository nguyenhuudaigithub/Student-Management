<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    // Danh sách blogs
    public function index()
    {
        $blogs = Blog::where('isActive', true)->get();
        return view('user.blogs.index', compact('blogs'));
    }


    // Xem bài viết
    public function viewBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        if (!$blog) {
            abort(404);
        }
        return view('user.blogs.viewBlog', compact('blog'));
    }
}
