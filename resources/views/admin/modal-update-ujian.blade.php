<div class="modal fade" id="modalUpdateForExam{{$exm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="refreshFrm" id="addExamFrm{{$exm->id}}" method="post" action="{{route('update-exam')}}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Ujian/Test</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pilih Mata Pelajaran</label>
                            <select class="form-control" name="course_id">
                                <option value="{{$exm->course_code}}" selected>{{$exm->course_code}} - {{$exm->course_name}}</option>
                                @if(isset($course))
                                @foreach($course as $c)
                                <option value="{{$c->id}}">{{$c->course_code}} - {{$c->course_name}}</option>
                                @endforeach
                                @else
                                <option value="0">- Tidak ada Ujian - </option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Waktu Ujian</label>
                            <select class="form-control" name="timeLimit" required="">
                                <option value="{{$exm->time_limit}}">{{$exm->time_limit}} Menit</option>
                                <option value="45">45 Menit</option>
                                <option value="60">60 Menit</option>
                                <option value="90">90 Menit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Ujian</label>
                            <input type="hidden" name="id" value="{{$exm->id}}" >
                            <input type="date" class="form-control" name="date" required="" value="{{$exm->date}}">
                        </div>
                        <div class="form-group">
                            <label>Jam Mulai</label>
                            <input type="text" class="form-control" name="startTime" required="" value="{{$exm->start_time}}">
                        </div>
                        <div class="form-group">
                            <label>Jam Berakhir</label>
                            <input type="text" class="form-control" name="endTime" required="" value="{{$exm->end_time}}">
                        </div>

                        {{-- <div class="form-group">
                            <label>Batas Pertanyaan</label>
                            <input type="number" name="examQuestDipLimit" id="question_limit" class="form-control" placeholder="Masukkan Batas Pertanyaan" value="{{$exm->question_limit_display}}">
                        </div> --}}

                        <div class="form-group">
                            <label>Nama Ujian/Test</label>
                            <input type="" name="title" class="form-control" placeholder="Masukkan Nama Ujian/Test" required="" value="{{$exm->title}}">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi Ujian/Test</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Masukkan Deskripsi Ujian/Tes" required="">{{$exm->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required="">
                                <option value="1">Aktif</option>
                                <option value="0">Non Aktif</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>