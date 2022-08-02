<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends ApiController
{
    public function getAllArticles() {
        $data = Article::orderBy('id', 'DESC')->get();
        return $this->sendResponse($data, "Data retrieved");
    }

    public function postArticle(Request $request) {
        $res = Article::create([
            "title" => $request->title,
            "description" => $request->description
        ]);

        return $this->sendResponse($res->id, "Data successfully inserted");
    }
}
