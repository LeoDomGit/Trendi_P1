<?php

namespace App\Imports;

use App\Models\Page1Camp;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class Page1CampImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            // Skip the first row (header row)
            if ($key == 0 || $row[0] == null) {
                continue;
            }

            $timestamp = $this->parseTimestamp($row[1]);
            $record=Page1Camp::where('link_id', $row[1])
            ->where('date',$timestamp)
            ->first();
            if(!$record){
                Page1Camp::create([
                    'link_id' => $row[1],
                    'date' => $timestamp,
                    'ctr_page_1' => $row[2],
                    'click_page_1' => $row[3],
                    'cost_page_1' => $row[4],
                    'cpc_page_1' => $row[5],
                    'unit_cost' => $row[6],
                ]);
            }else{
                $record->update(
                    [
                        'link_id' => $row[1],
                        'date' => $timestamp,
                        'ctr_page_1' => $row[2],
                        'click_page_1' => $row[3],
                        'cost_page_1' => $row[4],
                        'cpc_page_1' => $row[5],
                        'unit_cost' => $row[6],
                    ]
                    );
            }

        }
    }
    public function sheets(): array
    {
        return [
            0 => new Page1CampImport(),
        ];
    }
    private function parseTimestamp($value)
    {
        $seconds = $value * 86400;
        $datetime = Carbon::createFromTimestamp($seconds);
        return $datetime->format('Y-m-d H:i:s');
    }
}
