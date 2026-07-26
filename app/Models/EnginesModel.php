<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table("engines")]
class EnginesModel extends Model
{
    public function engineSpecs(): HasOne
    {
        return $this->hasOne(
            EngineSpecsModel::class,
            "engine_id"
        );
    }
}
