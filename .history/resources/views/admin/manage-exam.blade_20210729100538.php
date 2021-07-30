@extends('layouts.master')
@section('title', 'PPDB - Manage Exam')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div class="container">Kelola Tes/Ujian 
                <div class="page-title-subheading">Manage exam for PPDB
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
                    Add Exam
                </a>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <thead>

                        <tr>
                            <th class="text-left pl-4">Exam Title</th>
                            <th class="text-left ">Course</th>
                            <th class="text-left ">Description</th>
                            <th class="text-left ">Time limit</th>
                            <th class="text-left ">Display limit</th>
                            <th class="text-center" width="20%">Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($exam as $exm)
                        <tr>
                            <td class="pl-4">{{$exm->title}}</td>
                            <td>{{$exm->course_id}}</td>
                            <td>{{$exm->description}}</td>
                            <td>{{$exm->time_limit}}</td>
                            <td>{{$exm->question_limit_display}}</td>
                            <td class="text-center">
                                <a href="{{route('manage-exam-question.id', ['id' => $exm->id])}}" type="button" class="btn btn-primary btn-sm">Manage Questions</a>
                                <button type="button" id="deleteExam" data-id='<?php echo $exm->title; ?>' class="btn btn-danger btn-sm">Delete</button>
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