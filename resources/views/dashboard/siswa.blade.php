@extends('layout.db')

@section('content')
<div class="content-wrapper">
    <div class="row">       
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">student</h4>
            <a href="{{ route('student.create') }}" class="card-description">
                Add <code>+</code>
              </a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Nis
                    </th>
                    <th>
                      jenis kelamin
                    </th>
                    <th>
                       class
                    </th>
                    <th>
                       Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($student as $item)
                  <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->nisn }}
                    </td>
                    <td>
                        {{ $item->jeniskelamin }}
                    </td>
                    <td>
                        {{$item->Product->name}} 
                    </td>
                        <a href="{{ route('peminjaman.edit',[$item->id]) }}"
                            class="badge badge-warning">edit</a>
                          {{-- <a href="/product/destroy/{{$item->id}}" class="btn btn-info">hapus</a> --}}
      
                        <form action="{{ route('peminjaman.destroy',$item->id) }}" method="POST"
                            onsubmit="return confirm('apakah anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge badge-warning">Delete</button>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection