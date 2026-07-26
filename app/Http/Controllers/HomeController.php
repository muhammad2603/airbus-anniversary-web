<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineeringPillarsModel;

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
        return view('home', ["engineering_pillars" => $engineering_pillars]);
    }
}
