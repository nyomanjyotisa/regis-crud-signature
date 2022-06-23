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
            <h1>Edit Registration Data</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Fill this form to edit registration data</h4>
                  </div>
                  <div class="card-body">
                  {{-- menampilkan error validasi --}}
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <form action="/{{$data->id}}/edit" method="post">
                      @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room No*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_no" class="form-control" value="{{ $data->room_no }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Type*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_type" class="form-control" value="{{ $data->room_type }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Arrival*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="arrival" class="form-control" value="{{ $data->arrival }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departure*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="departure" class="form-control" value="{{ $data->departure }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Rate*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_rate" class="form-control" value="{{ $data->room_rate }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="last_name" class="form-control" value="{{ $data->last_name }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="first_name" class="form-control" value="{{ $data->first_name }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Source*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="source" class="form-control" value="{{ $data->source }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="address" class="form-control" value="{{ $data->address }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Place and Date of Birth*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="place_date_birth" class="form-control" value="{{ $data->place_date_birth }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Passport / ID Number*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="passport_id_number" class="form-control" value="{{ $data->passport_id_number }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nationality" class="form-control" value="{{ $data->nationality }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telp No/Handphone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telp_no_handphone" class="form-control" value="{{ $data->telp_no_handphone }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="city" class="form-control" value="{{ $data->city }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="email" class="form-control" value="{{ $data->email }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Signature*</label>
                    </div>
                    <div class="form-group row mb-4 col-sm-12 col-md-12">
                            <div id="sig" class="vh-100"></div>
                            <button id="clear" class="mt-3 btn btn-danger btn-sm">Clear Signature</button>
                            <textarea id="signature64" name="signature_path" style="display: none"></textarea>
                      </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Registration</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
@endsection
