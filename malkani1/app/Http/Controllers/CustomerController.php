<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $button = "Submit";
        $title = "Customer Registration";
        $customer = null;
        $data = compact('url', 'title' , 'button' , 'customer');
        return view('customer')->with($data)
        ;
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
            );
            // echo "<pre>";
            // print_r($request->all());
            // Insert query
            $customer = new Customer;
            $customer->name= $request['name'];
            $customer->email= $request['email'];
            $customer->gender= $request['gender'];
            $customer->address= $request['address'];
            $customer->state= $request['state'];
            $customer->country= $request['country'];
            $customer->dob= $request['dob'];
            $customer->password= md5($request['password']);
            $customer->save();

            return redirect('/customer');
            //...........
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "") {
            // Where class
            $customers = Customer::where('name', 'LIKE', "%$search%")->orwhere('email','LIKE',"%$search%")->get();
        } else {
             $customers = Customer::paginate(15);
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function delete($id)
    {
       $customer = Customer::find($id);
       if(!is_null($customer))
       {
        $customer->delete();
       }
        return redirect('customer');
    }

    public function forceDelete($id)
    {
       $customer = Customer::withTrashed()->find($id);
       if(!is_null($customer))
       {
        $customer->forceDelete();
       }
        return redirect()->back();
    }

    public function restore($id)
    {
       $customer = Customer::withTrashed()->find($id);
       if(!is_null($customer))
       {
        $customer->restore();
       }
        return redirect('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer))
        {   // not found
            return redirect('customer');
        }else{
            // found
            $button = "Update";
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url', 'title', 'button');
            return view('customer')->with($data);
        }

    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name= $request['name'];
        $customer->email= $request['email'];
        $customer->gender= $request['gender'];
        $customer->address= $request['address'];
        $customer->state= $request['state'];
        $customer->country= $request['country'];
        $customer->dob= $request['dob'];
        $customer->save();
        return redirect('customer');
    }

}
