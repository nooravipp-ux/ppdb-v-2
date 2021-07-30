<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="refreshFrm" id="addCourseFrm" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tes/Ujian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Tes/Ujian</label>
                            <input type="" name="course_code" id="course_code" class="form-control" placeholder="Masukkan Kode Tes/Ujian" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Tes/Ujian</label>
                            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Masukkan Nama Tes/Ujian" required="" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <form class="refreshFrm" id="updateCourseFrm" method="post">
            <div class="modal-content myModal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Course</label>
                            <input type="" name="course_name" id="update_course_name" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Now</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="refreshFrm" id="addExamFrm" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Exam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Course</label>
                            <select class="form-control" name="course_id">
                                @if(isset($course))
                                    <option value="0">-- Choose Course --</option>
                                    @foreach($course as $c)
                                    <option value="{{$c->id}}">{{$c->course_code}}-{{$c->course_name}}</option>
                                    @endforeach
                                @else
                                <option value="0">-- There's no course --</option>
                                @endif

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Exam Time Limit</label>
                            <select class="form-control" name="timeLimit" required="">
                                <option value="0">Select time</option>
                                <option value="10">10 Minutes</option>
                                <option value="20">20 Minutes</option>
                                <option value="30">30 Minutes</option>
                                <option value="40">40 Minutes</option>
                                <option value="50">50 Minutes</option>
                                <option value="60">60 Minutes</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Question Limit to Display</label>
                            <input type="number" name="examQuestDipLimit" id="question_limit" class="form-control" placeholder="Input question limit to display">
                        </div>

                        <div class="form-group">
                            <label>Exam Title</label>
                            <input type="" name="title" class="form-control" placeholder="Input Exam Title" required="">
                        </div>

                        <div class="form-group">
                            <label>Exam Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Input Exam Description" required=""></textarea>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Now</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="refreshFrm" id="addExamineeFrm" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Examinee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input Fullname" autocomplete="off" required="">
                        </div>
                        <div class="form-group">
                            <label>Birhdate</label>
                            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="0">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" name="course" id="course">
                                <option value="0">Select course</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Year Level</label>
                            <select class="form-control" name="year_level" id="year_level">
                                <option value="0">Select year level</option>
                                <option value="first year">First Year</option>
                                <option value="second year">Second Year</option>
                                <option value="third year">Third Year</option>
                                <option value="fourth year">Fourth Year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Now</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Question for <br></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="refreshFrm" method="post" id="addQuestionFrm">

                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Question</label>
                            <input type="hidden" name="exam_id" value="<?php echo (isset($exam_id)) ? $exam_id : "";?>">
                            <input type="text" name="question" id="question" class="form-control" placeholder="Input question" autocomplete="off">
                        </div>

                        <fieldset>
                            <legend>Input word for choice's</legend>
                            <div class="form-group">
                                <label>Choice A</label>
                                <input type="" name="opt_1" id="choice_A" class="form-control" placeholder="Input choice A" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Choice B</label>
                                <input type="" name="opt_2" id="choice_B" class="form-control" placeholder="Input choice B" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Choice C</label>
                                <input type="" name="opt_3" id="choice_C" class="form-control" placeholder="Input choice C" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Choice D</label>
                                <input type="" name="opt_4" id="choice_D" class="form-control" placeholder="Input choice D" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Correct Answer</label>
                                <input type="" name="correctAnswer" id="correct_answer" class="form-control" placeholder="Input correct answer" autocomplete="off">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Now</button>
                </div>
            </form>
        </div>

    </div>
</div>