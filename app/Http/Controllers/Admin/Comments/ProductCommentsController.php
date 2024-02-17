<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductComments;
use App\Models\Product\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Comments\where;

class ProductCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $comments = Comment::all();
        return view('Admin.comments.products.list', [
           'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductComments $request)
    {
        $request_data = $request->validated();

        Comment::create([
            'product_id' => $request->product_id,
            'name' => $request_data['name'],
            'subject' => $request_data['subject'],
            'comment' => $request_data['comment']
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductComments $request, Comment $comment)
    {
        // $comment->update([
        //     'status' => 1
        // ]);
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
