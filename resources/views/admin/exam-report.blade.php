@extends('layouts.master')
@section('title', 'PPDB - LAPORAN NILAI')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin-panel/js/datatables/css/dataTables.dataTables.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
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
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                NILAI UJIAN
            </div>
            <br>
            <div class="table-responsive container ">
                <table id="report-ujian" class="align-middle mb-0 table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class=" text-center">Nama Lengkap</th>
                            <th class=" text-center">Jurusan</th>
                            <th class=" text-center">Nama Ujian</th>
                            <th class=" text-center">Nilai Ujian</th>
                            <th class=" text-center">Tanggal Ujian</th>
                            <th class=" text-center">Keterangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($reportExam as $re)
                        <tr>
                            <td class=" text-center">{{$i++}}</td>
                            <td class=" text-center">{{$re->nama_lengkap}}</td>
                            <td class=" text-center">{{$re->pilihan_jurusan}}</td>
                            <td class=" text-center">{{$re->title}}</td>
                            <td class=" text-center">{{$re->score}}</td>
                            <td class=" text-center">{{date('d/m/Y', strtotime($re->date))}}</td>
                            @if($re->status == 1)
                                <td class=" text-center">LULUS</td>
                            @else
                                <td class=" text-center">TIDAK LULUS</td>
                            @endif
                            <td>
                            <button type="button" id="updateReport" data-status='{{$re->status}}' data-id='{{$re->id}}' onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Update Status</button>
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


@section('custom_js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        $('#report-ujian').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text : 'Export Excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: 'Export PDF',
                    exportOptions: {
                        columns: ':visible',
                    }
                },     
                'colvis'
            ]
        });
    });
</script>
@endsection