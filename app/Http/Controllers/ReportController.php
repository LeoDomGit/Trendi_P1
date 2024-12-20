<?php

namespace App\Http\Controllers;

use App\Exports\AdsenseSearchExampleExport;
use App\Exports\LinksExport;
use App\Exports\Page1CampExampleExport;
use App\Exports\ReportsExampleExport;
use App\Exports\SearchCampExampleExport;
use App\Imports\AdsenseSearchImport;
use App\Imports\CombinedImport;
use App\Imports\LinksImport;
use App\Imports\Page1CampImport;
use App\Imports\ReportsImport;
use App\Imports\SearchCampImport;
use App\Models\AdsenseSearch;
use App\Models\Links;
use App\Models\Page1Camp;
use App\Models\Reports;
use App\Models\SearchCamp;
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
        $links = Links::all();
        $links = $links->isEmpty() ? [] : $links;
        return Inertia::render("Report/Link", ['data_links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function reports()
    {
        $data = Reports::all();
        $data = $data->isEmpty() ? [] : $data;
        return Inertia::render("Report/Index", ['data_reports' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AdsenseSearch(Request $request)
    {
        $data =AdsenseSearch::all();
        $data = $data->isEmpty() ? [] : $data;
        return Inertia::render("Report/AdsenseSearch", ['data' => $data]);

    }
    public function AdsenseSearchImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }
        $file = $request->file('file');
        // $links= Excel::import(new LinksImport, $file);

        Excel::import(new AdsenseSearchImport(), $file);
        $data = AdsenseSearch::all();
        return response()->json(['check' => true, 'data' => $data]);
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

        Excel::import(new LinksImport(), $file);
        $links = Links::all();
        return response()->json(['check' => true, 'links' => $links]);
    }
    /**
     * Display the specified resource.
     */
    public function upload_report(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }
        $file = $request->file('file');
        Excel::import(new ReportsImport(), $file);
        $reports = Reports::select('id', 'timestamp', 'ip')
        ->get()
        ->groupBy(function($date) {
            return $date->timestamp . $date->ip;
        });
        foreach ($reports as $group) {
            $group->shift();
            foreach ($group as $duplicate) {
                $duplicate->delete();
            }
    }
    $reports = Reports::distinct('ip', 'timestamp')
    ->get();
        return response()->json(['check' => true, 'reports' => $reports]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function import_page_1_camp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }
        $file = $request->file('file');
        Excel::import(new Page1CampImport(), $file);
        $result = Page1Camp::all();
        $result = $result->isEmpty() ? [] : $result;
        return response()->json(['check' => true, 'result' => $result]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function page_1_camp()
    {
        $result = Page1Camp::all();
        $result = $result->isEmpty() ? [] : $result;
        return Inertia::render("Report/Page1Camp", ['data_page1_camps' => $result]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function searchCamp()
    {
        $result = SearchCamp::all();
        return Inertia::render("Report/SearchCamp", ['data' => $result]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function importSearchCampData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }

        $file = $request->file('file');
        Excel::import(new SearchCampImport(), $file);

        $result = SearchCamp::all(); // Fetch all rows from the search_camp table after import

        return response()->json(['check' => true, 'result' => $result]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function exportSearchCamp()
    {
        return Excel::download(new SearchCampExampleExport, 'search_camp.xlsx');
    }

    public function exportPage1Camp()
    {
        return Excel::download(new Page1CampExampleExport, 'page1camp.xlsx');
    }

    public function exportAbsenseSearch()
    {
        return Excel::download(new AdsenseSearchExampleExport, 'absense_search.xlsx');
    }

    public function exportReports()
    {
        return Excel::download(new ReportsExampleExport, 'reports.xlsx');
    }

    public function exportLinks()
    {
        return Excel::download(new LinksExport, 'links.xlsx');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
