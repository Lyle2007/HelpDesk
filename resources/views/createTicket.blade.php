@extends('layouts.app')
@section('css')@endsection
@section('js')@endsection

@section('content')
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                New Ticket
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('form')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="StreetNumberInput">Street Number</label>
                            <input type="text" class="form-control" id="StreetNumberInput" name="StreetNumber" required>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="AddressInput">Address</label>
                            <input type="text" class="form-control" id="AddressInput" name="AddressOne" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="AddressTwoInput">Address 2</label>
                            <input type="text" class="form-control" id="AddressTwoInput" name="AddressTwo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="CityInput">City</label>
                            <input type="text" class="form-control" name="City" id="CityInput" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="StateInput">State</label>
                            <select id="StateInput" class="form-control" name="State" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ZipInput">Zip</label>
                            <input type="text" class="form-control" id="ZipInput" name="Zipcode" required>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>


@endsection
