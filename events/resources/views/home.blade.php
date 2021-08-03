@extends('layout')
@section('title','home')
@section('content')
    <div class="container-fluid">
      <div class="row">
        @foreach ($events as $event)
            <div class="col-sm-3 mt-3">
          <div class="card cardFix">
            <div class="card-body">
              <h5 class="card-title">Event: {{$event->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Date: {{$event->date}}</h6>
              <div>
                <span class="card-subtitle mb-2">Time: {{$event->time}}</span>
                
              </div>
              <p class="card-text">Price : {{$event->price}}$</p>
              <p class="card-text">Attendance Numbers :{{$event->AttendanceNumbers}}</p>
              <p class="card-text" *ngIf="event.location">
                Address: {{$event->address}}, {{$event->city}}, {{$event->country}}.
              </p>
            
            </div>
          </div>
        </div>
        @endforeach
        
       
      </div>
    </div>
@endsection
