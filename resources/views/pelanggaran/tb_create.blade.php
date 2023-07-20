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
                  <h4 class="card-title">data pelanggaran</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
    <form action="{{ route('pelanggaran.store') }}" method="POST">
        @csrf
            <div class="form-group">
              <label for="jenispelanggaran">jenispelanggaran</label>
              <input type="text" class="form-control" name="jenispelanggaran" id="jenispelanggaran">
            </div>
            <div class="form-group">
              <label for="tindakan">tindakan</label>
              <input type="text" class="form-control"  name="tindakan" id="tindakan">
            </div>
            <div class="form-group">
                <label for="jmlh_poin">jumlah poin</label>
                <input type="number" class="form-control" name="jmlh_point" id="jmlh_poin">
              </div>
        <button type="submit" class="btn btn-primary">save</button>
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