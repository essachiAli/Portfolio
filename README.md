## 👤 Author

**Ali Essachi**  
Full Stack Developer from Tanger, Morocco  
Student at Group IKI (2023-2025)

Built following Laravel MVC + Services architecture best practices.

## 📄 License

This project is open-source and available for personal and commercial use.

---

**Happy Coding! 🚀**# Personal Developer Portfolio - Laravel MVC + Services

A modern, responsive personal portfolio website for **Ali Essachi**, built with Laravel, following MVC + Services architecture with Tailwind CSS for styling.

## 🎯 Features

- **Clean MVC + Services Architecture**: Separation of concerns with Controllers, Services, and Views
- **No Database Required**: All data is simulated through Laravel Services
- **Responsive Design**: Beautiful UI built with Tailwind CSS
- **Four Main Pages**:
  - Home (Hero, Stats, Featured Projects)
  - Projects (All Projects Grid)
  - Project Details (Individual Project Pages)
  - About (Profile, Skills, Education, Achievements, Languages, Interests)

## 👤 Portfolio Owner

**Ali Essachi**  
Full Stack Developer • Web Solutions Specialist  
📧 essachi.service@gmail.com  
📍 Tanger, Morocco

## 📁 Project Structure

```
app/
├── Http/
│   └── Controllers/
│       ├── HomeController.php
│       ├── ProjectController.php
│       └── AboutController.php
└── Services/
    ├── DeveloperService.php
    └── ProjectService.php

resources/
└── views/
    ├── layout.blade.php
    ├── home.blade.php
    ├── about.blade.php
    ├── partials/
    │   ├── nav.blade.php
    │   └── footer.blade.php
    └── projects/
        ├── index.blade.php
        └── show.blade.php

routes/
└── web.php
```

## 🚀 Installation

### Prerequisites
- PHP >= 8.1
- Composer
- Laravel 10.x or 11.x

### Step 1: Create Laravel Project
```bash
composer create-project laravel/laravel portfolio
cd portfolio
```

### Step 2: Create Directory Structure
```bash
mkdir -p app/Services
mkdir -p resources/views/partials
mkdir -p resources/views/projects
```

### Step 3: Create Service Files

Create `app/Services/DeveloperService.php` and `app/Services/ProjectService.php` with the provided code.

### Step 4: Create Controllers

Create the following controllers in `app/Http/Controllers/`:
- `HomeController.php`
- `ProjectController.php`
- `AboutController.php`

### Step 5: Create Views

Create the following Blade templates in `resources/views/`:
- `layout.blade.php`
- `home.blade.php`
- `about.blade.php`
- `partials/nav.blade.php`
- `partials/footer.blade.php`
- `projects/index.blade.php`
- `projects/show.blade.php`

### Step 6: Configure Routes

Replace the content of `routes/web.php` with the provided routes configuration.

### Step 7: Run the Application
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🏗️ Architecture Overview

### MVC + Services Pattern

#### **Controllers** (`app/Http/Controllers/`)
- Orchestrate the flow between Services and Views
- Handle HTTP requests
- Return views with data from Services

#### **Services** (`app/Services/`)
- Contain business logic
- Manage static data
- Provide data to Controllers

**DeveloperService:**
- `getProfile()`: Returns developer personal information
- `getSkills()`: Returns categorized skills with proficiency levels
- `getStats()`: Returns statistics (years in training, projects, etc.)
- `getLanguages()`: Returns spoken languages with proficiency
- `getInterests()`: Returns areas of interest
- `getEducation()`: Returns education details (Group IKI)
- `getAchievements()`: Returns key achievements

**ProjectService:**
- `getAllProjects()`: Returns all projects (EduGlobal LMS, Mobile Vendor System, Frontend Challenges)
- `getProjectBySlug()`: Returns a single project by slug
- `getFeaturedProjects()`: Returns featured projects for homepage
- `getCategories()`: Returns unique project categories
- `getProjectsByCategory()`: Filters projects by category

#### **Views** (`resources/views/`)
- Display data using Blade templating
- Responsive layouts with Tailwind CSS
- Reusable partials (navigation, footer)

### Routes

All routes are named for easy reference:

```php
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
```

## 🎨 Customization

### Updating Developer Profile

Edit `app/Services/DeveloperService.php`:

```php
public function getProfile(): array
{
    return [
        'name' => 'Ali Essachi',
        'title' => 'Full Stack Developer',
        'tagline' => 'Web Solutions Specialist',
        'bio' => 'Your bio...',
        'email' => 'essachi.service@gmail.com',
        'phone' => '+212 75 24 80 854',
        // ... other fields
    ];
}
```

### Adding New Projects

Edit `app/Services/ProjectService.php` and add new project arrays to the `getAllProjects()` method:

```php
[
    'id' => 4,
    'title' => 'New Project',
    'slug' => 'new-project',
    'description' => 'Short description',
    'long_description' => 'Detailed description...',
    'image' => 'https://example.com/image.jpg',
    'technologies' => ['PHP', 'MySQL', 'JavaScript'],
    'category' => 'Web Application',
    'date' => '2025-03',
    'github' => 'https://github.com/essachiAli/...',
    'demo' => 'https://demo.example.com',
    'features' => [
        'Feature 1',
        'Feature 2',
    ]
]
```

### Modifying Skills

Update the `getSkills()` method in `DeveloperService.php`:

```php
return [
    'Your Category' => [
        ['name' => 'Skill Name', 'level' => 85],
        // Add more skills...
    ],
];
```

### Changing Colors

The site uses Tailwind CSS with an indigo/purple color scheme. To change colors, replace:
- `indigo-600` with your preferred color
- `purple-700` for gradients

Example color alternatives:
- Blue: `blue-600`, `blue-700`
- Green: `green-600`, `green-700`
- Red: `red-600`, `red-700`
- Teal: `teal-600`, `teal-700`

## 📱 Responsive Design

The site is fully responsive with breakpoints:
- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

## 🧪 Testing Navigation

After setup, test these URLs:
- `http://localhost:8000/` - Home page
- `http://localhost:8000/projects` - All projects
- `http://localhost:8000/projects/e-commerce-platform` - Project details
- `http://localhost:8000/about` - About page

## 🔍 Key Features Explained

### Service Injection
Controllers receive services via dependency injection:
```php
public function __construct(DeveloperService $developerService)
{
    $this->developerService = $developerService;
}
```

### Named Routes
All routes are named for easy URL generation:
```php
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('projects.show', $project['slug']) }}">View Project</a>
```

### Layout Inheritance
Views extend the main layout:
```php
@extends('layout')
@section('content')
    <!-- Page content -->
@endsection
```

### Reusable Partials
Navigation and footer are included via partials:
```php
@include('partials.nav')
@include('partials.footer')
```

## 📝 Code Quality

- **Clean Code**: Well-organized, readable, and documented
- **Separation of Concerns**: MVC + Services pattern
- **Reusable Components**: Partials and layouts
- **Semantic HTML**: Proper HTML5 structure
- **Accessibility**: ARIA attributes where needed

## 🎓 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)

## 📄 License

This project is open-source and available for personal and commercial use.

## 👤 Author

Built following Laravel MVC + Services architecture best practices.

---

**Happy Coding! 🚀**
