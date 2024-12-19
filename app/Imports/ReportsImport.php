<?php
namespace App\Imports;

use App\Models\Reports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ReportsImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            // Skip the first row (header row) and rows where the first column is null
            if ($key == 0 || $row[0] === null) {
                continue;
            }

            $dateCreated = $this->parseDateCreated($row[0] ?? null);
            $record = Reports::where('timestamp', $dateCreated)->first();

            if (!$record && $dateCreated) {
                Reports::create([
                    'timestamp'   => $dateCreated,
                    'query'       => $row[1] ?? null,
                    'referrer'    => $row[2] ?? null,
                    'lpurl'       => $row[3] ?? null,
                    'ip'          => $row[4] ?? null,
                    'event'       => $row[5] ?? null,
                    'iframeSrc'   => $row[6] ?? null,
                    'fbclid'      => $row[7] ?? null,
                    'track_id'    => $row[8] ?? null,
                    'gads'        => $row[9] ?? null,
                    'page'        => $row[10] ?? null,
                    'ny'          => $row[11] ?? null,
                    'rs'          => $row[12] ?? null,
                    'clkt'        => $row[13] ?? null,
                    'nx'          => $row[14] ?? null,
                    'nm'          => $row[15] ?? null,
                    'rsToken'     => $row[16] ?? null,
                    'site'        => $row[17] ?? null,
                    'is'          => $row[18] ?? null,
                    'locale'      => $row[19] ?? null,
                    'nb'          => $row[20] ?? null,
                    'slug'        => $row[21] ?? null,
                    'rurl'        => $row[22] ?? null,
                    'category'    => $row[23] ?? null,
                    'sheetsname'  => $row[24] ?? null,
                    'sfnsn'       => $row[25] ?? null,
                    'referrer2'   => $row[26] ?? null,
                    'qsrc'        => $row[27] ?? null,
                    'gtm_debug'   => $row[28] ?? null, // Safely access key 28
                    'utm_id'      => $row[29] ?? null,
                    'utm_campaign'=> $row[30] ?? null,
                    'utm_content' => $row[31] ?? null,
                    'utm_term'    => $row[32] ?? null,
                    'utm_source'  => $row[33] ?? null,
                    'utm_medium'  => $row[34] ?? null,
                    'src'         => $row[35] ?? null,
                    'from'        => $row[36] ?? null,
                ]);
            }
        }
    }

    public function sheets(): array
    {
        return [
            0 => new ReportsImport(),
        ];
    }
    private function parseDateCreated($dateText)
    {
        if ($dateText) {
            // Convert the text to a Carbon instance assuming the format dd/mm/yyyy hh:mm:ss
            try {
                return Carbon::createFromFormat('d/m/Y H:i:s', $dateText)->toDateTimeString();
            } catch (\Exception $e) {
                Log::error('Invalid date format: ' . $dateText);
                return null; // Return null if the date format is invalid
            }
        }

        return null; // Return null if the date is not provided
    }
    private function convertExcelDate($excelDate)
    {
        if (is_numeric($excelDate)) {
            // Convert using the reference date 1900-01-01 (Excel's base date)
            return Carbon::createFromFormat('Y-m-d', '1900-01-01')->addDays($excelDate - 2)->toDateTimeString();
        }

        return null; // Return null if the date is not valid
    }

}
