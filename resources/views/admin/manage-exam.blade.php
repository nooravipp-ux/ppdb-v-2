@extends('layouts.master')
@section('title', 'PPDB - Data Ujian')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin-panel/js/datatables/css/dataTables.dataTables.css')}}">
<style>
    #tabel-ujian {
        font-size: 12px;
    }

    .modal-backdrop {
        z-index: -99999;
    }
</style>
@endsection
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-config icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div class="container">
                <div class="page-title-subheading">
                    <h4>
                        KELOLA DATA UJIAN
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"><a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modalForExam">
                    <i class="metismenu-icon"></i>
                    Tambah Ujian
                </a>
            </div>
            <div class="table-responsive">
                <table id="tabel-ujian" class="align-middle mb-0 table  table-borderless table-striped table-hover">
                    <thead>

                        <tr>
                            <th class="">Nama Ujian</th>
                            <th class="text-left ">Deskripsi</th>
                            <th class="text-left ">Waktu Ujian</th>
                            <th class="text-left ">Tanggal Ujian</th>
                            <th class="text-left ">Jam Mulai</th>
                            <th class="text-left ">Jam Selesai</th>
                            {{-- <th class="text-left ">Jam Berakhir</th>     --}}
                            <th class="text-center" width="20%">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($exam as $exm)
                        <tr>
                            <td class="pl-4">{{$exm->title}}</td>
                            <td>{{$exm->description}}</td>
                            <td>{{$exm->time_limit}} Menit</td>
                            <td>{{date('d-M-Y', strtotime($exm->date))}}</td>
                            <td>{{$exm->start_time}}</td>
                            <td>{{$exm->end_time}}</td>
                            {{-- <td>{{$exm->end_time}}</td> --}}
                            <td class="text-center">
                                <a href="{{route('manage-exam-question.id', ['id' => $exm->id])}}" type="button" class="btn btn-warning btn-sm">Edit Soal</a>
                                <a href="{{route('manage-exam-question.id', ['id' => $exm->id])}}" type="button" class="btn btn-danger btn-sm">Hapus Ujian</a>
                                <a href="#" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUpdateForExam{{$exm->id}}">Edit Ujian</a>

                            </td>
                        </tr>
                        @include('admin.modal-update-ujian')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
    $(document).ready(function() {
        $('#tabel-ujian').DataTable();
        $(document).off('focusin.modal');
    });
</script>
@endsection