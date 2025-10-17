<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    //
    public function home() {

        $developerServices = new DeveloperService();
        $profile = $developerServices->getProfile();
        return view('home', compact('profile'));
    }

}
