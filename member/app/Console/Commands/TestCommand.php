<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'contact:company {name} {phone=N/A}';
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new company';

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
        // $company = Company::create([
        //     'name'=>$this->argument('name'),
        //     'phone'=>$this->argument('phone') ?? "N/A"
        // ]);
        // $this->info("Added Company : ".$company->name);
        // $this->info("Phone  : ".$company->phone);

            $name = $this->ask("What is Company Name ");
            $phone = $this->ask("What is Company's phone number ") ?? "N/A";
            $this->info($name);
            $this->info($phone);

            if($this->confirm("Are U sure to add ".$name ." ? ")){
                $company = Company::create([
                    'name'=>$name,
                    'phone'=>$phone
                ]);
                return $this->info($company->name . " is added");
            }

            $this->warn("No company name is added");

    }
}
