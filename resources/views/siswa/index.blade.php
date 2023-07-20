@extends('layout.db')

@section('content')
<div class="content-wrapper">  
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <h4 class="card-title">student</h4>
            <a href="{{ route('siswa.create') }}" class="card-description">
                Add <code>+</code>
              </a>
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
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 58.8438px;">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 42.375px;">nisn</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 77.3125px;">jeniskelamin</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 60.7083px;">class</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 60.7083px;">point</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 60.7083px;">action</th>
                  </thead>
                <tbody>
                @foreach ($siswa as $item)
                <tr>
                  {{-- <td>
                      {{ $item->id }}
                  </td> --}}
                  <td>
                      {{ $item->nama }}
                  </td>
                  <td>
                      {{ $item->nisn }}
                  </td>
                  <td>
                      {{ $item->jeniskelamin }}
                  </td>
                  <td>
                     {{$item->kelas->nama}}
                  </td>
                  <td>
                    {{$item->point}}
                 </td>
                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item mdi mdi mdi-clipboard-text" href="{{ route ('siswa.show',$item->id) }}">detail</a>
                    <a class="dropdown-item mdi mdi-pencil" href="{{ route ('siswa.edit',$item->id) }}">edit</a>
                    {{-- <a class="dropdown-item mdi mdi-delete" href="#">hapus</a> --}}
                    <form action="{{ route('siswa.destroy',$item->id) }}" method="POST"
                      onsubmit="return confirm('apakah anda yakin?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="dropdown-item mdi mdi-delete">Delete</button>
                    </div>
                  </form>
                  </button>
                  </td>
                     @endforeach
                    </tbody>
                </table> 
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css')}}"/>
<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>