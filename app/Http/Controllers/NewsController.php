<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsForm;
use App\Models\Comment;
use App\Models\News;
use App\Services\NewsDbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function __construct(
        protected NewsDbRepository $news
    ) {}
    public function index(): View
    {
        $news=$this->news->getNews();

        return view('News.index',['news'=>$news]);
    }

    public function article($id): View
    {
        $article=$this->news->show($id);

        $comments=Comment::where('newsId', $id)->get();

        return view('News.article',['article'=>$article,'comments'=>$comments]);
    }

    public function add(): View
    {


        return view('News.add');
    }

    public function addtodb(NewsForm $newsForm)
    {
       $this->news->add($newsForm);

        return Redirect::route('news.index');
    }
}
