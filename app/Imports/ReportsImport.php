<?php
namespace App\Imports;

use App\Models\Reports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ReportsImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            // Skip the first row (header row)
            if ($key == 0 || $row[0]==null) {
                continue;
            }

            // Insert data into the Reports table
            Reports::create([
                'timestamp' => $row[0],
                'query' => $row[1],
                'referrer' => $row[2],
                'lpurl' => $row[3],
                'ip' => $row[4],
                'event' => $row[5],
                'iframeSrc' => $row[6],
                'fbclid' => $row[7],
                'track_id' => $row[8],
                'gads' => $row[9],
                'page' => $row[10],
                'ny' => $row[11],
                'rs' => $row[12],
                'clkt' => $row[13],
                'nx' => $row[14],
                'nm' => $row[15],
                'rsToken' => $row[16],
                'site' => $row[17],
                'is' => $row[18],
                'locale' => $row[19],
                'nb' => $row[20],
                'slug' => $row[21],
                'rurl' => $row[22],
                'category' => $row[23],
                'sheetsname' => $row[24],
                'sfnsn' => $row[25],
                'referrer2' => $row[26],
                'qsrc' => $row[27],
                'gtm_debug' => $row[28],
                'utm_id' => $row[29],
                'utm_campaign' => $row[30],
                'utm_content' => $row[31],
                'utm_term' => $row[32],
                'utm_source' => $row[33],
                'utm_medium' => $row[34],
                'src' => $row[35],
                'from' => $row[36],
            ]);
        }
    }
    public function sheets(): array
    {
        return [
            0 => new LinksImport(),
        ];
    }
}
