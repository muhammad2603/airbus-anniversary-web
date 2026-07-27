<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table("environmental_performances")]
class EnvironmentalPerformancesModel extends Model
{
    public static function getAllPerforms()
    {
        return self::select()->get();
    }
}
