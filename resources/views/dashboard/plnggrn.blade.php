@extends('layout.db')

@section('content')
<div class="content-wrapper">
  <div class="row">   
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="mb-2 page-title">Data table</h2>
            <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p>
            <div class="row my-4">
              <!-- Small table -->
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable-1_length"><label>Show <select name="dataTable-1_length" aria-controls="dataTable-1" class="custom-select custom-select-sm form-control form-control-sm"><option value="16">16</option><option value="32">32</option><option value="64">64</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable-1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table datatables dataTable no-footer" id="dataTable-1" role="grid" aria-describedby="dataTable-1_info">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 6px;"></th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 7.79167px;">#</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 58.8438px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 42.375px;">Phone</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 77.3125px;">Department</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 60.7083px;">Company</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 75.0312px;">Address</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 78.4688px;">City</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 31.4583px;">Date</th><th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 38.9479px;">Action</th></tr>
                      </thead>
                      <tbody>   
                      <tr role="row" class="odd">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>368</td>
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
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>323</td>
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
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>371</td>
                          <td>Noelle Ray</td>
                          <td>(803) 792-2559</td>
                          <td>Human Resources</td>
                          <td>Sibelius</td>
                          <td>Ap #992-8933 Sagittis Street</td>
                          <td>Ivanteyevka</td>
                          <td>Apr 2, 2021</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>302</td>
                          <td>Portia Nolan</td>
                          <td>(216) 946-1119</td>
                          <td>Payroll</td>
                          <td>Microsoft</td>
                          <td>Ap #461-4415 Enim Rd.</td>
                          <td>Kanpur Cantonment</td>
                          <td>Dec 4, 2019</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>443</td>
                          <td>Scarlett Anderson</td>
                          <td>(486) 309-3564</td>
                          <td>Tech Support</td>
                          <td>Yahoo</td>
                          <td>P.O. Box 988, 7282 Lobortis Avenue</td>
                          <td>Lot</td>
                          <td>Dec 27, 2019</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>345</td>
                          <td>Kevyn Mills</td>
                          <td>(976) 873-4833</td>
                          <td>Tech Support</td>
                          <td>Sibelius</td>
                          <td>P.O. Box 666, 9803 Sed Avenue</td>
                          <td>Fino Mornasco</td>
                          <td>Dec 24, 2020</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>356</td>
                          <td>Sharon Buckley</td>
                          <td>(429) 517-6784</td>
                          <td>Tech Support</td>
                          <td>Sibelius</td>
                          <td>Ap #372-3407 Sed St.</td>
                          <td>Lompret</td>
                          <td>Mar 3, 2021</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>263</td>
                          <td>Fletcher Everett</td>
                          <td>(735) 632-1255</td>
                          <td>Customer Service</td>
                          <td>Borland</td>
                          <td>Ap #688-5120 Egestas Avenue</td>
                          <td>Beerzel</td>
                          <td>Mar 27, 2020</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                              <a class="dropdown-item" href="#">Assign</a>
                            </div>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <label class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>281</td>
                          <td>Kevyn Snyder</td>
                          <td>(659) 649-4750</td>
                          <td>Customer Relations</td>
                          <td>Macromedia</td>
                          <td>P.O. Box 731, 7143 Sem Rd.</td>
                          <td>Taber</td>
                          <td>Mar 1, 2021</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item mdi mdi-pencil" href="#">edit</a>
                          <a class="dropdown-item mdi mdi-delete" href="#">hapus</a>
                          <a class="dropdown-item mdi mdi mdi-clipboard-text" href="#">detail</a>
                            </div>
                          </td>
                        </tr></tbody>
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable-1_info" role="status" aria-live="polite">Showing 1 to 16 of 63 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable-1_previous"><a href="#" aria-controls="dataTable-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable-1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable-1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable-1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="dataTable-1_next"><a href="#" aria-controls="dataTable-1" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                  </div>
                </div>
              </div> <!-- simple table -->
            </div> <!-- end section -->
          </div> <!-- .col-12 -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body px-5">
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-success justify-content-center">
                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Control area</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Activity</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Droplet</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Upload</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Users</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>                   
@endsection  
<script src="{{ asset('bosstrap table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bosstrap table/dataTables.bootstrap4.min.js') }}"></script>
<script>
  $('#dataTable-1').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [16, 32, 64, -1],
      [16, 32, 64, "All"]
    ]
  });
</script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag()
  {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-56159088-1');
</script>