@extends('layout.layout')

@section('title', 'Admin Data')

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
                  <h4>Admin Data List</h4>
                  <div class="card-header-action">
                    <a href="/admin/create" class="btn btn-primary">New Admin</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($datas as $data)
                        <tr>
                          <td>
                            {{$data->name}}
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                          <td>
                            <a href="/admin/{{$data->id}}/edit" class="btn btn-warning btn-action">
                                    <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="/admin/{{$data->id}}/delete" class="btn btn-danger btn-action" onclick="return confirm ('Delete Admin Data?')">
                                    <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="3" style="text-align:center">No Data</td>
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
@endsection
