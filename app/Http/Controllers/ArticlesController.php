<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function show($id)
    {
    	auth()->loginUsingId(23);

    	$article = Article::findOrFail($id);

    	if (Gate::denies('show-article', $article))
    	{
    		abort(403, 'Sorry, not sorry');
    	}	

    	return $article->title;
    }
}
