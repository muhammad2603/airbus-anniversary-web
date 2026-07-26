<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Table("type_units")]
class TypeUnitsModel extends Model
{
    public function specifications(): HasMany
    {
        return $this->hasMany(
            SpesificationsModel::class,
            "type",
            "id"
        );
    }
}
