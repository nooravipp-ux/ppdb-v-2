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
                <div class="page-title-subheading">Data Pendaftar
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="input-group">
                <div class="form-outline">
                  <input id="search-focus" type="search" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
            </div>
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
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Jurusan</th>
                            <th>Alamat</th>
                            <th class="text-center">Asal Sekolah</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($register as $r)
                        <tr>
                            <td class="text-center">{{$r->nama_lengkap}}</td>
                            <td class="text-center">{{$r->nama_lengkap}}</td>
                            <td>{{$r->alamat}}</td>
                            <td class="text-center">{{$r->nama_sekolah_asal}}</td>
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