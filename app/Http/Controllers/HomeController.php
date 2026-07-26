<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineeringPillarsModel;
use App\Models\SpesificationsModel;
use Illuminate\Support\Number;
use NumberFormatter;

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
        return view(
            'home',
            [
                "engineering_pillars"   => $engineering_pillars,
                "specifications"        => $specs,
            ]
        );
    }
}
