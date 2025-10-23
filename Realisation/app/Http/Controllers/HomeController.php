<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;

class HomeController extends Controller
{
    protected $developerService;
    protected $projectService;

    public function __construct(DeveloperService $developerService, ProjectService $projectService)
    {
        $this->developerService = $developerService;
        $this->projectService = $projectService;
    }

    /**
     * Display the home page
     */
    public function index()
    {
        $profile = $this->developerService->getProfile();
        $stats = $this->developerService->getStats();
        $featuredProjects = $this->projectService->getFeaturedProjects();

        return view('home', compact('profile', 'stats', 'featuredProjects'));
    }
}