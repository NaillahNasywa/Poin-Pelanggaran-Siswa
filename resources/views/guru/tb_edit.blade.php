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
    <form action="{{route('guru.update',$guru->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control"  name="nama" value="{{$guru->nama}}" id="nama">
        </div>
        <div class="mb-3">
            <label for="nipd" class="form-label">nipd</label>
            <input type="number" class="form-control"  name="nipd" value="{{$guru->nipd}}" id="nipd">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control"  name="alamat" value="{{$guru->alamat}}" id="alamat">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">nohp</label>
            <input type="number" class="form-control"  name="nohp" value="{{$guru->nohp}}" id="nohp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control"  name="email" value="{{$guru->email}}" id="email">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">kelas</label>
            <select class="custom-select form-control input-custom" id="nama" name="kelas_id">
                @foreach ($kelas as $data)
                    <option value="{{ $data->id }}"
                        @if ($guru->guru_id == $data->id)
                            selected
                        @endif
                    >{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
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