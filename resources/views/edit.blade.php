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
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room No*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_no" id="room_no" class="form-control" value="{{ $data->room_no }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Type*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_type" id="room_type" class="form-control" value="{{ $data->room_type }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Arrival*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="arrival" id="arrival" class="form-control" value="{{ $data->arrival }}" onchange='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departure*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="departure" id="departure" class="form-control" value="{{ $data->departure }}" onchange='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Rate*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="room_rate" id="room_rate" class="form-control" value="{{ $data->room_rate }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $data->last_name }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $data->first_name }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Source*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="source" id="source" class="form-control" value="{{ $data->source }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="address" id="address" class="form-control" value="{{ $data->address }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Place and Date of Birth*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="place_date_birth" id="place_date_birth" class="form-control" value="{{ $data->place_date_birth }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Passport / ID Number*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="passport_id_number" id="passport_id_number" class="form-control" value="{{ $data->passport_id_number }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nationality" id="nationality" class="form-control" value="{{ $data->nationality }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telp No/Handphone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telp_no_handphone" id="telp_no_handphone" class="form-control" value="{{ $data->telp_no_handphone }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="city" id="city" class="form-control" value="{{ $data->city }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email*</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="email" id="email" class="form-control" value="{{ $data->email }}" onkeyup='saveValue(this);'>
                      </div>
                    </div>
                    <div id="create-sign" class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Signature*</label>
                      <div class="col-sm-12 col-md-7">
                        <a href="/sign" id="show" class="mt-3 btn btn-success btn-sm active">Draw Signature</a><br>
                        <img id="signPreview" src="" alt="" width="500" height="333">
                        <textarea id="signature64" name="signature_path" style="display: none"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4 hide-sign">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update Registration</button>
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

    if(sessionStorage.length != 0){
      $("#show").text("Update Signature");
      $('#signPreview').attr("src", sessionStorage.signature);
      $('#signPreview').show();
      $("#signature64").val(sessionStorage.signature);

      document.getElementById("room_no").value = getSavedValue("room_no");
      document.getElementById("room_type").value = getSavedValue("room_type");
      document.getElementById("arrival").value = getSavedValue("arrival");
      document.getElementById("departure").value = getSavedValue("departure");
      document.getElementById("last_name").value = getSavedValue("last_name");
      document.getElementById("first_name").value = getSavedValue("first_name");
      document.getElementById("room_rate").value = getSavedValue("room_rate");
      document.getElementById("source").value = getSavedValue("source");
      document.getElementById("address").value = getSavedValue("address");
      document.getElementById("place_date_birth").value = getSavedValue("place_date_birth");
      document.getElementById("passport_id_number").value = getSavedValue("passport_id_number");
      document.getElementById("nationality").value = getSavedValue("nationality");
      document.getElementById("city").value = getSavedValue("city");
      document.getElementById("telp_no_handphone").value = getSavedValue("telp_no_handphone");
      document.getElementById("email").value = getSavedValue("email");
    }else{
      $('#signPreview').hide();
      saveValue(document.getElementById("room_no"));
      saveValue(document.getElementById("room_type"));
      saveValue(document.getElementById("arrival"));
      saveValue(document.getElementById("departure"));
      saveValue(document.getElementById("last_name"));
      saveValue(document.getElementById("first_name"));
      saveValue(document.getElementById("room_rate"));
      saveValue(document.getElementById("source"));
      saveValue(document.getElementById("address"));
      saveValue(document.getElementById("place_date_birth"));
      saveValue(document.getElementById("passport_id_number"));
      saveValue(document.getElementById("nationality"));
      saveValue(document.getElementById("city"));
      saveValue(document.getElementById("telp_no_handphone"));
      saveValue(document.getElementById("email"));
    }

    window.addEventListener( "pageshow", function ( event ) {
      var historyTraversal = event.persisted || 
                            ( typeof window.performance != "undefined" && 
                                  window.performance.navigation.type === 2 );
      if ( historyTraversal ) {
        // Handle page restore.
        window.location.reload();
      }
    });



    //Save the value function - save it to localStorage as (ID, VALUE)
    function saveValue(e){
        var id = e.id;  // get the sender's id to save it . 
        var val = e.value; // get the value. 
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
    }

    //get the saved value function - return the value of "v" from localStorage. 
    function getSavedValue  (v){
        if (!localStorage.getItem(v)) {
            return "";// You can change this to your defualt value. 
        }
        return localStorage.getItem(v);
    }
</script>
@endsection
