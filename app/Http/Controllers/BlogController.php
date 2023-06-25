<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $posts = [
            [
                'id' => '1',
                'title' => 'post 1',
                'body' => 'new body'
            ],
            [
                'id' => '2',
                'title' => 'new post 2',
                'body' => 'new pody 2'
            ]
        ];

        return view('dashboard.admin.articles.index', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.admin.articles.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $post = [
            'id' => '1',
            'title' => 'post 1',
            'body' => 'new body'
        ];
        return view('dashboard.admin.articles.show', compact('post'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
