<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CitiesModel extends Model
{
    protected $table = "cities";

    public function airlines(): HasMany
    {
        return $this->hasMany(
            AirlinesModel::class,
            "city_id"
        );
    }
}
