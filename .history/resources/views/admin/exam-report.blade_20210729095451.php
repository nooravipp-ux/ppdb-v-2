@extends('layouts.master')
@section('title', 'PPDB - Report Exam')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading">Report Exam Master List
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Hasil Test
                <div class="btn-actions-pane-right">
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Nama Ujian</th>
                            <th class="text-center">Percentage</th>
                            <th class="text-center">Tanggal Ujian</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reportExam as $re)
                        <tr>
                            <td>{{$re->nama_lengkap}}</td>
                            <td>{{$re->title}}</td>
                            <td class="text-center">{{$re->score}} %</td>
                            <td class="text-center">{{date('d/m/Y', strtotime($re->date))}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection