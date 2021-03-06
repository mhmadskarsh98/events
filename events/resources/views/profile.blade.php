@extends('layout')
@section('title','profile')
@section('content')

    <div class="container-fluid">
      <br />
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h4>Your Profile</h4>
              <hr />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form>
                <div class="form-group row">
                  <label for="username" class="col-4 col-form-label"
                    >User Name</label
                  >
                  <div class="col-8">
                    <input
                      id="username"
                      name="username"
                      placeholder="Username"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>

                    <div class="invalid-feedback">
                      Please username is required.
                    </div>
                    <div class="invalid-feedback">
                      Please username max Length is 5.
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-4 col-form-label"
                    >First Name</label
                  >
                  <div class="col-8">
                    <input
                      id="name"
                      name="name"
                      placeholder="First Name"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please First Name is required.
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lastname" class="col-4 col-form-label"
                    >Last Name</label
                  >
                  <div class="col-8">
                    <input
                      id="lastname"
                      name="lastname"
                      placeholder="Last Name"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Last Name is required.
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="website" class="col-4 col-form-label"
                    >Website</label
                  >
                  <div class="col-8">
                    <input
                      id="website"
                      name="website"
                      placeholder="website"
                      class="form-control here"
                      type="text"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Last Website is required.
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="publicinfo" class="col-4 col-form-label"
                    >Public Info</label
                  >
                  <div class="col-8">
                    <textarea
                      id="publicinfo"
                      name="publicinfo"
                      cols="40"
                      rows="4"
                      class="form-control"
                    ></textarea>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Public Info Website is required.
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">
                      Update My Profile
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

 
