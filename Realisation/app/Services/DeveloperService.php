<?php

namespace App\Services;

class DeveloperService
{
    /**
     * Get developer profile information.
     */
    public function getProfile(): array
    {
        return [
            'name' => 'Ali Essamrachi',
            'title' => 'Full Stack Developer',
            'tagline' => 'Web Solutions Specialist',
            'bio' => 'Passionate Full Stack Developer with expertise in modern web technologies including HTML5, CSS3, JavaScript, PHP, and MySQL. Currently advancing skills through Group IKI\'s Full Stack Development Program (2023–2025). Demonstrated ability to create responsive, user-focused web applications with clean and maintainable code. Seeking opportunities to contribute to innovative projects and grow within a collaborative development team.',
            'email' => 'essachi.service@gmail.com',
            'phone' => '+212 75 24 80 854',
            'github' => 'https://github.com/essachiAli',
            'linkedin' => 'https://linkedin.com/in/ali-essachi',
            'location' => 'Tanger, Morocco',
              'image' => asset('images/ali.jpg'), // use local image if available
        ];
    }

    /**
     * Get developer statistics.
     */
    public function getStats(): array
    {
        return [
            ['label' => 'Years in Training', 'value' => '2+'],
            ['label' => 'Projects Completed', 'value' => '10+'],
            ['label' => 'Technologies', 'value' => '8+'],
            ['label' => 'Code Challenges', 'value' => '100%'],
        ];
    }

    /**
     * Get spoken languages.
     */
    public function getLanguages(): array
    {
        return [
            ['name' => 'Arabic', 'level' => 'Native'],
            ['name' => 'French', 'level' => 'Fluent'],
            ['name' => 'English', 'level' => 'Intermediate'],
        ];
    }

    /**
     * Get personal interests.
     */
    public function getInterests(): array
    {
        return [
            'Web Development',
            'UI/UX Design',
            'Tech Innovation',
        ];
    }

    /**
     * Get education information.
     */
    public function getEducation(): array
    {
        return [
            'institution' => 'Group IKI',
            'program' => 'Web Development Program',
            'period' => '2023 – 2025',
            'description' => 'Comprehensive curriculum...',
        ];

    }

    /**
     * Get key achievements.
     */
    public function getAchievements(): array
    {
        return [
            'Completed multiple complex web development projects',
            'Developed responsive applications using modern frameworks and libraries',
            'Implemented secure authentication and database management systems',
            'Maintained 100% completion rate on Frontend Mentor challenges',
        ];
    }
}
