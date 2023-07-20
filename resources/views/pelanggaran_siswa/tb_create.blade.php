@extends('layout.db')
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
            </div>
            {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
        </div> --}}
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Forms with icon</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form class="form-valide-with-icon" action="{{ route('pelanggaran_siswa.store') }}" method="POST">
                        @csrf                     
                       <div class="mb-3">
                        <label for="disabledSelect" class="form-label">siswa</label>
                        <select id="disabledSelect" class="form-select" name="siswa_id">
                          @foreach ($siswa as $item)
                          <option value="{{$item->id}}">{{$item->nama}}</option> 
                          @endforeach
                        </select>
                      </div>

                       <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Pelanggaran</label>
                        <select id="disabledSelect" class="form-select" name="pelanggaran_id">
                          @foreach ($pelanggaran as $item)
                          <option value="{{$item->id}}">{{$item->jenispelanggaran}}</option> 
                          @endforeach
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection