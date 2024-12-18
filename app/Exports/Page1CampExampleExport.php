<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Page1CampExampleExport implements FromArray, WithHeadings
{
    /**
     * Return an empty data array.
     *
     * @return array
     */
    public function array(): array
    {
        return [];
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
            'cost_page_1',
            'cpc_page_1',
            'unit_cost',
        ];
    }
}
