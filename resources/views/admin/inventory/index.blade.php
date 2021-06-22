@extends('admin.master')
@section('title')
Inventory
@endsection

@section('body')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inventory</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active" aria-current="page">Inventory</li>
            </ol>
          </div>
           <div class="row">
            <div class="col-lg-12 mb-2">
              <div class="col-lg-2 offset-lg-10 justify-content-lg-center">
              <a href="{{ route('inventory.create') }}" class="btn btn-success btn-sm">Add Cow</a>
              </div>
           </div>
           </div>
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Inventory</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Color</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>Brown</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary">Detail</a>
                          <a href="#" class="btn btn-info btn-sm">
                           Edit
                          </a>
                          <a href="#" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Black</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <a href="#" class="btn btn-info btn-sm">
                           Edit
                          </a>
                          <a href="#" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>White</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <a href="#" class="btn btn-info btn-sm">
                           Edit
                          </a>
                          <a href="#" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Gray</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <a href="#" class="btn btn-info btn-sm">
                           Edit
                          </a>
                          <a href="#" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Deep Brown</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <a href="#" class="btn btn-info btn-sm">
                           Edit
                          </a>
                          <a href="#" class="btn btn-danger btn-sm">
                           <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->

        </div>
@endsection