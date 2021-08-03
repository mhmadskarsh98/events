@extends('layout')
@section('title','home')
@section('content')
    <div class="container-fluid">
      <div class="row">
            <div class="col-sm-3 mt-3">
          <div class="card cardFix">
            <div class="card-body">
              <h5 class="card-title">Event: {{$event->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Date: {{$event->date}}</h6>
              <div>
                <span class="card-subtitle mb-2">Time: {{$event->time}}</span>
                <span> (Early Start)</span>
                <span> (Late Start)</span>
                <span> (Normal Start)</span>
              </div>
              <p class="card-text">Price : {{$event->price}}$</p>
              <p class="card-text">Attendance Numbers : 1000</p>
              <p class="card-text" *ngIf="event.location">
                Address: {{$event->address}}, {{$event->city}}, {{$event->country}}.
              </p>
              <p class="card-text">
                Online URL: http://visionplus.ps
              </p>
              <form method="get" action="/admin/event">
                @csrf
            </div>

          </div>
          <button class="btn ">go back</button></form>

        </div>

        
       
      </div>

    </div>

@endsection

