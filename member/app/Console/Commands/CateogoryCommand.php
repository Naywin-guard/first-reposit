<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class CateogoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:category {name} {company?} {quantity?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new Categories';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info("Adding new Category");
        $this->warn('Please must input name');
        $this->error("Error is coming");
        $cat = Category::create([
            'name'=>$this->argument('name'),
            'company_id'=>$this->argument('company')?? null,
            'quantity'=>$this->argument('quantity') ?? null
            ]);
        $this->info("Added :".$cat->name);

    }
}
