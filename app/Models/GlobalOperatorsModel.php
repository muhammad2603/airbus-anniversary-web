<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table("global_operators")]
class GlobalOperatorsModel extends Model
{
    public function airlines(): BelongsTo
    {
        return $this->belongsTo(
            AirlinesModel::class,
            "airline_id"
        );
    }
}
