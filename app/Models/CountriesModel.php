<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Table("countries")]
class CountriesModel extends Model
{
    public function airlines(): HasMany
    {
        return $this->hasMany(
            AirlinesModel::class,
            "country_id"
        );
    }
}
