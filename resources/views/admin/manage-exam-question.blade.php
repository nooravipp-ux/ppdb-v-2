@extends('layouts.master')
@section('title', 'PPDB - Manage Exam - Question')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-notebook icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading">
                    <h4>
                        Kelola Soal Ujian
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="refreshData">
            <div class="row">
                <div class="col-md-8">

                    <div class="main-card mb-3 card">
                        <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Pertanyaan Ujian
                            <span class="badge badge-pill badge-primary ml-2">
                                {{$examQuestionsCount}}
                            </span>
                            <div class="btn-actions-pane-right">
                                <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modalForAddQuestion">Tambah Ujian</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="scroll-area-sm" style="min-height: 400px;">
                                <div class="scrollbar-container">

                                    @if($examQuestionsCount > 0)
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                            <thead>
                                                <tr>
                                                    <th class="text-left pl-1">Pertanyaan :</th>
                                                    <th class="text-center" width="20%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if($examQuestionsCount > 0)
                                                <?php $i = 1; ?>
                                                @foreach($examQuestions as $eq)
                                                <tr>
                                                    <td>
                                                        <b><?php echo $i++; ?> ) {{$eq['question']}}</b><br>

                                                        <!-- // Choice A -->
                                                        @if ($eq->opt_1 == $eq->answer)
                                                        <span class="pl-4 text-success">A - {{$eq->opt_1}}</span><br>
                                                        @else
                                                        <span class="pl-4">A - {{$eq->opt_1}}</span><br>
                                                        @endif

                                                        <!-- // Choice B -->
                                                        @if ($eq->opt_2 == $eq->answer)
                                                        <span class="pl-4 text-success">B - {{$eq->opt_2}}</span><br>
                                                        @else
                                                        <span class="pl-4">B - {{$eq->opt_2}}</span><br>
                                                        @endif

                                                        <!-- // Choice C -->
                                                        @if ($eq->opt_3 == $eq->answer)
                                                        <span class="pl-4 text-success">C - {{$eq->opt_3}}</span><br>
                                                        @else
                                                        <span class="pl-4">C - {{$eq->opt_3}}</span><br>
                                                        @endif

                                                        <!-- // Choice D -->
                                                        @if ($eq->opt_4 == $eq->answer)
                                                        <span class="pl-4 text-success">D - {{$eq->opt_4}}</span><br>
                                                        @else
                                                        <span class="pl-4">D - {{$eq->opt_4}}</span><br>
                                                        @endif

                                                    </td>
                                                    <td class="text-center">
                                                        <a rel="facebox" href="facebox_modal/updateQuestion.php?id=" class="btn btn-sm btn-warning">Edit</a>
                                                        <button type="button" id="deleteQuestion" data-id='{{$eq->id}}' onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Hapus</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="2">
                                                        <h3 class="p-3">No Course Found</h3>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    @else
                                    <h4 class="text-primary">No question found...</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection