@extends('layouts.master')
@section('title', 'PPDB - Examination')
@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    body {
        background-color: #eee;
        font-family: 'Roboto', sans-serif
    }

    .card {
        background-color: #B9F6CA;
        width: 350px;
        border-radius: 20px
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
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading">List of Examination
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
    @foreach($listExam as $list)
    <div class="col-md-4">
        <div class="container mt-5 d-flex">
            <div class="card p-4 mt-3">
                <div class="first">
                    <h6 class="heading">{{$list->title}}</h6>
                    <hr class="line-color">
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">Date : {{$list->date}}</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">Start Time : {{$list->start_time}} - {{$list->end_time}}</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">Time Limit : {{$list->time_limit}} Minute</span> </div>
                    </div>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                        <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">Description: {{$list->description}} </span> </div>
                    </div>
                </div>
                <hr class="line-color">
                <div class="third mt-4"> <a href="{{route('exam.id', ['id' => $list->id])}}" class="btn btn-success btn-block"><i class="fa fa-clock-o"></i> Start Exam</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection