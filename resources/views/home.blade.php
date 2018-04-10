









@extends('layouts.app')

@section('content')
<div class="admincontainer">
    <div class="adminsidenav">
        <div class="card">
            <div class="card-header">
                My Events 
                <a href="#newEventPanel" class="float-right" data-toggle="collapse" role="button">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;add new
                </a>
            </div>
            <div id="newEventPanel" class="collapse">
                <div class="card-body">
                    <div class="card-title">Event Name</div>
                    <div class="input-group form-group">
                        <select class="custom-select" name="event_type" id="event_type">
                            <option value="1" selected>Ms</option>
                            <option value="2">Mr</option>
                            <option value="3">Mr&amp;Ms</option>
                        </select>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="event_name" id="event_name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav list-group list-group-flush" role="tablist">
                @foreach(Auth::user()->event as $event)
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="admincontent">
        content
    </div>
</div>
@endsection
