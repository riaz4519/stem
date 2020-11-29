<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Session;

class NewsController extends Controller
{
    public function index()
    {
        $data['allnews'] = News::latest()->get();
        return view('admin.news.index',$data);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'news_title' => 'required',
            // 'news_desc' => 'required',
            'date' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/news",$filename);
            $image     = $filename;
        }

        $report_file  = $request->file('file');

        if($report_file){

            $filename       = time().$report_file->getClientOriginalName();
            $report_file->storeAs("public/news/file",$filename);
            $report_file     = $filename;
        }

        
        News::create([
            'date' => $request->date,
            'news_title' => $request->news_title,
            'news_desc' => $request->news_desc,
            'image' => $image,
            'file' => $report_file,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['singlenews'] = News::findOrFail($id);
        return view('admin.news.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        
        $news = News::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/news/'.$news->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/news",$filename);
                $image     = $filename;
                $news->image = $image;
                $news->save();
        }

        $report_file  = $request->file('file');
        if($report_file){
                $imagepath = 'storage/news/file'.$news->file;
                File::delete($imagepath);
                $filename       = time().$report_file->getClientOriginalName();
                $report_file->storeAs("public/news/file",$filename);
                $report_file     = $filename;
                $news->file = $report_file;
                $news->save();
        }

        $news->news_title      = $request->news_title;
        $news->news_desc       = $request->news_desc;
        $news->date            = $request->date;
        $news->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
