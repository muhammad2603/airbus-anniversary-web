<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GlobesModel extends Model
{
    protected $table = 'globes';

    public function airlines(): HasMany
    {
        return $this->hasMany(
            AirlinesModel::class,
            "globe_id"
        );
    }
}
