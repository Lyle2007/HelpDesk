@include('includes.header')
@include('includes.nav-top')
<!-- Begin page content -->
<main role="main" class="container">
    <div class="row pt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Current Tickets</div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            New
                            <span class="badge badge-danger badge-pill" style="font-size: medium">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Open
                            <span class="badge badge-success badge-pill" style="font-size: medium">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pending Customer Response
                            <span class="badge badge-warning badge-pill" style="font-size: medium">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Special Status
                            <span class="badge badge-secondary badge-pill" style="font-size: medium">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Resolved
                            <span class="badge badge-secondary badge-pill" style="font-size: medium">57</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recent Actions</div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>New User Created: Lyle</span>
                            <span></span>
                            <span >6.23.2020 at 05:34 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Resolved Ticket: 100935</span>
                            <span >6.22.2020 at 02:30 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Customer Response Ticket: 42392
                            <span >6.22.2020 at 12:34 P.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ticket Closed: 98766
                            <span >6.22.2020 at 10:30 A.M.</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            System Error: 32442
                            <span >6.21.2020 at 09:45 A.M.</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>

</main>
@include('includes.footer')
