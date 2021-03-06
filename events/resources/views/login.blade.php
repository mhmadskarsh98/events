@extends('layout')
@section('title','login')
@section('content')

    <div class="container-fluid">
      <h1>Login</h1>

      <form>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputEmail4">Email</label>
            <input
              type="email"
              required
              name="email"
              class="form-control"
              placeholder="Email"
            />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please email is required.</div>
          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Password</label>
            <input
              type="password"
              required
              name="password"
              class="form-control"
              placeholder="Password"
            />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please password is required.</div>
          </div>
        </div>
        <button type="button" class="btn btn-primary">
          Sign in
        </button>
      </form>
    </div>
@endsection
 