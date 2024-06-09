<?php

namespace App\Services;

use App\Http\Requests\NewsForm;
use App\Models\News;

class NewsDbRepository
{
    public function getNews()
    {
        return News::all();
    }
    public function show($id)
    {
        return News::find($id);
    }
    public function add(NewsForm $newsForm)
    {
        $form=$newsForm->validated();
        $newNews=new News();
        $newNews->summary=$form['title'];
        $newNews->short_description=$form['description'];
        $newNews->full_text=$form['article'];
        $newNews->save();
    }
}
