<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Display all projects
     */
    public function index()
    {
        $projects = $this->projectService->getAllProjects();
        $categories = $this->projectService->getCategories();

        return view('projects.index', compact('projects', 'categories'));
    }

    /**
     * Display a single project
     */
    public function show(string $slug)
    {
        $project = $this->projectService->getProjectBySlug($slug);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}