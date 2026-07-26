<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table("histories")]
class HistoriesModel extends Model
{
    /**
     * Mengambil riwayat Airbus A320NEO
     * @return object
     */
    public static function getHistories()
    {
        return self::selectRaw("YEAR(on_date) AS year")
            ->addSelect(["title", "description"])
            ->orderBy("id", "asc")
            ->get();
    }
    /**
     * Mengambil tahun semua riwayat tanpa ter-duplikat
     * @return object
     */
    public static function getUniqueYears()
    {
        return self::selectRaw("YEAR(on_date) AS year")
            ->orderBy("id", "asc")
            ->distinct()
            ->get();
    }
}
