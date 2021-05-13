<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Article;


class NewsController extends Controller
{
    public function showNewsList(){

        $country = 'in';
        $feature_news = News::latest()->orderBy('id', 'desc')->published()->featured()->get();
        $article = Article::latest()->orderBy('id', 'desc')->limit('4')->get();

      
        return view('news.index', compact('country','feature_news','article'));
    }

    public function showNewsDetail($slug){

        $country = request()->session()->get('country');

        $news_detail = News::where('id', $slug)->get()->first();

        return view('news.detail', compact('news_detail'));
    }
}
