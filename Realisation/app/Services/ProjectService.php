<?php

namespace App\Services;

class ProjectService
{
    /**
     * Get all projects
     */
    public function getAllProjects(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'EduGlobal LMS Platform',
                'slug' => 'eduglobal-lms-platform',
                'description' => 'A comprehensive Learning Management System featuring user authentication and course management',
                'long_description' => 'A comprehensive Learning Management System (LMS) featuring user authentication, course management, progress tracking, and an administrative dashboard. The platform includes secure login functionality, file management capabilities, and real-time progress monitoring. Designed to facilitate online learning with an intuitive interface for both students and administrators.',
                'image' => 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?w=800&h=600&fit=crop',
                'technologies' => ['PHP', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'Authentication'],
                'category' => 'Educational Technology',
                'date' => '2025-01',
                'github' => 'https://github.com/essachiAli/eduglobal-lms',
                'demo' => null,
                'features' => [
                    'Secure user authentication and authorization',
                    'Course creation and management',
                    'Student progress tracking',
                    'Administrative dashboard',
                    'File upload and management',
                    'Real-time progress monitoring',
                    'Responsive design for all devices',
                ]
            ],
            [
                'id' => 2,
                'title' => 'Mobile Vendor Management System',
                'slug' => 'mobile-vendor-management-system',
                'description' => 'Full-featured system for mobile vendors with inventory tracking and sales analytics',
                'long_description' => 'A full-featured management system designed for mobile vendors, including comprehensive inventory tracking, sales analytics, customer management, and financial reporting capabilities. The system features a responsive design that works seamlessly across all devices, with interactive data visualization using Chart.js to provide insights into business performance.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop',
                'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Chart.js', 'HTML5', 'CSS3'],
                'category' => 'Business Automation',
                'date' => '2024-09',
                'github' => 'https://github.com/essachiAli/vendor-management',
                'demo' => null,
                'features' => [
                    'Real-time inventory tracking',
                    'Sales analytics and reporting',
                    'Customer management system',
                    'Financial reporting dashboard',
                    'Interactive data visualization',
                    'Responsive mobile-friendly design',
                    'Multi-user access control',
                ]
            ],
            [
                'id' => 3,
                'title' => 'Frontend Development Challenges',
                'slug' => 'frontend-challenges',
                'description' => 'Collection of responsive web design challenges demonstrating modern CSS and JavaScript',
                'long_description' => 'A comprehensive collection of responsive web design challenges completed through Frontend Mentor and personal practice. These projects demonstrate proficiency in modern CSS techniques, JavaScript functionality, and mobile-first design principles. Each challenge focuses on pixel-perfect implementation, accessibility, and responsive behavior across all screen sizes.',
                'image' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&h=600&fit=crop',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Flexbox', 'Grid', 'Mobile-First'],
                'category' => 'Frontend Development',
                'date' => '2024-12',
                'github' => 'https://github.com/essachiAli/frontend-challenges',
                'demo' => 'https://essachiali.github.io/frontend-challenges',
                'features' => [
                    'Pixel-perfect responsive designs',
                    'Modern CSS techniques (Flexbox, Grid)',
                    'Interactive JavaScript components',
                    'Mobile-first approach',
                    'Accessible markup and ARIA labels',
                    'Cross-browser compatibility',
                    '100% completion rate',
                ]
            ],
        ];
    }

    /**
     * Get a single project by slug
     */
    public function getProjectBySlug(string $slug): ?array
    {
        $projects = $this->getAllProjects();
        
        foreach ($projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }
        
        return null;
    }

    /**
     * Get featured projects (first 3)
     */
    public function getFeaturedProjects(): array
    {
        return array_slice($this->getAllProjects(), 0, 3);
    }

    /**
     * Get unique categories
     */
    public function getCategories(): array
    {
        $projects = $this->getAllProjects();
        $categories = array_unique(array_column($projects, 'category'));
        return array_values($categories);
    }

    /**
     * Get projects by category
     */
    public function getProjectsByCategory(string $category): array
    {
        $projects = $this->getAllProjects();
        return array_filter($projects, function($project) use ($category) {
            return $project['category'] === $category;
        });
    }
}