<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function home(){

        $developerSerrvices = new DeveloperService();

        $profile = $developerSerrvices->getPortfolio();
        
        return view('home', compact('profile'));
    }
}
