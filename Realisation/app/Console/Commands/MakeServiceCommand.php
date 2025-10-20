<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * You can pass the name of the service as an argument.
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     */
    protected $description = 'Create a new service class';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');
        $serviceName = Str::studly($name) . 'Service';
        $path = app_path("Services/{$serviceName}.php");

        if (file_exists($path)) {
            $this->error("Service {$serviceName} already exists!");
            return;
        }

        if (!is_dir(app_path('Services'))) {
            mkdir(app_path('Services'), 0755, true);
        }

        $stub = <<<PHP
        <?php

        namespace App\Services;

        class {$serviceName}
        {
            public function __construct()
            {
                // Initialize your service
            }
        }
        PHP;

        file_put_contents($path, $stub);

        $this->info("✅ Service {$serviceName} created successfully at app/Services/");
    }
}
