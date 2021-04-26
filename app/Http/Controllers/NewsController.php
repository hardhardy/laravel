<?php


namespace App\Http\Controllers;


use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        //$result = News::all();
        return view('news.index', ['categories' => $this->categories]);
    }

    public function list(News $news, $categoryId)
    {
        return view('news.list', ['news' => $news->getByCategoryId($categoryId)]);
    }

    public function card(News $news)
    {
        //dd($news);
        return view('news.card', ['model' => $news]);
        //$news = News::find($id);
        //echo $news['title'];
        //echo '<br>';
        //echo $news['description'];
        //exit;
    }

}
