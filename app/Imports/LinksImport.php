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
                'subject'=>$row[1],
                'link'=>$row[2],
                'id_link'=>$row[3],
                'date_created'=>$row[4],
                'update_dashboard'=>$row[5],
                'fb_camp_date'=>$row[6],
                'status'=>$row[7],
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
