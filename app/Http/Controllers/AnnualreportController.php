<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Models\Annualreport;

class AnnualreportController extends Controller
{
    public function index()
    {
        $data['annualreports'] = $annualreports = Annualreport::latest()->get();
        return view('admin.annualreport.index',$data);
    }

    public function create()
    {
        return view('admin.annualreport.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'report_title' => 'required',
            'date' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/annualreport",$filename);
            $image     = $filename;
        }

        $report_file  = $request->file('file');

        if($report_file){

            $filename       = time().$report_file->getClientOriginalName();
            $report_file->storeAs("public/annualreport/file",$filename);
            $report_file     = $filename;
        }

        
        Annualreport::create([
            'date' => $request->date,
            'report_title' => $request->report_title,
            'image' => $image,
            'file' => $report_file,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['annualreport'] = $annualreport = Annualreport::findOrFail($id);
        return view('admin.annualreport.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        
        $annualreport = Annualreport::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/annualreport/'.$annualreport->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/annualreport",$filename);
                $image     = $filename;
                $annualreport->image = $image;
                $annualreport->save();
        }

        $report_file  = $request->file('file');
        if($report_file){
                $imagepath = 'storage/annualreport/file'.$annualreport->file;
                File::delete($imagepath);
                $filename       = time().$report_file->getClientOriginalName();
                $report_file->storeAs("public/annualreport/file",$filename);
                $report_file     = $filename;
                $annualreport->file = $report_file;
                $annualreport->save();
        }

        $annualreport->report_title      = $request->report_title;
        $annualreport->date      = $request->date;
        $annualreport->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
