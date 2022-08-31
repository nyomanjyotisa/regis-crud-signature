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
      <h1>Create New Registration</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Fill this form to add a new registration</h4>
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
              <form action="/new" method="post">
                @csrf
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="room_no">Room No*</label><br>
                  <div class="col-sm-12 col-md-7">
                    <select name="room_no" id="room_no" class="form-select dropdown_item_select" onchange='saveValue(this);' required>
                      <option value="">Select Room</option>
                      <option value="701" @if (old('room_no')=="701" ) {{ 'selected' }} @endif>701</option>
                      <option value="702">702</option>
                      <option value="703">703</option>
                      <option value="705">705</option>
                      <option value="706">706</option>
                      <option value="707">707</option>
                      <option value="801">801</option>
                      <option value="802">802</option>
                      <option value="803">803</option>
                      <option value="805">805</option>
                      <option value="806">806</option>
                      <option value="807">807</option>
                      <option value="901">901</option>
                      <option value="902">902</option>
                      <option value="903">903</option>
                      <option value="905">905</option>
                      <option value="906">906</option>
                      <option value="907">907</option>
                      <option value="Cempaka">Cempaka</option>
                      <option value="Cendana">Cendana</option>
                      <option value="Sandat">Sandat</option>
                      <option value="Majegau">Majegau</option>
                      <option value="Nagasari">Nagasari</option>
                      <option value="Kemuning">Kemuning</option>
                      <option value="Celagi">Celagi</option>
                      <option value="Waru">Waru</option>
                      <option value="Jati">Jati</option>
                      <option value="Kepundung">Kepundung</option>
                      <option value="Ceroring">Ceroring</option>
                      <option value="Wani">Wani</option>
                      <option value="Gintung">Gintung</option>
                      <option value="Bunut">Bunut</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Type*</label>
                  <div class="col-sm-12 col-md-7">
                    <select name="room_type" id="room_type" class="form-select dropdown_item_select" onchange='saveValue(this);' required>
                      <option value="">Select Room Type</option>
                      <option value="Suite">Suite</option>
                      <option value="Garden Suite">Garden Suite</option>
                      <option value="Pool Suite">Pool Suite</option>
                      <option value="Ubud Pool Suite">Ubud Pool Suite</option>
                      <option value="Pool Villa">Pool Villa</option>
                      <option value="Duplex Pool Villa">Duplex Pool Villa</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Arrival*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="date" name="arrival" id="arrival" class="form-control" value="{{ old('arrival') }}" onchange='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departure*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="date" name="departure" id="departure" class="form-control" value="{{ old('departure') }}" onchange='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Room Rate*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="room_rate" id="room_rate" class="form-control" value="{{ old('room_rate') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Source*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="source" id="source" class="form-control" value="{{ old('source') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Place and Date of Birth*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="place_date_birth" id="place_date_birth" class="form-control" value="{{ old('place_date_birth') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Passport / ID Number*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="passport_id_number" id="passport_id_number" class="form-control" value="{{ old('passport_id_number') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality*</label>
                  <div class="col-sm-12 col-md-7">
                    <select name="nationality" id="nationality" class="form-select dropdown_item_select" onchange='saveValue(this);' required>
                      <option value="">-- select one --</option>
                      <option value="Afghan">Afghan</option>
                      <option value="Albanian">Albanian</option>
                      <option value="Algerian">Algerian</option>
                      <option value="American">American</option>
                      <option value="Andorran">Andorran</option>
                      <option value="Angolan">Angolan</option>
                      <option value="Antiguans">Antiguans</option>
                      <option value="Argentinean">Argentinean</option>
                      <option value="Armenian">Armenian</option>
                      <option value="Australian">Australian</option>
                      <option value="Austrian">Austrian</option>
                      <option value="Azerbaijani">Azerbaijani</option>
                      <option value="Bahamian">Bahamian</option>
                      <option value="Bahraini">Bahraini</option>
                      <option value="Bangladeshi">Bangladeshi</option>
                      <option value="Barbadian">Barbadian</option>
                      <option value="Barbudans">Barbudans</option>
                      <option value="Batswana">Batswana</option>
                      <option value="Belarusian">Belarusian</option>
                      <option value="Belgian">Belgian</option>
                      <option value="Belizean">Belizean</option>
                      <option value="Beninese">Beninese</option>
                      <option value="Bhutanese">Bhutanese</option>
                      <option value="Bolivian">Bolivian</option>
                      <option value="Bosnian">Bosnian</option>
                      <option value="Brazilian">Brazilian</option>
                      <option value="British">British</option>
                      <option value="Bruneian">Bruneian</option>
                      <option value="Bulgarian">Bulgarian</option>
                      <option value="Burkinabe">Burkinabe</option>
                      <option value="Burmese">Burmese</option>
                      <option value="Burundian">Burundian</option>
                      <option value="Cambodian">Cambodian</option>
                      <option value="Cameroonian">Cameroonian</option>
                      <option value="Canadian">Canadian</option>
                      <option value="Cape verdean">Cape Verdean</option>
                      <option value="Central african">Central African</option>
                      <option value="Chadian">Chadian</option>
                      <option value="Chilean">Chilean</option>
                      <option value="Chinese">Chinese</option>
                      <option value="Colombian">Colombian</option>
                      <option value="Comoran">Comoran</option>
                      <option value="Congolese">Congolese</option>
                      <option value="Costa rican">Costa Rican</option>
                      <option value="Croatian">Croatian</option>
                      <option value="Cuban">Cuban</option>
                      <option value="Cypriot">Cypriot</option>
                      <option value="Czech">Czech</option>
                      <option value="Danish">Danish</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominican">Dominican</option>
                      <option value="Dutch">Dutch</option>
                      <option value="East timorese">East Timorese</option>
                      <option value="Ecuadorean">Ecuadorean</option>
                      <option value="Egyptian">Egyptian</option>
                      <option value="Emirian">Emirian</option>
                      <option value="Equatorial guinean">Equatorial Guinean</option>
                      <option value="Eritrean">Eritrean</option>
                      <option value="Estonian">Estonian</option>
                      <option value="Ethiopian">Ethiopian</option>
                      <option value="Fijian">Fijian</option>
                      <option value="Filipino">Filipino</option>
                      <option value="Finnish">Finnish</option>
                      <option value="French">French</option>
                      <option value="Gabonese">Gabonese</option>
                      <option value="Gambian">Gambian</option>
                      <option value="Georgian">Georgian</option>
                      <option value="German">German</option>
                      <option value="Ghanaian">Ghanaian</option>
                      <option value="Greek">Greek</option>
                      <option value="Grenadian">Grenadian</option>
                      <option value="Guatemalan">Guatemalan</option>
                      <option value="Guinea-bissauan">Guinea-Bissauan</option>
                      <option value="Guinean">Guinean</option>
                      <option value="Guyanese">Guyanese</option>
                      <option value="Haitian">Haitian</option>
                      <option value="Herzegovinian">Herzegovinian</option>
                      <option value="Honduran">Honduran</option>
                      <option value="Hungarian">Hungarian</option>
                      <option value="Icelander">Icelander</option>
                      <option value="Indian">Indian</option>
                      <option value="Indonesian">Indonesian</option>
                      <option value="Iranian">Iranian</option>
                      <option value="Iraqi">Iraqi</option>
                      <option value="Irish">Irish</option>
                      <option value="Israeli">Israeli</option>
                      <option value="Italian">Italian</option>
                      <option value="Ivorian">Ivorian</option>
                      <option value="Jamaican">Jamaican</option>
                      <option value="Japanese">Japanese</option>
                      <option value="Jordanian">Jordanian</option>
                      <option value="Kazakhstani">Kazakhstani</option>
                      <option value="Kenyan">Kenyan</option>
                      <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                      <option value="Kuwaiti">Kuwaiti</option>
                      <option value="Kyrgyz">Kyrgyz</option>
                      <option value="Laotian">Laotian</option>
                      <option value="Latvian">Latvian</option>
                      <option value="Lebanese">Lebanese</option>
                      <option value="Liberian">Liberian</option>
                      <option value="Libyan">Libyan</option>
                      <option value="Liechtensteiner">Liechtensteiner</option>
                      <option value="Lithuanian">Lithuanian</option>
                      <option value="Luxembourger">Luxembourger</option>
                      <option value="Macedonian">Macedonian</option>
                      <option value="Malagasy">Malagasy</option>
                      <option value="Malawian">Malawian</option>
                      <option value="Malaysian">Malaysian</option>
                      <option value="Maldivan">Maldivan</option>
                      <option value="Malian">Malian</option>
                      <option value="Maltese">Maltese</option>
                      <option value="Marshallese">Marshallese</option>
                      <option value="Mauritanian">Mauritanian</option>
                      <option value="Mauritian">Mauritian</option>
                      <option value="Mexican">Mexican</option>
                      <option value="Micronesian">Micronesian</option>
                      <option value="Moldovan">Moldovan</option>
                      <option value="Monacan">Monacan</option>
                      <option value="Mongolian">Mongolian</option>
                      <option value="Moroccan">Moroccan</option>
                      <option value="Mosotho">Mosotho</option>
                      <option value="Motswana">Motswana</option>
                      <option value="Mozambican">Mozambican</option>
                      <option value="Namibian">Namibian</option>
                      <option value="Nauruan">Nauruan</option>
                      <option value="Nepalese">Nepalese</option>
                      <option value="New zealander">New Zealander</option>
                      <option value="Ni-vanuatu">Ni-Vanuatu</option>
                      <option value="Nicaraguan">Nicaraguan</option>
                      <option value="Nigerien">Nigerien</option>
                      <option value="North Korean">North Korean</option>
                      <option value="Northern irish">Northern Irish</option>
                      <option value="Norwegian">Norwegian</option>
                      <option value="Omani">Omani</option>
                      <option value="Pakistani">Pakistani</option>
                      <option value="Palauan">Palauan</option>
                      <option value="Panamanian">Panamanian</option>
                      <option value="Papua New Guinean">Papua New Guinean</option>
                      <option value="Paraguayan">Paraguayan</option>
                      <option value="Peruvian">Peruvian</option>
                      <option value="Polish">Polish</option>
                      <option value="Portuguese">Portuguese</option>
                      <option value="Qatari">Qatari</option>
                      <option value="Romanian">Romanian</option>
                      <option value="Russian">Russian</option>
                      <option value="Rwandan">Rwandan</option>
                      <option value="Saint Lucian">Saint Lucian</option>
                      <option value="Salvadoran">Salvadoran</option>
                      <option value="Samoan">Samoan</option>
                      <option value="San Marinese">San Marinese</option>
                      <option value="Sao Tomean">Sao Tomean</option>
                      <option value="Saudi">Saudi</option>
                      <option value="Scottish">Scottish</option>
                      <option value="Senegalese">Senegalese</option>
                      <option value="Serbian">Serbian</option>
                      <option value="Seychellois">Seychellois</option>
                      <option value="Sierra leonean">Sierra Leonean</option>
                      <option value="Singaporean">Singaporean</option>
                      <option value="Slovakian">Slovakian</option>
                      <option value="Slovenian">Slovenian</option>
                      <option value="Solomon Islander">Solomon Islander</option>
                      <option value="Somali">Somali</option>
                      <option value="South African">South African</option>
                      <option value="South Korean">South Korean</option>
                      <option value="Spanish">Spanish</option>
                      <option value="Sri Lankan">Sri Lankan</option>
                      <option value="Sudanese">Sudanese</option>
                      <option value="Surinamer">Surinamer</option>
                      <option value="Swazi">Swazi</option>
                      <option value="Swedish">Swedish</option>
                      <option value="Swiss">Swiss</option>
                      <option value="Syrian">Syrian</option>
                      <option value="Taiwanese">Taiwanese</option>
                      <option value="Tajik">Tajik</option>
                      <option value="Tanzanian">Tanzanian</option>
                      <option value="Thai">Thai</option>
                      <option value="Togolese">Togolese</option>
                      <option value="Tongan">Tongan</option>
                      <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                      <option value="Tunisian">Tunisian</option>
                      <option value="Turkish">Turkish</option>
                      <option value="Tuvaluan">Tuvaluan</option>
                      <option value="Ugandan">Ugandan</option>
                      <option value="Ukrainian">Ukrainian</option>
                      <option value="Uruguayan">Uruguayan</option>
                      <option value="Uzbekistani">Uzbekistani</option>
                      <option value="Venezuelan">Venezuelan</option>
                      <option value="Vietnamese">Vietnamese</option>
                      <option value="Welsh">Welsh</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telp No/Handphone</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="telp_no_handphone" id="telp_no_handphone" class="form-control" value="{{ old('telp_no_handphone') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" onkeyup='saveValue(this);'>
                  </div>
                </div>
                <div class="form-group row mb-4 hide-sign">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Remark*</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="remark" id="remark" class="form-control" value="{{ old('remark') }}" onkeyup='saveValue(this);'>
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
  if (sessionStorage.length != 0) {
    $("#show").text("Update Signature");
    $('#signPreview').attr("src", sessionStorage.signature);
    $('#signPreview').show();
    $("#signature64").val(sessionStorage.signature);
  } else {
    $('#signPreview').hide();
  }

  window.addEventListener("pageshow", function(event) {
    var historyTraversal = event.persisted ||
      (typeof window.performance != "undefined" &&
        window.performance.navigation.type === 2);
    if (historyTraversal) {
      // Handle page restore.
      window.location.reload();
    }
  });

  // document.getElementById("room_no").value = getSavedValue("room_no");

  $('#room_no > option[value="' + getSavedValue("room_no") + '"]').attr('selected', true);
  $('#room_type > option[value="' + getSavedValue("room_type") + '"]').attr('selected', true);
  document.getElementById("arrival").value = getSavedValue("arrival");
  document.getElementById("departure").value = getSavedValue("departure");
  document.getElementById("last_name").value = getSavedValue("last_name");
  document.getElementById("first_name").value = getSavedValue("first_name");
  document.getElementById("room_rate").value = getSavedValue("room_rate");
  document.getElementById("source").value = getSavedValue("source");
  document.getElementById("address").value = getSavedValue("address");
  document.getElementById("place_date_birth").value = getSavedValue("place_date_birth");
  document.getElementById("passport_id_number").value = getSavedValue("passport_id_number");
  $('#nationality > option[value="' + getSavedValue("nationality") + '"]').attr('selected', true);
  document.getElementById("city").value = getSavedValue("city");
  document.getElementById("telp_no_handphone").value = getSavedValue("telp_no_handphone");
  document.getElementById("email").value = getSavedValue("email");
  document.getElementById("remark").value = getSavedValue("remark");
  console.log(getSavedValue("room_type"));

  //Save the value function - save it to localStorage as (ID, VALUE)
  function saveValue(e) {
    var id = e.id; // get the sender's id to save it . 
    var val = e.value; // get the value. 
    localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override . 
  }

  //get the saved value function - return the value of "v" from localStorage. 
  function getSavedValue(v) {
    if (!localStorage.getItem(v)) {
      return ""; // You can change this to your defualt value. 
    }
    return localStorage.getItem(v);
  }
</script>
@endsection