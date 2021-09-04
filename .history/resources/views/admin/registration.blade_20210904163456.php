@extends('layouts.master')
@section('title', 'PPDB - Master List Register')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-note2 icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading">
                    <h4>
                        Data Pendaftar
                    </h4>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Cari Data Pendaftar" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </form>
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button> --}}

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Daftar Peserta DidiK
                <div class="btn-actions-pane-right">
                </div>
            </div>
            <div class=" container">
                <table class="align-middle mb-0 table table-responsive table-borderedless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="">No</th>
                            <th class="">Nama Lengkap</th>
                            <th class="">Jurusan</th>
                            <th>Alamat</th>
                            <th class="">Asal Sekolah</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($register as $r)
                        <tr>
                            <td class="">1</td>
                            <td class="">{{$r->nama_lengkap}}</td>
                            <td class="">{{$r->pilihan_jurusan}}</td>
                            <td>{{$r->alamat}}</td>
                            <td class="">{{$r->nama_sekolah_asal}}</td>
                            @if($r->status == 0)
                            <td class="text-center bg-primary">Applying</td>
                            @elseif($r->status == 1)
                            <td class="text-center bg-warning">Terkonfirmasi</td>
                            @else
                            <td class="text-center bg-success">Terdaftar</td>
                            @endif
                            <td class="text-center">
                                <a href="{{route('detail.id', ['id' => $r->id])}}" class="btn btn-info btn-sm">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection