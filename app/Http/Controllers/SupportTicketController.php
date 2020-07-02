<?php

namespace App\Http\Controllers;

use App\SupportTicket;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function store(Request $request)
    {
        SupportTicket::create(request()->validate([
            'TicketNumber'      => 'nullable',
            'Status'            => '',
            'Tags'              => '',
            'AssignedTo'        => 'nullable',
            'GuardianFirstName' => '',
            'GuardianLastName'  => '',
            'StudentFirstName'  => '',
            'StudentLastName'   => '',
            'GuardianEmail'     => '',
            'GuardianPhone'     => '',
            'GuardianDevice'    => 'nullable',
            'StudentSchool'     => '',
            'StudentGrade'      => '',
            'DeviceOwnership'   => '',
            'SchoolDevice'      => 'nullable',
            'ConnectionType'    => '',
            'IssueDescription'  => ''
        ]));
        return redirect(route('home'));
    }
}
