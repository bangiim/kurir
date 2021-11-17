@extends('backend.layout.master')

@section('judul')
Form Edit Account
@endsection
    
@section('content')
  <div class="card col-8">
    <form action="/account/{{$user->id}}" method="POST">
      <div class="card-body mt-3">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Full name</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ $user->name }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $user->email }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Level</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-control" name="level_id">
                <option>-- Select a Level --</option>
                @foreach ($level as $item)
                      @if ($item->id === $user->level_id)
                          <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                      @else
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endif
                  @endforeach
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-caret-square-down"></span>
                </div>
              </div>
              @error('level_id')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <small class="text-danger">*Isi jika ingin mengubah password, minimal 8 karakter</small>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Retype password</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/account" class="btn btn-danger float-right">Cancel</a>
      </div>
    </form>
  </div>
@endsection