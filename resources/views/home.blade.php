@extends('layouts.app')

@section('title', 'Home')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="container col-12 pt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="p-0 m-0">Contact our Help Desk</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Technology Issue</h5>
                                        <p class="card-text">Issues relating to I-Pads, Laptops, chromebooks, and other devices used for virtual learning.</p>
                                        <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#TechnologyModal">Submit a Ticket</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Enrollment Issue</h5>
                                        <p class="card-text">Issues relating to virtual classroom registration.</p>
                                        <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#EnrollmentModal">Submit a Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="p-0 m-0">Troubleshoot Here</h5>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
