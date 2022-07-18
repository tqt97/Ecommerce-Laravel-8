<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $view = $this->argument('view');

        $path = $this->viewPath($view);

        $this->createDir($path);

        if (File::exists($path)) {
            $this->error("View {$path} already exists!");
            return;
        }

        File::put($path, '');

        $this->info("View {$path} created.");
    }
    /**
     * Get the view full path.
     *
     * @param $view
     * @return string
     */
    private function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        return "resources/views/{$view}";
    }

    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    private function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
