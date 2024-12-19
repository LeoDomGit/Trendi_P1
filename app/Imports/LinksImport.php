<?php

namespace App\Imports;

use App\Models\Links;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class LinksImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key == 0) { // Skip the header row
                continue;
            }

            // Convert Excel date serial number to a standard date
            $dateCreated = $this->convertExcelDate($row[3] ?? null);

            Log::error($dateCreated);
            Links::create([
                'subject'          => $row[0] ?? null,
                'link'             => $row[1] ?? null,
                'id_link'          => $row[2] ?? null,
                'date_created'     => $dateCreated,
                'update_dashboard' => $row[4] ?? null,
                'fb_camp_date'     => $row[5] ?? null,
                'status'           => $row[6] ?? null,
            ]);
        }
    }

    /**
     * Convert an Excel date serial number to a standard date.
     *
     * @param mixed $excelDate
     * @return string|null
     */
    private function convertExcelDate($excelDate)
    {
        if (is_numeric($excelDate)) {
            // Convert using the reference date 1900-01-01 (Excel's base date)
            return Carbon::createFromFormat('Y-m-d', '1900-01-01')->addDays($excelDate - 2)->toDateTimeString();
        }

        return null; // Return null if the date is not valid
    }

    public function sheets(): array
    {
        return [
            0 => new LinksImport(),
        ];
    }
}
