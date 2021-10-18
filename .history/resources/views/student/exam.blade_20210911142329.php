@extends('layouts.master')
@section('title', 'PPDB - Start Exam')
@section('content')
<script type="text/javascript">
    function preventBack() {
        window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
</script>
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
                <div class="page-title-actions mr-5" style="font-size: 20px;">
                    <form name="cd">
                        <input type="hidden" name="" id="timeExamLimit" value="{{$exam->time_limit}}">
                        <label>Remaining Time : </label>
                        <input style="border:none;background-color: transparent;color:blue;font-size: 25px;" name="disp" type="text" class="clock" id="txt" value="00:00" size="5" readonly="true" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 p-0 mb-4">
        <form method="post" id="submitAnswerFrm">
            <input type="hidden" name="exam_id" id="exam_id" value="{{$exam->id}}">
            <input type="hidden" name="examAction" id="examAction">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                @if($examQuestionsCount > 0)
                <?php $i = 1; ?>
                @foreach($examQuestions as $question)

                <tr>
                    <td>
                        <p><b><?php echo $i++; ?>.  {{$question->question}}</b></p>
                        <div class="col-md-4 float-left">
                            <div class="form-group pl-4 ">
                                <input name="answer[{{$question->id}}][correct]" value="{{$question->opt_1}}" class="form-check-input" type="radio" value="" id="invalidCheck" required>

                                <label class="form-check-label" for="invalidCheck">
                                    {{$question->opt_1}}
                                </label>
                            </div>

                            <div class="form-group pl-4">
                                <input name="answer[{{$question->id}}][correct]" value="{{$question->opt_2}}" class="form-check-input" type="radio" value="" id="invalidCheck" required>

                                <label class="form-check-label" for="invalidCheck">
                                    {{$question->opt_2}}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8 float-left">
                            <div class="form-group pl-4">
                                <input name="answer[{{$question->id}}][correct]" value="{{$question->opt_3}}" class="form-check-input" type="radio" value="" id="invalidCheck" required>

                                <label class="form-check-label" for="invalidCheck">
                                    {{$question->opt_3}}
                                </label>
                            </div>

                            <div class="form-group pl-4">
                                <input name="answer[{{$question->id}}][correct]" value="{{$question->opt_4}}" class="form-check-input" type="radio" value="" id="invalidCheck" required>

                                <label class="form-check-label" for="invalidCheck">
                                    {{$question->opt_4}}
                                </label>
                            </div>
                        </div>


                    </td>
                </tr>


                @endforeach
                <tr>
                    <td style="padding: 20px;">
                        <input name="submit" type="submit" value="Submit" class="btn btn-success " id="submitAnswerFrmBtn">
                        <button type="button" class="btn btn-warning" id="resetExamFrm">Reset</button>
                    </td>
                </tr>

                @else
                <b>No question at this moment</b>
                @endif
            </table>

        </form>
    </div>
</div>
@endsection