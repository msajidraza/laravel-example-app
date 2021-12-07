<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customers')->with($data);  
    }

    public function customerForm()
    {
        return view('addcustomer');
    }

    public function store(CustomerRequest $req)
    {
        /* $req->validate(
            [
                'fullname' => 'required|min:3|max:100',
                'mobile' => 'required|numeric|min:10|max:12',
                'email' => 'required|email|max:65',
                'address' => 'required',
                'city' => 'required|min:3|max:25',
                'pincode' => 'required|max:6',
                'state' => 'required|min:2|max:25',
            ]
        ); */

        $req->validated();

        $customer = new Customer;
        $customer->fullname = $req['fullname'];
        $customer->mobile = $req['mobile'];
        $customer->email = $req['email'];
        $customer->address = $req['address'];
        $customer->city = $req['city'];
        $customer->pincode = $req['pincode'];
        $customer->state = $req['state'];
        $save = $customer->save();
        if($save)
        {
            return back()->with('success', 'Form Data has been save successfully');
        }
        else
        {
            return back()->with('fail', 'Form Data saving failed');
        }
    }
}
