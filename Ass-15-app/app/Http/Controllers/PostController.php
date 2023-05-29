<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;



// Task 7: Resource Controller

// Create a resource controller called PostController that handles CRUD operations
// for a resource called Post. Ensure that the controller
// provides the necessary methods for the resourceful routing conventions in Laravel.

// Answer - 7
class PostController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(StorePostRequest $request)
    {
        //
    }
    public function show(Post $post)
    {
        //
    }
    public function edit(Post $post)
    {
        //
    }
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }
    public function destroy(Post $post)
    {
        //
    }
}
