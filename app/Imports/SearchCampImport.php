<?php

namespace App\Imports;

use App\Models\SearchCamp; // Use the appropriate model for search_camp
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class SearchCampImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            // Skip the first row (header row) and invalid rows
            if ($key == 0 || $row[0] == null) {
                continue;
            }
            $timestamp = $this->parseTimestamp($row[1]);
            $record = SearchCamp::where('link_id',$row[0])
            ->where('date',$timestamp)->first();
            if ($record) {
                $record->update([
                    'link_id' => $row[0],
                    'date' => $timestamp,
                    'ctr_page_1' => (int) $row[2],
                    'click_page_1' => (int) $row[3],
                    'click_page_search' => (int) $row[4],
                    'cost_search' => (float) $row[5],
                    'unit_cost' => (float) $row[6],
                ]);
            }else{
                SearchCamp::create([
                    'link_id' => $row[0], // link_id is in the first column
                    'date' => $timestamp,
                    'ctr_page_1' => (int) $row[2], // Ensure ctr_page_1 is cast to an integer
                    'click_page_1' => (int) $row[3], // Ensure click_page_1 is cast to an integer
                    'click_page_search' => (int) $row[4], // Ensure click_page_search is cast to an integer
                    'cost_search' => (float) $row[5], // Ensure cost_search is cast to a float
                    'unit_cost' => (float) $row[6], // Ensure unit_cost is cast to a float
                ]);
            }

        }
    }

    private function parseTimestamp($value)
    {
        $seconds = $value * 86400;
        $datetime = Carbon::createFromTimestamp($seconds);
        return $datetime->format('Y-m-d H:i:s');
    }
}
