<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Customer;
class CustomersController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }
   public function index(){
    $customers=Customer::all();
    $companies = Company::all();
    //  $activecustomers = Customer::active()->get();
    //  $inactivecustomers = Customer::inactive()->get();
    //   return view('customers.index',[
    //     "activecustomers"=>$activecustomers,
    //     "inactivecustomers"=>$inactivecustomers
    //   ]);
    return view('customers.index',compact('customers','companies'));
   }
   public function create(){
    $customer = new Customer();
    $companies = Company::all();
    return view('customers.create',compact('companies','customer'));
   }
   public function store(){
    Customer::create($this->validateRequest());
     return redirect('customers');
   }

   public function show($customer){
       $customer = Customer::where('id',$customer)->firstOrFail();
       return view('customers.show',compact('customer'));
   }
   public function edit(Customer $customer){
    $companies = Company::all();
    return view('customers.edit',compact('companies','customer'));
   }
   public function update(Customer $customer){

      $customer->update($this->validateRequest());
       return redirect('customers/'.$customer->id);
   }

   public function destroy(Customer $customer){
       $customer->delete();

       return redirect('customers');
   }
   private function validateRequest(){
    return request()->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'active'=>'required',
        'company_id'=>'required'
      ]);
   }
}
