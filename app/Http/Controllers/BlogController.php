<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function show_all(Request $request)
    {
        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $categories = Category::orderBy('created_at', 'desc')
            ->where('order', '<', 999)
            ->get();

        $css_files  = array('blog');
        $js_files   = array('blog');

        return view('pages.blog',
            [
                'page_title'    => 'Blog Posts',
                'posts'         => $posts,
                'categories'    => $categories,
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_category(Request $request)
    {
        $category = Category::where('slug',  $request->slug)
            ->firstOrFail();

        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        $categories = Category::orderBy('created_at', 'desc')
            ->where('order', '<', 999)
            ->get();

        $css_files  = array('blog');
        $js_files   = array('blog');

        return view('pages.blog',
            [
                'page_title'    => 'Blog Posts',
                'posts'         => $posts,
                'tag'           =>$request->slug,
                'categories'    => $categories,
                'css_files'     => $css_files,
                'js_files'      => $js_files
            ]);
    }

    public function show_single(Request $request)
    {
        //Returning blogs
        $post = Post::where('status', 'PUBLISHED')
            ->where('slug', $request->slug)
            ->firstOrFail();

        $categories = Category::orderBy('created_at', 'desc')
            ->where('order', '<', 999)
            ->get();

        $css_files  = array('blog');
        $js_files   = array('blog');

        return view('pages.blog_view',
            [
                'page_title'        => $post->title,
                'post'              => $post,
                'meta_keywords'     => $post->meta_keywords,
                'meta_description'  => $post->meta_description,
                'categories'        => $categories,
                'css_files'         => $css_files,
                'js_files'          => $js_files
            ]);
    }
}
