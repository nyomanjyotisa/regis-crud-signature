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
      <h1>@yield('title')</h1>
    </div>

    @include('alert')

    <div class="section-body">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Registration Data List</h4>
              <div class="card-header-action">
                <a href="/new" class="btn btn-primary">New Registration</a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th>Room No</th>
                      <th>Name</th>
                      <th>Arrival</th>
                      <th>Departure</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($datas as $data)
                    <tr>
                      <td>
                        {{$data->room_no}}
                      </td>
                      <td>
                        {{$data->last_name}}
                      </td>
                      <td>
                        {{date("F jS, Y", strtotime($data->arrival))}}
                      </td>
                      <td>
                        {{date("F jS, Y", strtotime($data->departure))}}
                      </td>
                      <td>
                        <a href="/{{$data->id}}/show" class="btn btn-info btn-action">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="/{{$data->id}}/edit" class="btn btn-warning btn-action">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="/{{$data->id}}/delete" class="btn btn-danger btn-action" onclick="return confirm ('Delete Registration Data?')">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" style="text-align:center">No Data</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
<script>
  localStorage.clear();
  sessionStorage.clear();
</script>
@endsection