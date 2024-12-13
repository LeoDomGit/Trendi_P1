<?php

namespace App\Http\Controllers;

use App\Imports\CombinedImport;
use App\Models\Links;
use App\Models\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links =Links::all();
        $reports=Reports::all();
        return Inertia::render("Report/Index",['data_links'=>$links,'data_reports'=>$reports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    //================================================
    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }
        $file = $request->file('file');
        // $links= Excel::import(new LinksImport, $file);

       Excel::import(new CombinedImport(), $file);
       $links =Links::all();
        $reports=Reports::all();
        return response()->json(['check'=>true,'links'=>$links,'reports'=>$reports]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
