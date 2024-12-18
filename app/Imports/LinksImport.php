<?php
namespace App\Imports;

use App\Models\Links;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class LinksImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key == 0) {
                continue;
            }
            Links::create([
                'subject'=>$row[0] ?? null,
                'link'=>$row[1] ?? null,
                'id_link'=>$row[2] ?? null,
                'date_created'=>$row[3] ?? null,
                'update_dashboard'=>$row[4] ?? null,
                'fb_camp_date'=>$row[5] ?? null,
                'status'=>$row[6] ?? null,
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
