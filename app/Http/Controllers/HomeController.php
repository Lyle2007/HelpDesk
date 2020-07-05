<?php

namespace App\Http\Controllers;

use App\SupportTicket;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $agents = User::all('name');
        $tickets = SupportTicket::where('Status', '!=', 'Closed')->paginate(10);

        return view('dashboard', ['tickets' => $tickets, 'agents' => $agents]);

    }
}
