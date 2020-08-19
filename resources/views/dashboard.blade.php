@extends('home')

@section('content')


<!-- imprestion, goal, impect end -->
<ul class="nav nav-pills custom-pills row" id="pills-tab" role="tablist">
    <!-- project-ticket start -->
    <div class="col-xl-4 col-md-12">
        <div class="card proj-t-card">
            <div class="card-body">
                <div class="row align-items-center mb-30">
                    <div class="col-auto">
                        <i class="far fa-calendar-check text-red f-30"></i>
                    </div>
                    <div class="col pl-0">
                        <h6 class="mb-5">Late Project</h6>
                        <h6 class="mb-0 text-red">Live Update</h6>
                    </div>
                </div>
                <div class="row align-items-center text-center">
                    <div class="col">
                        <h6 class="mb-0">327</h6>
                    </div>
                    <div class="col"><i class="fas fa-exchange-alt text-red f-18"></i></div>
                    <div class="col">
                        <h6 class="mb-0">10 Days</h6>
                    </div>
                </div>
                <h6 class="pt-badge bg-red">53%</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card proj-t-card">
            <div class="card-body">
                <div class="row align-items-center mb-30">
                    <div class="col-auto">
                        <i class="fas fa-paper-plane text-green f-30"></i>
                    </div>
                    <div class="col pl-0">
                        <h6 class="mb-5">Project Launched</h6>
                        <h6 class="mb-0 text-green">Live Update</h6>
                    </div>
                </div>
                <div class="row align-items-center text-center">
                    <div class="col">
                        <h6 class="mb-0">3 Year</h6>
                    </div>
                    <div class="col"><i class="fas fa-exchange-alt text-green f-18"></i></div>
                    <div class="col">
                        <h6 class="mb-0">623</h6>
                    </div>
                </div>
                <h6 class="pt-badge bg-green">76%</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card proj-t-card">
            <div class="card-body">
                <div class="row align-items-center mb-30">
                    <div class="col-auto">
                        <i class="fas fa-lightbulb text-yellow f-30"></i>
                    </div>
                    <div class="col pl-0">
                        <h6 class="mb-5">Actions</h6>
                        <h6 class="mb-0 text-yellow">Live Update</h6>
                    </div>
                </div>
                <div class="row align-items-center text-center">
                    <div class="col">
                        <h6 class="mb-0">1 Month</h6>
                    </div>
                    <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                    <div class="col">
                        <h6 class="mb-0">248</h6>
                    </div>
                </div>
                <h6 class="pt-badge bg-yellow">73%</h6>
            </div>
        </div>
    </div>
    <!-- project-ticket end -->


 <!-- ticket, proj, clent start -->


<div class="col-xl-3 col-md-6">
    <div class="card ticket-card">
        <div class="card-body">
            <p class="mb-30 bg-green lbl-card"><i class="fas fa-users"></i> New Clients</p>
            <div class="text-center">
                <h2 class="mb-0 d-inline-block text-green">307</h2>
                <p class="mb-0 d-inline-block">Clients</p>
                <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>From Previous Month</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card ticket-card">
        <div class="card-body">
            <p class="mb-30 bg-warning lbl-card"><i class="fas fa-database"></i> New Orders</p>
            <div class="text-center">
                <h2 class="mb-0 d-inline-block text-warning">231</h2>
                <p class="mb-0 d-inline-block">Orders</p>
                <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-warning"></i>From Previous Month</p>
            </div>
        </div>
    </div>
</div>
<!-- ticket, proj, clent end -->



<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-calendar bg-blue"></i>
                    <div class="d-inline">
                        <h5>Calendar</h5>
                        <span>To Do</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="editEventLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="editEventForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editEventLabel">Edit Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editEname">Event Title</label>
                            <input type="text" class="form-control" id="editEname" name="editEname" placeholder="Please enter event title">
                        </div>
                        <div class="form-group">
                            <label for="editStarts">Start</label>
                            <input type="text" class="form-control datetimepicker-input" id="editStarts" name="editStarts" data-toggle="datetimepicker" data-target="#editStarts">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-danger delete-event" type="submit">Delete</button>
                        <button class="btn btn-success save-event" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="addEventLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventLabel">Add New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="addEventForm">
                        <div class="form-group">
                            <label for="eventName">Event Title</label>
                            <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Please enter event title">
                        </div>
                        <div class="form-group">
                            <label for="eventStarts">Starts</label>
                            <input type="text" class="form-control datetimepicker-input" id="eventStarts" name="eventStarts" data-toggle="datetimepicker" data-target="#eventStarts">
                        </div>
                        <div class="form-group mb-0" id="addColor">
                            <label for="colors">Choose Color</label>
                            <ul class="color-selector">
                                <li class="bg-aqua">
                                    <input type="radio" data-color="bg-aqua" checked name="colorChosen" id="addColorAqua">
                                    <label for="addColorAqua"></label>
                                </li>
                                <li class="bg-blue">
                                    <input type="radio" data-color="bg-blue" name="colorChosen" id="addColorBlue">
                                    <label for="addColorBlue"></label>
                                </li>
                                <li class="bg-light-blue">
                                    <input type="radio" data-color="bg-light-blue" name="colorChosen" id="addColorLightblue">
                                    <label for="addColorLightblue"></label>
                                </li>
                                <li class="bg-teal">
                                    <input type="radio" data-color="bg-teal" name="colorChosen" id="addColorTeal">
                                    <label for="addColorTeal"></label>
                                </li>
                                <li class="bg-yellow">
                                    <input type="radio" data-color="bg-yellow" name="colorChosen" id="addColorYellow">
                                    <label for="addColorYellow"></label>
                                </li>
                                <li class="bg-orange">
                                    <input type="radio" data-color="bg-orange" name="colorChosen" id="addColorOrange">
                                    <label for="addColorOrange"></label>
                                </li>
                                <li class="bg-green">
                                    <input type="radio" data-color="bg-green" name="colorChosen" id="addColorGreen">
                                    <label for="addColorGreen"></label>
                                </li>
                                <li class="bg-lime">
                                    <input type="radio" data-color="bg-lime" name="colorChosen" id="addColorLime">
                                    <label for="addColorLime"></label>
                                </li>
                                <li class="bg-red">
                                    <input type="radio" data-color="bg-red" name="colorChosen" id="addColorRed">
                                    <label for="addColorRed"></label>
                                </li>
                                <li class="bg-purple">
                                    <input type="radio" data-color="bg-purple" name="colorChosen" id="addColorPurple">
                                    <label for="addColorPurple"></label>
                                </li>
                                <li class="bg-fuchsia">
                                    <input type="radio" data-color="bg-fuchsia" name="colorChosen" id="addColorFuchsia">
                                    <label for="addColorFuchsia"></label>
                                </li>
                                <li class="bg-muted">
                                    <input type="radio" data-color="bg-muted" name="colorChosen" id="addColorMuted">
                                    <label for="addColorMuted"></label>
                                </li>
                                <li class="bg-navy">
                                    <input type="radio" data-color="bg-navy" name="colorChosen" id="addColorNavy">
                                    <label for="addColorNavy"></label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event">Save</button>
                    <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection