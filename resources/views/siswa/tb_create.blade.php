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
                  <h4 class="card-title">data siswa</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <form class="forms-sample">
            <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="nisn">nisn</label>
              <input type="number" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="form-group">
                <label for="jeniskelamin">jenis kelamin</label>
                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
              </div>
              <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="nohp">no hp</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
              <div class="form-group">
                <label for="point">point</label>
                <input type="text" class="form-control" id="point" name="point">
              </div>
              <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
        <div class="mb-3">
            <label for="returned" class="form-label">pilih kelas</label>
            <select class="form-select mb-3" name="kelas_id">
              @foreach ($siswa as $item)
                  <option value="{{ $item->kelas->id }}">{{ $item->kelas->nama }}</option>
              @endforeach
            </select>
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
