<?php

namespace App\Services;

class SkillService
{
    /**
     * Get developer skills organized by category.
     */
    public function getSkills(): array
    {
        return [
            'Frontend Development' => [
                ['name' => 'HTML5', 'level' => 90],
                ['name' => 'CSS3', 'level' => 85],
                ['name' => 'JavaScript', 'level' => 80],
                ['name' => 'Responsive Design', 'level' => 85],
            ],
            'Backend Development' => [
                ['name' => 'PHP', 'level' => 75],
                ['name' => 'MySQL', 'level' => 70],
                ['name' => 'Authentication', 'level' => 75],
                ['name' => 'API Development', 'level' => 70],
            ],
            'Tools & Libraries' => [
                ['name' => 'Git/GitHub', 'level' => 80],
                ['name' => 'Chart.js', 'level' => 75],
                ['name' => 'Mobile-First Design', 'level' => 85],
                ['name' => 'UI/UX Principles', 'level' => 75],
            ],
        ];
    }

    /**
     * Get skills by a specific category.
     */
    public function getSkillsByCategory(string $category): array
    {
        return $this->getSkills()[$category] ?? [];
    }

    /**
     * Get all skill categories.
     */
    public function getCategories(): array
    {
        return array_keys($this->getSkills());
    }

    /**
     * Get total number of skills across all categories.
     */
    public function getTotalSkillCount(): int
    {
        $skills = $this->getSkills();
        return array_sum(array_map('count', $skills));
    }
}
