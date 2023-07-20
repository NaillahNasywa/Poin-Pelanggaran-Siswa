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
    <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">name</label>
            <input type="text" class="form-control"  name="nama" value="{{$siswa->nama}}" id="nama">
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="number" class="form-control"  name="nisn" value="{{$siswa->nisn}}" id="nisn">
        </div>
        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">jenis kelamin</label>
            <input type="text" class="form-control"  name="jeniskelamin" value="{{$siswa->jeniskelamin}}" id="jeniskelamin">
        </div>
          <div class="mb-3">
            <label for="nama" class="form-label">kelas</label>
            <select class="custom-select form-control input-custom" id="nama" name="kelas_id">
                @foreach ($kelas as $data)
                    <option value="{{ $data->id }}"
                        @if ($siswa->siswa_id == $data->id)
                            selected
                        @endif
                    >{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="point" class="form-label">point</label>
            <input type="text" class="form-control"  name="point" value="{{$siswa->point}}" id="point">
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