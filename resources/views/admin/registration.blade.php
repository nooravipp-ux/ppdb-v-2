@extends('layouts.master')
@section('title', 'PPDB - Data Pendaftar')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin-panel/js/datatables/css/dataTables.dataTables.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
@endsection

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
                        KELOLA DATA PENDAFTAR
                    </h4>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="">Daftar Peserta Didik</h5>
                <div class="btn-actions-pane-right">
                </div>
            </div> <br>
            <div class="container">
                <div class="table">
                    <table id="pendaftaran" class="align-middle mb-0 table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="">No </th>
                                <th class="">No Pendaftaran</th>
                                <th class="">Nama Lengkap</th>
                                <th class="">Jurusan</th>
                                <th class="">Alamat</th>
                                <th class="">Asal Sekolah</th>
                                <th class="">Status</th>
                                <th class="">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>

                            @foreach($register as $r)
                            <tr>
                                <td class=""><?php echo $i++; ?></td>
                                <td class="">{{$r->no_pendaftaran}}</td>
                                <td class="">{{$r->nama_lengkap}}</td>
                                <td class="">{{$r->pilihan_jurusan}}</td>
                                <td>{{$r->alamat}}</td>
                                <td class="">{{$r->nama_sekolah_asal}}</td>
                                @if($r->status == 0)
                                <td class="text-center bg-primary" >Applying</td>
                                @elseif($r->status == 1)
                                <td class="text-center bg-warning" >Terkonfirmasi</td>
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
        $('#pendaftaran').DataTable({
            dom: 'Bfrtip',
            buttons: [
                // {
                //     extend: 'print',
                //     // autoPrint: false,
                //     exportOptions: {
                //         columns: ':visible'
                //     }
                // },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],
        });
    });
</script>
@endsection