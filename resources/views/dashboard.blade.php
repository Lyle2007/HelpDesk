@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <card class="card-body">

                    </card>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach ($tickets as $ticket)
                        <div class="card mb-1">
                            <div class="card-body p-1">
                                <span class="d-flex justify-content-between align-items-center">
                                    <span class="ml-2">Ticket Number: {{ $ticket->TicketNumber }}</span>
                                    <span>{{ $ticket->updated_at->format('d/m/Y')}}</span>
                                    <form action="">
                                        <div class="form-group m-auto">
                                            <select class="custom-select" required>
                                                <option @if($ticket->Status=='Open') {{'Selected'}} @else {{''}} @endif>Open</option>
                                                <option @if($ticket->Status=='Closed') {{'Selected'}} @else {{''}} @endif>Closed</option>
                                                <option @if($ticket->Status=='Pending Parent') {{'Selected'}} @else {{''}} @endif>Pending Parent</option>
                                                <option @if($ticket->Status=='Pending Guardian') {{'Selected'}} @else {{''}} @endif>Pending Guardian</option>
                                            </select>
                                        </div>
                                    </form>
                                </span>
                                    <span class="d-flex justify-content-between float-right">
                                    <form action="">
                                        <div class="form-group m-auto">
                                            <select class="custom-select" required>
                                                <option @if($ticket->Status=='Open') {{'Selected'}} @else {{''}} @endif></option>
                                                <option @if($ticket->Status=='Closed') {{'Selected'}} @else {{''}} @endif>Closed</option>
                                                <option @if($ticket->Status=='Pending Parent') {{'Selected'}} @else {{''}} @endif>Pending Parent</option>
                                                <option @if($ticket->Status=='Pending Guardian') {{'Selected'}} @else {{''}} @endif>Pending Guardian</option>
                                            </select>
                                        </div>
                                    </form>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


