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
        <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">edit data</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
    <form action="{{route('pelanggaran.update',$pelanggaran->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="jenispelanggaran" class="form-label">jenispelanggaran</label>
            <input type="text" class="form-control"  name="jenispelanggaran" value="{{$pelanggaran->jenispelanggaran}}" id="jenispelanggaran">
        </div>
        <div class="mb-3">
            <label for="tindakan" class="form-label">Tindakan</label>
            <input type="text" class="form-control"  name="tindakan" value="{{$pelanggaran->tindakan}}" id="tindakan">
        </div>
        <div class="mb-3">
            <label for="jmlh_point" class="form-label">jumlah point</label>
            <input type="number" class="form-control"  name="jmlh_point" value="{{$pelanggaran->jmlh_point}}" id="jmlh_point">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
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