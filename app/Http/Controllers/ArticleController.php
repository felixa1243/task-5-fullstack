<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class ArticleController extends Controller
{
    public function index(){
        $articles=blog::all();
        return view('article',[
            'article'=>$articles
        ]);
    }
}
