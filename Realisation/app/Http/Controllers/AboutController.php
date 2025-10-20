<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\SkillService;

class AboutController extends Controller
{
    protected DeveloperService $developerService;
    protected SkillService $skillService;

    /**
     * Constructor with dependency injection.
     */
    public function __construct(DeveloperService $developerService, SkillService $skillService)
    {
        $this->developerService = $developerService;
        $this->skillService = $skillService;
    }

    /**
     * Display the About page.
     */
    public function index()
    {
        $profile = $this->developerService->getProfile();
        $skills = $this->skillService->getSkills(); // ✅ get skills from SkillService
        $stats = $this->developerService->getStats();
        $languages = $this->developerService->getLanguages();
        $interests = $this->developerService->getInterests();
        $education = $this->developerService->getEducation();
        $achievements = $this->developerService->getAchievements();

        return view('about', compact(
            'profile',
            'skills',
            'stats',
            'languages',
            'interests',
            'education',
            'achievements'
        ));
    }
}
