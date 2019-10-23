<?php

use App\Company;
use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('contact:company-clean',function(){
    $this->info("Cleaning!");
    $company = Company::whereDoesntHave('customers')
    ->get()
    ->each(function($company){
        $company->delete();
        return $this->warn("Delete ".$company->name);
    });
})->describe("Delete unused Company Name");

Artisan::command('contact:category-test',function(){
    $this->emergency('message');
    $this->alert('message');
    $this->critical('message');
    $this->error('message');
    $this->warning('message');
})->describe('Category Testing');
