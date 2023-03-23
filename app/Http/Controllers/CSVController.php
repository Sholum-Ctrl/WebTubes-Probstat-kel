<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YourImport; //import YourImport class that will be used


class CSVController extends Controller
{
    public function showUploadForm()
    {
        return view('showUploadForm');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        $import = new YourImport();
        Excel::import($import, request()->file('file'));

        return redirect()->back()->with('success', 'File CSV berhasil diupload');
    }
}
