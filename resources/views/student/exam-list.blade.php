@extends('layouts.master')
@section('title', 'PPDB - Ujian')
@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    body {
        background-color: #eee;
        font-family: 'Roboto', sans-serif
    }

    .card {
        background-color;
        width: 350px;
        border-radius: 10px
    }

    .heading {
        font-weight: 700
    }

    .hour {
        margin-top: 1px;
        color: green;
        font-size: 12px
    }

    .ratings i {
        color: #388E3C
    }

    .btn {
        border-radius: 15px !important
    }

    .line-color {
        color: green;
        height: 3px
    }
</style>
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
                <div class="page-title">
                    <h4>
                        Daftar Ujian/Tes Potensi Akademik
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach($listExam as $list)
    <div class="col-md-4">
        <div class="container mt-3 mb-5 d-flex">
            <div class="card shadow p-4 mt-3">
                <div class="first">
                    <h6 class="heading">{{$list->title}}</h6>
                    <hr class="line-color">
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <span class="hour ml-1">Tanggal : {{date('d/m /Y',strtotime($list->start_time))}}</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <span class="hour ml-1">Waktu Mulai : Pukul {{date('H:i', strtotime($list->start_time))}}</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <span class="hour ml-1">Waktu Selesai : Pukul {{date('H:i', strtotime($list->end_time))}}</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <span class="hour ml-1">Deskripsi : {{$list->description}} </span> </div>
                    </div>
                </div>
                <hr class="line-color">
                @if($list->start_time <= now() && $list->end_time >= now())
                <div class="third mt-4"> <a href="{{route('exam.id', ['id' => $list->id])}}" class="btn btn-success btn-block"><i class="fa fa-clock-o"></i>Mulai Ujian</a></div>
                @endif

                @if($list->start_time < now() && $list->end_time < now())
                <div class="third mt-4"> <a href="#" class="btn btn-danger btn-block"><i class="fa fa-clock-o"></i>Ujian Sudah di Tutup</a></div>
                @endif

                @if($list->start_time > now() && $list->end_time > now())
                <div class="third mt-4"> <a href="#" class="btn btn-secondary btn-block"><i class="fa fa-clock-o"></i>Ujian Belum Di buka</a></div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection
