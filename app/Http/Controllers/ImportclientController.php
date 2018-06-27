<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Post;
use DB;
use Session;
use Excel;

class Importclient extends Controller
{
    public function showimport()
    {
        return view('admin.client.import');
    }
    public function downloadExcel($type)
    {
        $data = Post::get()->toArray();
        return Excel::create('laravelcode', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) {
                foreach ($reader->toArray() as $key => $row) {
                    $data['title'] = $row['title'];
                    $data['description'] = $row['description'];
                    $data['fax'] = $row['fax'];
                    $data['adrress1'] = $row['adrress1'];
                    $data['adrress2'] = $row['adrress2'];
                    $data['adrress3'] = $row['adrress3'];
                    $data['adrress4'] = $row['adrress4'];
                    $data['adrress5'] = $row['adrress5'];
                    $data['telephone1'] = $row['adrress5'];
                    $data['telephone2'] = $row['telephone2'];
                    $data['telephone3'] = $row['telephone3'];
                    $data['telephone4'] = $row['telephone4'];
                    $data['telephone5'] = $row['telephone5'];
                    $data['telephone5'] = $row['telephone5'];
                    $data['client_type'] = $row['client_type'];

                    if(!empty($data)) {
                        DB::table('clients')->insert($data);
                    }
                }
            });
        }

        Session::put('لیست مشتریان با موفقیت بارگزاری شد .');

        return back();
    }
}
