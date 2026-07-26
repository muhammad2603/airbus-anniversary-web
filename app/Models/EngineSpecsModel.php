<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table("engine_specs")]
class EngineSpecsModel extends Model
{
    public function engines(): BelongsTo
    {
        return $this->belongsTo(
            EnginesModel::class,
            "engine_id"
        );
    }
}
