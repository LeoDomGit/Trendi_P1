<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SearchCampExampleExport implements FromArray, WithHeadings
{
    /**
     * Return an empty data array (only headers).
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
            'ctr_page_1',
            'click_page_1',
            'click_page_search',
            'cost_search',
            'unit_cost',
        ];
    }
}
