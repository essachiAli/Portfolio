<?php

namespace App\Services;

class TechnologyService
{
    /**
     * Get developer technologies organized by category.
     */
    public function getTechnologies(): array
    {
        return [
            'Frontend' => [
                ['name' => 'HTML5', 'level' => 90],
                ['name' => 'CSS3', 'level' => 85],
                ['name' => 'JavaScript', 'level' => 80],
                ['name' => 'Tailwind CSS', 'level' => 85],
            ],
            'Backend' => [
                ['name' => 'PHP', 'level' => 75],
                ['name' => 'Laravel', 'level' => 80],
                ['name' => 'MySQL', 'level' => 70],
                ['name' => 'API Development', 'level' => 70],
            ],
            'Tools & Libraries' => [
                ['name' => 'Git & GitHub', 'level' => 80],
                ['name' => 'Chart.js', 'level' => 75],
                ['name' => 'Composer', 'level' => 85],
                ['name' => 'npm', 'level' => 80],
            ],
        ];
    }

    /**
     * Get technologies by a specific category.
     */
    public function getTechnologiesByCategory(string $category): array
    {
        return $this->getTechnologies()[$category] ?? [];
    }

    /**
     * Get all technology categories.
     */
    public function getCategories(): array
    {
        return array_keys($this->getTechnologies());
    }

    /**
     * Get total number of technologies across all categories.
     */
    public function getTotalTechnologyCount(): int
    {
        $technologies = $this->getTechnologies();
        return array_sum(array_map('count', $technologies));
    }
}
