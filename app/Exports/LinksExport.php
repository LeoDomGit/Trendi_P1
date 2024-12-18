<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LinksExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function array(): array
    {
        return [];
    }

    public function headings(): array
    {
        return [
            'Subject',
            'Link',
            'id',
            'Date Created',
            'Update Dashboard',
            'Fb Camp Date',
            'Status',
        ];
    }
}
