@extends('layouts.master')
@section('title', 'PPDB - Nilai')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        {{$exam->title}}
                        <div class="page-title-subheading">
                            {{$exam->description}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row col-md-12">
            <h1 class="text-primary">RESULT'S</h1>
        </div> --}}

        <div class="row col-md-6 float-left">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Jawaban Kamu</h5>
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">

                        <?php $i = 1; ?>
                        @foreach($result as $question_answer)
                        <tr>
                            <td>
                                <b>
                                    <p><?php echo $i++; ?>. {{$question_answer->question}}</p>
                                </b>
                                <label class="pl-4 text-success">
                                    Jawab :
                                    @if($question_answer->answer != $question_answer->exam_answer)
                                    <span style="color:red">{{$question_answer->exam_answer}}</span>
                                    @else
                                    <span class="text-success">{{$question_answer->exam_answer}}</span>
                                    @endif
                                </label>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 float-left">
            <div class="col-md-6 float-left">
                <div class="card mb-3 widget-content bg-night-fade">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">
                                <h5>Jawaban Benar</h5>
                            </div>
                            <div class="widget-subheading" style="color: transparent;">/</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">
                                <span>{{$score}} / {{$over}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 float-left">
                <div class="card mb-3 widget-content bg-happy-green">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">
                                <h5>Persentase</h5>
                            </div>
                            <div class="widget-subheading" style="color: transparent;">/</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">
                                <span>
                                <?php 
                                    $ans = $score / $over * 100;
                                    echo number_format($ans,2);
                                    echo "%"; 
                                 ?>
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection