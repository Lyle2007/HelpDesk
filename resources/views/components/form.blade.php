<div class="card">
    <div class="card-header">
        Component: Form
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('form')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="StreetNumberInput">Street Number</label>
                    <input type="number" class="form-control" id="StreetNumberInput" name="StreetNumber" placeholder="123">
                </div>
                <div class="form-group col-md-9">
                    <label for="AddressInput">Address</label>
                    <input type="text" class="form-control" id="AddressInput" name="AddressOne" placeholder="Main St">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="AddressTwoInput">Address 2</label>
                    <input type="text" class="form-control" id="AddressTwoInput" name="AddressTwo"
                           placeholder="Apartment, studio, or floor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="CityInput">City</label>
                    <input type="text" class="form-control" name="City" id="CityInput">
                </div>
                <div class="form-group col-md-4">
                    <label for="StateInput">State</label>
                    <select id="StateInput" class="form-control" name="State">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="ZipInput">Zip</label>
                    <input type="text" class="form-control" id="ZipInput" name="Zipcode">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
