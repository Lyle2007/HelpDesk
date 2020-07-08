<table class="table table-responsive-md">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Ticket Number</th>
        <th scope="col">Status</th>
        <th scope="col">Assigned To</th>
        <th scope="col">Last Updated</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tickets->sortByDesc('updated_at') as $ticket)
        <tr>
            <td>
                <button class="btn btn-primary">View</button>
            </td>
            <td>#{{ $ticket->id }}</td>
            <td>
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
            </td>
            <td @if($ticket->AssignedTo == 0 || Null) {{'selected'}} @else {{''}} @endif>
                <select class="custom-select" required>
                    <option @if($ticket->AssignedTo == 0 || Null) {{'selected'}} @else {{''}} @endif>
                        Not Assigned
                    </option>
                    @foreach($agents as $agent)
                        <option @if($agent->name == $ticket->user['name']) {{'Selected'}} @else {{''}} @endif>
                            {{$agent->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>{{ $ticket->updated_at->format('m/d/Y H:m:s')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
