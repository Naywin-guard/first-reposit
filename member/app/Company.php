<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Company extends Model
{
    protected $guarded=[];
    public function customers(){
      return $this->hasMany(Customer::class);
    }
    public function categories(){
      return $this->hasMany(Category::class);
    }
}
