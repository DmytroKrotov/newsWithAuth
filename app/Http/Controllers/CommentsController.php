<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Comment;
use App\Services\CommentsDbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CommentsController extends Controller
{
    public function __construct(protected CommentsDbRepository $commentDbRepository)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($newsId):View
    {
        return view('comments.create',['newsId' => $newsId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentForm $request)
    {
        $this->commentDbRepository->add($request);
        return Redirect::route('news.index');
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
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
