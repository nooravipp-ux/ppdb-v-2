@extends('layouts.master')
@section('title', 'PPDB - Nilai Akhir')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin-panel/js/datatables/css/dataTables.dataTables.css')}}">
@endsection
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-news-paper icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading"> 
                    <h4>
                        LAPORAN HASIL UJIAN
                    </h4>
                </div>
            </div>
        </div>
        {{-- <div class="page-title-actions">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
              </form>
        </div> --}}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                NILAI UJIAN
                <div class=" pr-3 btn-actions-pane-right">
                    <a href="" class=" btn btn-info">Cetak Hasil Ujian</a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-ujian" class="align-middle mb-0 table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Ujian</th>
                            <th class="text-center">Nilai Ujian</th>
                            <th class="text-center">Tanggal Ujian</th>
                            {{-- <th class="text-center">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($reportExam as $re)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$re->nama_lengkap}}</td>
                            <td>{{$re->title}}</td>
                            <td class="text-center">{{$re->score}}</td>
                            <td class="text-center">{{date('d/m/Y', strtotime($re->date))}}</td>
                            {{-- <td></td> --}}
                        </tr>
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
        $('#report-ujian').DataTable();
    });
</script>
@endsection