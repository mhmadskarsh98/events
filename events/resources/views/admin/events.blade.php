@extends('admin.layout2')
@section('title','events')
@section('content2')
    <div class="container-fluid">
      <hr />

      <h2>Events</h2>
      <hr />
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
      @foreach ($events as $event)
      <tr>
          <td>{{$event->city}}</td>
          <td>{{$event->date}}</td>
          <td>{{$event->time}}</td>
          <td>
            
            <a class="btn" href="/admin/event/{{$event->id}}/edit" >Edit</a>
            <form method="get" style="display:inline;" action="/admin/event/{{$event->id}}">
              @csrf
            <button class="btn ">show</button></form>
            |
            <form method="post" style="display:inline;" action="/admin/event/{{$event->id}}">
              @method('delete')
              @csrf
            <button class="btn ">Delete</button></form>
          </td>
        </tr>
          
      @endforeach
        </tbody>
      </table>
    </div>
@endsection


 
