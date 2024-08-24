<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    private $posts =  [
        [
            'id' => 1,
            'created_at' => '2024-08-17 10:00:00',
            'creator' => 'Ahmed',
            'title' => 'Learning Laravel',
            'description' => 'Laravel is a powerful framework for web development.'
        ],
        [
            'id' => 2,
            'created_at' => '2024-08-16 09:17:00',
            'creator' => 'Ali',
            'title' => 'E-learning for kids',
            'description' => 'Website for e-learning.'
        ],
        [
            'id' => 3,
            'created_at' => '2024-08-15 12:35:00',
            'creator' => 'Mohamed',
            'title' => 'How to get started with PHP?',
            'description' => 'PHP is an amazing language.'
        ],
        [
            'id' => 4,
            'created_at' => '2024-08-14 10:45:00',
            'creator' => 'Yassin',
            'title' => 'OOP',
            'description' => 'PHP is not fully OOP.'
        ],
    ];

    public function show()
    {
        return view('index', ['posts' => $this->posts]);
    }

    public function details()
    {
        return view('show', ['posts' => $this->posts]);
    }

    public function getPost($id)
    {
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                return view('post', ['post' => $post]);
            }
        }
        return 'Post not found';
    }

    public function destroy($id)
    {
        $found = false;
        foreach ($this->posts as $key => $post) {
            if ($post['id'] == $id) {
                $found = true;
                unset($this->posts[$key]);
                $this->posts = array_values($this->posts);
                return view('show', ['posts' => $this->posts]);
            }
        }
        if (!$found) {
            return "Post not found";
        }
    }

    public function edit($id)
    {
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                return view('edit', ['post' => $post]);
            }
        }
        return 'Post not found';
    }

    public function store(Request $request)
    {
        $newId = end($this->posts)['id'] + 1;

        $newPost = [
            'id' => $newId,
            'created_at' => Carbon::now()->toDateTimeString(),
            'creator' => $request->input('creator'),
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ];

        $this->posts[] = $newPost;

        return view('show', ['posts' => $this->posts]);
    }

public function update(Request $request, $id)
    {
        foreach ($this->posts as $key => $post) {
            if ($post['id'] == $id) {
                $this->posts[$key]['title'] = $request->input('title');
                $this->posts[$key]['description'] = $request->input('description');
                $this->posts[$key]['creator'] = $request->input('creator');
                $this->posts[$key]['updated_at'] = Carbon::now()->toDateTimeString();
                return view('show', ['posts' => $this->posts]);
            }
        }
        return 'Post not found';
    }

}
