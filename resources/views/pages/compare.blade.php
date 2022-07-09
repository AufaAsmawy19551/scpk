@extends('layouts.main')
  
@section('pageTitle')
  <div class="container">
    <div class="row row-cols-1">
      <div class="col-3 d-flex align-items-stretch">
        <div class="col card shadow bg-body rounded p-0 border-info">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">Filter</div>
          <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-9 d-flex align-items-stretch">
        <div class="col card shadow bg-body rounded p-0 border-info">
          <div class="card-header text-white fs-5" style="background-color: #0d6efd">Processors</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center" width = "30px"><p class="title">No</p></th>
                  <th class="text-left" width = "200px"><p class="title" style="padding-left: 8px;">Nama</p></th>
                  <th class="text-left"><p class="title">Email</p></th>
                  <th class="text-center" width = "150px"><p class="title">Action</p></th>
                </tr>
              </thead>
            </table>
            <div class="table-full-width table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center py-0" width = "30px"><p></p></th>
                      <th class="text-left py-0" width = "200px"><p style="padding-left: 8px;"></p></th>
                      <th class="text-left py-0"><p></p></th>
                      <th class="text-center py-0" width = "150px"><p></p></th>
                    <tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <p class='text-center'>$no</p>
                    </td>
                    <td>
                      <p style='padding-left: 8px;'>$admin->name</p>
                    </td>
                    <td>
                      <p>$admin->email</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection