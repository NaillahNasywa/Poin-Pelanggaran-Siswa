@extends('layout.db')

@section('content')
<div class="content-wrapper">
    {{-- <main role="main" class="main-content"> --}}
        {{-- <div class="container-fluid"> --}}
                    <h4 class="card-title">DETAIL DATA :</h4>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    {{-- <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="col-sm-12 col-md-6">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row"> --}}
                                        <div class="col-sm-10">
                                            {{-- <table class="table datatables dataTable" id="dataTable-1"
                                                role="grid" aria-describedby="dataTable-1_info"> --}}
                                                <h4>Nama : {{ $siswa->nama }}<h4>
                                                        <hr>
                                                        <h4>Nisn: {{ $siswa->nisn }}<h4>
                                                                <hr>
                                                                <h4>Jenis kelamin : {{ $siswa->jeniskelamin }}<h4>
                                                                        <hr>
                                                                        <h4>Alamat : {{ $siswa->alamat }}<h4>
                                                                                <hr>
                                                                                <h4>No.HP : {{ $siswa->nohp }}<h4>
                                                                                        <hr>
                                                                                        <h4>Point :
                                                                                            {{ $siswa->point }}<h4>
                                                                                                <hr>
                                                                                                <h4>Email :
                                                                                                    {{ $siswa->email }}
                                                                                                    <h4>
                                                                                                        </tbody>
                   
                                    </table>
                                </div>
                    @endsection
