<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAll()
    {
        $news = News::all();
        return view('backend.news', ['news' => $news]);
    }
    public function editView($id){
        $new = News::find($id);
        return view('backend.news_edit',['new'=>$new]);
    }

    public function edit(Request $request){
        $params = $request->all();
//        $id = $params['id'];
        echo json_encode($params);
    }
}