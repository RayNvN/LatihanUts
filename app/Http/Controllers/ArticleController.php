<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\writer as writerModel;
use App\Models\article as articleModel;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = articleModel::with('writers')->paginate(3);
        return view('home', compact('article'));
    }
}
