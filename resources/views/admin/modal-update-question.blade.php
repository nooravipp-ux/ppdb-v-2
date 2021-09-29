<div class="modal fade" id="modalForAddQuestion{{$eq->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan<br></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="refreshFrm" method="post" action="{{route('update-question')}}"> 
                @csrf
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pertanyaan</label>
                            <input type="hidden" name="id" value="{{$eq->id}}">
                            <input type="hidden" name="exam_id" value="{{$eq->exam_id}}">
                            <input type="text" name="question" value="{{$eq->question}}" id="question" class="form-control" placeholder="Masukkan Pertanyaan" autocomplete="off">
                        </div>

                        <fieldset>
                            <legend>Masukkan Jawaban</legend>
                            <div class="form-group">
                                <label>Jawaban A</label>
                                <input type="" name="opt_1" id="choice_A" value ="{{$eq->opt_1}}" class="form-control" placeholder="Masukkan Jawaban A" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Jawaban B</label>
                                <input type="" name="opt_2" id="choice_B" value ="{{$eq->opt_2}}" class="form-control" placeholder="Masukkan Jawaban B" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Jawaban C</label>
                                <input type="" name="opt_3" id="choice_C" value ="{{$eq->opt_3}}" class="form-control" placeholder="Masukkan Jawaban C" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Jawaban D</label>
                                <input type="" name="opt_4" id="choice_D" value ="{{$eq->opt_4}}" class="form-control" placeholder="Masukkan Jawaban D" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Jawaban Yang Benar</label>
                                <input type="" name="correctAnswer" value ="{{$eq->answer}}" id="correct_answer" class="form-control" placeholder="Masukkan Jawaban Yang Benar" autocomplete="off">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>

    </div>
</div>