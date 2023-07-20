@extends('layout.db')

@section('content')
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="mb-2 page-title">Data table</h2>
            <p class="card-text">create+ </p>
            <div class="row my-4">
              <!-- Small table -->
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                      <div class="col-sm-12 col-md-6">
                        <div id="dataTable-1_filter" class="dataTables_filter">
                          <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable-1"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table class="table datatables dataTable no-footer" id="dataTable-1" role="grid" aria-describedby="dataTable-1_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 58.8438px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 58.8438px;">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 42.375px;">Phone</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 77.3125px;">Department</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 60.7083px;">Company</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 75.0312px;">Address</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 78.4688px;">City</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 31.4583px;">Date</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 38.9479px;">Action</th></tr>
                      </thead>
                      <tbody>   
                          <td>1</td>
                          <td>Imani Lara</td>
                          <td>(478) 446-9234</td>
                          <td>Asset Management</td>
                          <td>Borland</td>
                          <td>9022 Suspendisse Rd.</td>
                          <td>High Wycombe</td>
                          <td>Jun 8, 2019</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item mdi mdi-pencil" href="#">edit</a>
                              <a class="dropdown-item mdi mdi-delete" href="#">hapus</a>
                              <a class="dropdown-item mdi mdi mdi-clipboard-text" href="#">detail</a>
                            </div>
                          </td>
                        </tr>
                          <td>2</td>
                          <td>Walter Sawyer</td>
                          <td>(671) 969-1704</td>
                          <td>Tech Support</td>
                          <td>Macromedia</td>
                          <td>Ap #708-5152 Cursus. Ave</td>
                          <td>Bath</td>
                          <td>May 8, 2020</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item mdi mdi-pencil" href="#">edit</a>
                              <a class="dropdown-item mdi mdi-delete" href="#">hapus</a>
                              <a class="dropdown-item mdi mdi mdi-clipboard-text" href="#">detail</a>
                            </div>
                            </div>
                          </td>
@endsection