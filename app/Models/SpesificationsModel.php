<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table("specifications")]
class SpesificationsModel extends Model
{
    public function typeUnit(): BelongsTo
    {
        return $this->belongsTo(
            TypeUnitsModel::class,
            "type",
            "id"
        );
    }
}
