<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineeringPillarsModel;
use App\Models\SpesificationsModel;
use Illuminate\Support\Number;
use App\Models\EnginesModel;
use App\Models\HistoriesModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $engineering_pillars = EngineeringPillarsModel::all([
            "code",
            "name",
            "tag",
            "description"
        ]);
        $env_specs_data_limit = Number::parseInt(env("SPECIFICATIONS_DATA_LIMIT"));
        $specs = SpesificationsModel::with('typeUnit')
            ->limit($env_specs_data_limit)
            ->get();
        $eng_spec = EnginesModel::with("engineSpecs")->get();
        return view(
            'home',
            [
                "engineering_pillars"   => $engineering_pillars,
                "specifications"        => $specs,
                "engines"               => $eng_spec,
                "histories"             => HistoriesModel::getHistories(),
                "years_history"         => HistoriesModel::getUniqueYears(),
            ]
        );
    }
}
