<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAll()
    {
        $news = News::all()->where('active', '=', 1);
        return view('backend.news', ['news' => $news]);
    }

    public function editView($id)
    {
        $new = News::find($id);
        return view('backend.news_edit', ['new' => $new]);
    }

    public function edit(Request $request)
    {
        $params = $request->all();
        $id = $params['id'];
        $title = $params['title'];

        if ($request->hasFile('image')) {
            $images = $request->file('image', '');
            $fileDirPath = "upload/titleImage/";
            if (!file_exists($fileDirPath)) {
                mkdir($fileDirPath, 0777, true);
            }
            $fileName = $images->getClientOriginalName();
            $images->move(env('APP_URL') . '/' . $fileDirPath, $fileName);
            $imagesUrl = $fileDirPath . $fileName;
        } else $imagesUrl = News::find(2, ['image'])['image'];

        $description = $params['description'];
        $content = $params['content'];
        $updateTime = date("Y-m-d H:i:s", time());
        $new = new News();
        $new->where('id', '=', $id)->update(['title' => $title, 'image' => $imagesUrl, 'description' => $description, 'content' => $content, 'updateTime' => $updateTime]);
        return redirect(url('admin/news'));
    }

    public function delete($id)
    {
        $new = new News();
        $new->where('id', '=', $id)->update(['active' => 0]);
        return redirect(url('admin/news'));
    }

    public function add(Request $request)
    {
        $params = $request->all();
        $title = $params['title'];
        $description = $params['description'];
        $content = $params['content'];
        $imagesUrl = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileDirPath = 'upload/titleImage/';
            if (!file_exists($fileDirPath)) {
                mkdir($fileDirPath, 0777, true);
            }
            $fileName = $image->getClientOriginalName();
            $image->move(env('APP_URL') . '/' . $fileDirPath, $fileName);
            $imagesUrl = $fileDirPath . $fileName;
        }
        $updateTime = date("Y-m-d H:i:s", time());
        $new = new News();
        $new->insert(['title'=>$title,'image'=>$imagesUrl,'description'=>$description,'content'=>$content,'active'=>1,'updateTime'=>$updateTime,'createTime'=>$updateTime]);
        return redirect(url('admin/news'));
    }

    public function addView()
    {
        return view('backend.news_edit');
    }
}