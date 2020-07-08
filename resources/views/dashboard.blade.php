@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('js')

@endsection

@section('content')

    <main role="main" class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <card class="card-body">
                    </card>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr class="d-flex">
                                    <th class="col-2" scope="col">Ticket Number</th>
                                    <th class="col-6" scope="col">Title</th>
                                    <th class="col-2" scope="col">Status</th>
                                    <th class="col-2" scope="col">Assigned To</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tickets->sortByDesc('updated_at') as $ticket)
                                    <tr class="d-flex">
                                        <td class="col-2">#{{ $ticket->id }}</td>
                                        <td class="col-6">Title of the Ticket</td>
                                        <td class="col-2">
                                            <div class="btn-group btn-block" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                        class="btn @if($ticket->Status == 'Open') {{"btn-success"}} @else {{'btn-outline-secondary'}} @endif  dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    {{ $ticket->Status }}
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">Open</a>
                                                    <a class="dropdown-item" href="#">Closed</a>
                                                    <a class="dropdown-item" href="#">Waiting Response</a>
                                                    <a class="dropdown-item" href="#">Pending Guardian</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-2">
                                            <div class="btn-group btn-block" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    @if( $ticket->user['name'] == Null) {{'Not Assigned'}} @else {{$ticket->user['name']}}@endif
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    @foreach($agents as $agent)
                                                        <a class="dropdown-item" href="#">{{$agent->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
