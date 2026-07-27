<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Table("airlines")]
class AirlinesModel extends Model
{
    public function countries(): BelongsTo
    {
        return $this->belongsTo(
            CountriesModel::class,
            "country_id"
        );
    }

    public function globalOperators()
    {
        return $this->hasOne(
            GlobalOperatorsModel::class,
            "airline_id"
        );
    }
}
