<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
   
    public function index()
    {
        
        return BankAccount::all();
    }

   
    public function store(Request $request)
    {
        return BankAccount::create(
            ['name' => $request->name,
            'address'=> $request->address,
            'phone_number'=>$request->phone_number,
            'bank_name' => $request->bank_name,
            'bank_account_number' => $request->bank_account_number,
            'bank_account_type' => $request->bank_account_type,
            'email' => $request->email
            ]
        );
    }

   
    public function show($id)
    {
        return BankAccount::find($id);
    }

    
    public function update(Request $request, $id)
    {
        BankAccount::find($id)->update(
            ['name' => $request->name,
            'address'=> $request->address,
            'phone_number'=>$request->phone_number,
            'bank_name' => $request->bank_name,
            'bank_account_number' => $request->bank_account_number,
            'bank_account_type' => $request->bank_account_type,
            'email' => $request->email
            ]
        );
    }

   
    public function destroy($id)
    {
        BankAccount::find($id)->delete();
    }
}
