<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        Form::create(request()->validate([
            'StreetNumber' => 'required | numeric',
            'AddressOne' => 'required | string',
            'AddressTwo' => 'nullable | string',
            'City' => 'required | string',
            'State' => 'required | string',
            'Zipcode' => 'required | numeric',
        ]));
        return redirect('/');
    }

}
