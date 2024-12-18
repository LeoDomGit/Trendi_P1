<?php

namespace App\Imports;

use App\Models\Links;
use App\Models\Reports;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Support\Collection;

class CombinedImport implements ToCollection, WithMultipleSheets
{
    /**
     * Handle the collection of both sheets.
     *
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
        // This method won't be used in the combined import class since
        // we are using the sheets method to process individual sheets.
    }

    /**
     * Return the import classes for both sheets.
     *
     * @return array
     */
    public function sheets(): array
    {
        return [
            0 => new LinksImport(),
        ];
    }
}
