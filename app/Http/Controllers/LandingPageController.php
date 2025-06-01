<?php

namespace App\Http\Controllers;

use App\Models\BasicComponent;
use App\Models\ProjectsComponent;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $dataBasic = BasicComponent::first();
        $dataProjects = ProjectsComponent::all();
        return view('landing_page.index', compact('dataBasic','dataProjects'));
    }
}
