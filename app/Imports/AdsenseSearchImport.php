<?php

namespace App\Imports;
use App\Models\AdsenseSearch;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class AdsenseSearchImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            // Skip the first row (header row) and invalid rows
            if ($key == 0 || $row[0] == null) {
                continue;
            }

            $timestamp = $this->parseTimestamp($row[2]); // Assuming date is in the third column
            $record = AdsenseSearch::where('link_id',$row[0])
            ->where('date',$timestamp)->first();
            if ($record) {
                $record->update([
                    'link_id' => $row[0], // link_id is in the first column
                    'date' => $timestamp,
                    'request' => (int) $row[3], // Ensure request is cast to an integer
                    'impressions' => (int) $row[4], // Ensure impressions is cast to an integer
                    'ecpm' => (float) $row[5], // Ensure ecpm is cast to a float
                    'clicks' => (int) $row[6], // Ensure clicks is cast to an integer
                    'pub_revenue' => (float) $row[7], // Ensure pub_revenue is cast to a float
                    'unit_cost' => (float) $row[8], // Ensure unit_cost is cast to a float
                ]);
            }else{
                AdsenseSearch::create([
                    'link_id' => $row[0], // link_id is in the first column
                    'date' => $timestamp,
                    'request' => (int) $row[3], // Ensure request is cast to an integer
                    'impressions' => (int) $row[4], // Ensure impressions is cast to an integer
                    'ecpm' => (float) $row[5], // Ensure ecpm is cast to a float
                    'clicks' => (int) $row[6], // Ensure clicks is cast to an integer
                    'pub_revenue' => (float) $row[7], // Ensure pub_revenue is cast to a float
                    'unit_cost' => (float) $row[8], // Ensure unit_cost is cast to a float
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
