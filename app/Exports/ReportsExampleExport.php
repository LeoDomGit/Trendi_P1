<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportsExampleExport implements FromArray, WithHeadings
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
            'Timestamp',
            'query',
            'referrer',
            'lpurl',
            'ip',
            'event',
            'iframeSrc',
            'fbclid',
            'track_id',
            'gads',
            'page',
            'ny',
            'rs',
            'clkt',
            'nx',
            'nm',
            'rsToken',
            'site',
            'is',
            'locale',
            'nb',
            'query',  // Appears twice, you might want to clarify
            'slug',
            'rurl',
            'category',
            'sheetsname',
            'sfnsn',
            'referrer2',
            'qsrc',
            'gtm_debug',
            'utm_id',
            'utm_campaign',
            'utm_content',
            'utm_term',
            'utm_source',
            'utm_medium',
            'src',
            'from',
        ];
    }
}
