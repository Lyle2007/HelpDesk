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
                        @foreach ($tickets->sortByDesc('updated_at') as $ticket)
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-1">
                                        <div class="card-body p-1">
                                                <div class="col-3 float-left">Ticket Number: {{ $ticket->TicketNumber }}</div>
                                                <div class="col-3 float-left">{{ $ticket->updated_at->format('d/m/Y')}}</div>
                                            <div class="col-2 float-right">
                                            {{--Who is assigned to this ticket--}}
                                                <form action="">
                                                    <div class="form-group m-auto">
                                                        <select class="custom-select" required>
                                                            <option @if($ticket->Status=='Open') {{'Selected'}} @else {{''}} @endif>
                                                                Open
                                                            </option>
                                                            <option @if($ticket->Status=='Closed') {{'Selected'}} @else {{''}} @endif>
                                                                Closed
                                                            </option>
                                                            <option @if($ticket->Status=='Pending Parent') {{'Selected'}} @else {{''}} @endif>
                                                                Pending Parent
                                                            </option>
                                                            <option @if($ticket->Status=='Pending Guardian') {{'Selected'}} @else {{''}} @endif>
                                                                Pending Guardian
                                                            </option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-2 float-right">
                                            {{--What is the current Status of this ticket--}}
                                                <form action="">
                                                    <div class="form-group pl-0 m-auto">
                                                        <select class="custom-select" required>
                                                            <option @if($ticket->AssignedTo == 0 || Null) {{'selected'}} @else {{''}} @endif>
                                                                Not Assigned
                                                            </option>
                                                            @foreach($agents as $agent)
                                                            <option @if($agent->name == $ticket->AssignedAgent) {{'Selected'}} @else {{''}} @endif>
                                                                {{$agent->name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


