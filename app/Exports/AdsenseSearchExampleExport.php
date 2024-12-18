<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdsenseSearchExampleExport implements FromArray, WithHeadings
{
    /**
     * Return an empty data array.
     *
     * @return array
     */
    public function array(): array
    {
        return []; // No data rows, just headers
    }

    /**
     * Return the headings for the file.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'link_id',
            'date',
            'request',
            'impressions',
            'ecpm',
            'clicks',
            'pub_revenue',
            'unit_cost',     
        ];
    }
}
