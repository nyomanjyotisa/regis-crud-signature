@extends('layout.layout')

@section('title', 'Registration CRUD')

@section('sidebar')
@include('layout.sidebar')
@endsection

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="/" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Registration Data Detail</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room No*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_no" class="form-control" value="{{ $data->room_no }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Type*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_type" class="form-control" value="{{ $data->room_type }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Arrival*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="arrival" class="form-control" value="{{ $data->arrival }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departure*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="departure" class="form-control" value="{{ $data->departure }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Rate*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_rate" class="form-control" value="{{ $data->room_rate }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="last_name" class="form-control" value="{{ $data->last_name }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="first_name" class="form-control" value="{{ $data->first_name }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Source*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="source" class="form-control" value="{{ $data->source }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="address" class="form-control" value="{{ $data->address }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Place and Date of Birth*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="place_date_birth" class="form-control" value="{{ $data->place_date_birth }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Passport / ID Number*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="passport_id_number" class="form-control" value="{{ $data->passport_id_number }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nationality" class="form-control" value="{{ $data->nationality }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telp No/Handphone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telp_no_handphone" class="form-control" value="{{ $data->telp_no_handphone }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="city" class="form-control" value="{{ $data->city }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="email" class="form-control" value="{{ $data->email }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Signature*</label>
                      <div class="col-sm-12 col-md-7">
                        <img src="/signatures/{{$data->signature_path}}" alt="" width="500" height="333">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
