<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\TechnologyService;

class AboutController extends Controller
{
    protected DeveloperService $developerService;
    protected TechnologyService $technologyService;

    /**
     * Constructor with dependency injection.
     */
    public function __construct(DeveloperService $developerService, TechnologyService $technologyService)
    {
        $this->developerService = $developerService;
        $this->technologyService = $technologyService;
    }

    /**
     * Display the About page.
     */
    public function index()
    {
        $profile = $this->developerService->getProfile();
        $technologies = $this->technologyService->getTechnologies();
        $stats = $this->developerService->getStats();
        $languages = $this->developerService->getLanguages();
        $interests = $this->developerService->getInterests();
        $education = $this->developerService->getEducation();
        $achievements = $this->developerService->getAchievements();
    return view('about', compact(
        'profile',
        'technologies',
        'stats',
        'languages',
        'interests',
        'education',
        'achievements'
    ));

    }
}
