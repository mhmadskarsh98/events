@extends('admin.layout2')
@section('title','edit event')
@section('content2')
    <div class="container-fluid">
      <br />
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h4>edit Event</h4>
              <hr />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form action="/admin/event/{{$event->id}}" method="POST">
                <div class="form-group row">
                  <label for="title" class="col-4 col-form-label">Title</label>
                  <div class="col-8">
                      @method('put')

                    @csrf
                    <input
                      id="title"
                      name="title"
                      placeholder="title"
                      value="{{$event->title}}"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>

                    <div class="invalid-feedback">
                      Please title is required.
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-4 col-form-label">Date</label>
                  <div class="col-8">
                    <input
                      id="name"
                      name="date"
                      value="{{$event->date}}"
                      placeholder="Date"
                      class="form-control here"
                      type="date"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Date is required.</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="time" class="col-4 col-form-label">Time</label>
                  <div class="col-8">
                    <input
                      id="time"
                      name="time"
                      value="{{$event->time}}"
                      placeholder="time"
                      class="form-control here"
                      type="time"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Time is required.</div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="label" class="col-4 col-form-label">Attendance Numbers</label>
                  <div class="col-8">
                    <input
                      id="AttendanceNumbers"
                      name="AttendanceNumbers"
                      value="{{$event->AttendanceNumbers}}"
                      placeholder="AttendanceNumbers"
                      class="form-control here"
                      type="AttendanceNumbers"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please AttendanceNumbers is required.</div>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="price" class="col-4 col-form-label">Price</label>
                  <div class="col-8">
                    <input
                      id="price"
                      name="price"
                      value="{{$event->price}}"
                      placeholder="price"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Price is required.
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="price" class="col-4 col-form-label"
                    >Country</label
                  >
                  <div class="col-8">
                    <input
                      id="country"
                      name="country"
                      value="{{$event->country}}"
                      placeholder="country"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Country is required.
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="price" class="col-4 col-form-label">City</label>
                  <div class="col-8">
                    <input
                      id="city"
                      name="city"
                      value="{{$event->city}}"
                      placeholder="city"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please City is required.</div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="price" class="col-4 col-form-label"
                    >Address</label
                  >
                  <div class="col-8">
                    <input
                      id="address"
                      name="address"
                      value="{{$event->address}}"
                      placeholder="address"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Address is required.
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">
                      Save
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

