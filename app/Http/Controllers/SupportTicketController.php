<?php

namespace App\Http\Controllers;

use App\SupportTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function store(Request $request)
    {

        SupportTicket::create(request()->validate([
            'Tags'              => 'nullable',
            'AssignedTo'        => 'nullable',
            'GuardianFirstName' => 'required',
            'GuardianLastName'  => 'required',
            'StudentFirstName'  => 'required',
            'StudentLastName'   => 'required',
            'GuardianEmail'     => 'required',
            'GuardianPhone'     => 'nullable',
            'GuardianDevice'    => 'nullable',
            'StudentSchool'     => 'required',
            'StudentGrade'      => 'required',
            'DeviceOwnership'   => 'nullable',
            'SchoolDevice'      => 'nullable',
            'ConnectionType'    => 'required',
            'IssueDescription'  => 'required'
        ]));

        return redirect(route('home'));
    }
}
