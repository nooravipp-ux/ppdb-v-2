// Admin Log in
$(document).on("submit", "#adminLoginFrm", function() {
    $.post("query/loginExe.php", $(this).serialize(), function(data) {
        if (data.res == "invalid") {
            Swal.fire(
                'Invalid',
                'Please input valid username / password',
                'error'
            )
        } else if (data.res == "success") {
            $('body').fadeOut();
            window.location.href = 'home.php';
        }
    }, 'json');

    return false;
});



// Add Course 
$(document).on("submit", "#addCourseFrm", function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post("{{url('/manage-exam/add-course", $(this).serialize(), function(data) {
        if (data.status == "exist") {
            Swal.fire(
                'Already Exist',
                data.course_name.toUpperCase() + ' Already Exist',
                'error'
            )
        } else if (data.status == "success") {
            Swal.fire(
                    'Success',
                    'Data Successfully Added',
                    'success'
                )
                // $('#course_name').val("");
            refreshDiv();
            $('#addCourseFrm')[0].reset();
            $('#course_name').val("");
            $('#course_code').val("");
        }
    }, 'json')
    return false;
});

// Update Course
$(document).on("submit", "#updateCourseFrm", function() {
    $.post("query/updateCourseExe.php", $(this).serialize(), function(data) {
        if (data.res == "success") {
            Swal.fire(
                'Success',
                'Selected course has been successfully updated!',
                'success'
            )
            refreshDiv();
        }
    }, 'json')
    return false;
});


// Delete Course
$(document).on("click", "#deleteCourse", function(e) {
    e.preventDefault();
    var id = $(this).data("id");
    $.ajax({
        type: "post",
        url: "query/deleteCourseExe.php",
        dataType: "json",
        data: { id: id },
        cache: false,
        success: function(data) {
            if (data.res == "success") {
                Swal.fire(
                    'Success',
                    'Selected Course successfully deleted',
                    'success'
                )
                refreshDiv();
            }
        },
        error: function(xhr, ErrorStatus, error) {
            console.log(status.error);
        }

    });



    return false;
});


// Delete Exam
$(document).on("click", "#deleteExam", function(e) {
    e.preventDefault();
    var id = $(this).data("id");
    $.ajax({
        type: "post",
        url: "query/deleteExamExe.php",
        dataType: "json",
        data: { id: id },
        cache: false,
        success: function(data) {
            if (data.res == "success") {
                Swal.fire(
                    'Success',
                    'Selected Course successfully deleted',
                    'success'
                )
                refreshDiv();
            }
        },
        error: function(xhr, ErrorStatus, error) {
            console.log(status.error);
        }

    });



    return false;
});



// Add Exam 
$(document).on("submit", "#addExamFrm", function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post("add-or-update-exam", $(this).serialize(), function(data) {
        console.log(data.status);
        if (data.res == "noSelectedCourse") {
            Swal.fire(
                'No Course',
                'Please select course',
                'error'
            )
        }
        if (data.res == "noSelectedTime") {
            Swal.fire(
                'No Time Limit',
                'Please select time limit',
                'error'
            )
        }
        if (data.res == "noDisplayLimit") {
            Swal.fire(
                'No Display Limit',
                'Please input question display limit',
                'error'
            )
        } else if (data.res == "exist") {
            Swal.fire(
                'Already Exist',
                data.title + '<br>Already Exist',
                'error'
            )
        } else if (data.status == "success") {
            Swal.fire(
                'Success',
                data.data.title + '<br>Successfully Added',
                'success'
            )
            $('#addExamFrm')[0].reset();
            $('#course_name').val("");
            refreshDiv();
        }
    }, 'json')
    return false;
});



// Update Exam 
$(document).on("submit", "#updateExamFrm", function() {
    $.post("query/updateExamExe.php", $(this).serialize(), function(data) {
        if (data.res == "success") {
            Swal.fire(
                'Update Successfully',
                data.msg + ' <br>are now successfully updated',
                'success'
            )
            refreshDiv();
        } else if (data.res == "failed") {
            Swal.fire(
                "Something's went wrong!",
                'Somethings went wrong',
                'error'
            )
        }

    }, 'json')
    return false;
});

// Update Question
$(document).on("submit", "#updateQuestionFrm", function() {
    $.post("query/updateQuestionExe.php", $(this).serialize(), function(data) {
        if (data.res == "success") {
            Swal.fire(
                'Success',
                'Selected question has been successfully updated!',
                'success'
            )
            refreshDiv();
        }
    }, 'json')
    return false;
});


// Delete Question
$(document).on("click", "#deleteQuestion", function(e) {
    e.preventDefault();
    var id = $(this).data("id");
    $.ajax({
        type: "post",
        url: "query/deleteQuestionExe.php",
        dataType: "json",
        data: { id: id },
        cache: false,
        success: function(data) {
            if (data.res == "success") {
                Swal.fire(
                    'Deleted Success',
                    'Selected question successfully deleted',
                    'success'
                )
                refreshDiv();
            }
        },
        error: function(xhr, ErrorStatus, error) {
            console.log(status.error);
        }

    });



    return false;
});


//Add Question
// $(document).on("submit", "#addQuestionFrm", function() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.post("add-questions", $(this).serialize(), function(data) {
//         if (data.res == "exist") {
//             Swal.fire(
//                 'Already Exist',
//                 data.msg + ' question <br>already exist in this exam',
//                 'error'
//             )
//         } else if (data.res == "success") {
//             Swal.fire(
//                 'Success',
//                 data.msg + ' question <br>Successfully added',
//                 'success'
//             )
//             $('#addQuestionFrm')[0].reset();
//             refreshDiv();
//         }

//     }, 'json')
//     return false;
// });

$(document).on("submit", "#addQuestionFrm", $(this).serialize(), function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var formData = $(this).serialize()
    $.ajax({
        type: "post",
        url: "add-questions",
        dataType: "json",
        data: formData,
        success: function(data) {
            if (data.status == "success") {
                Swal.fire(
                    'Success',
                    data.data.title + '<br>Successfully Added',
                    'success'
                )
                $('#addQuestionFrm')[0].reset();
                refreshDiv();
            }
        },
        error: function(xhr, ErrorStatus, error) {
            console.log(status.error);
        }

    });
    return false;
});

// Add Examinee
$(document).on("submit", "#addExamineeFrm", function() {
    $.post("query/addExamineeExe.php", $(this).serialize(), function(data) {
        if (data.res == "noGender") {
            Swal.fire(
                'No Gender',
                'Please select gender',
                'error'
            )
        } else if (data.res == "noCourse") {
            Swal.fire(
                'No Course',
                'Please select course',
                'error'
            )
        } else if (data.res == "noLevel") {
            Swal.fire(
                'No Year Level',
                'Please select year level',
                'error'
            )
        } else if (data.res == "fullnameExist") {
            Swal.fire(
                'Fullname Already Exist',
                data.msg + ' are already exist',
                'error'
            )
        } else if (data.res == "emailExist") {
            Swal.fire(
                'Email Already Exist',
                data.msg + ' are already exist',
                'error'
            )
        } else if (data.res == "success") {
            Swal.fire(
                'Success',
                data.msg + ' are now successfully added',
                'success'
            )
            refreshDiv();
            $('#addExamineeFrm')[0].reset();
        } else if (data.res == "failed") {
            Swal.fire(
                "Something's Went Wrong",
                '',
                'error'
            )
        }



    }, 'json')
    return false;
});



// Update Examinee
$(document).on("submit", "#updateExamineeFrm", function() {
    $.post("query/updateExamineeExe.php", $(this).serialize(), function(data) {
        if (data.res == "success") {
            Swal.fire(
                'Success',
                data.exFullname + ' <br>has been successfully updated!',
                'success'
            )
            refreshDiv();
        }
    }, 'json')
    return false;
});

// add announcement
$(document).on("submit", "#addAnnouncementFrm", $(this).serialize(), function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var formData = $(this).serialize()
    $.ajax({
        type: "post",
        url: "/announcement/add-announcement",
        dataType: "json",
        data: formData,
        success: function(data) {
            if (data.status == "success") {
                Swal.fire(
                    'Success',
                    data.data.title + '<br>Successfully Added',
                    'success'
                )
                $('#addQuestionFrm')[0].reset();
                refreshDiv();
            }
        },
        error: function(xhr, ErrorStatus, error) {
            console.log(status.error);
        }

    });
    return false;
});

function refreshDiv() {
    $('#tableList').load(document.URL + ' #tableList');
    $('#refreshData').load(document.URL + ' #refreshData');

}

// Submit Answer
$(document).on('submit', '#submitAnswerFrm', function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var examAction = $('#examAction').val();

    if (examAction != "") {
        Swal.fire({
            title: 'Time Out',
            text: "your time is over, please click ok",
            icon: 'warning',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK!'
        }).then((result) => {
            if (result.value) {

                $.post("/start-exam/submit-exam", $(this).serialize(), function(data) {

                    if (data.res == "alreadyTaken") {
                        Swal.fire(
                            'Already Taken',
                            "you already take this exam",
                            'error'
                        )
                    } else if (data.res == "success") {
                        Swal.fire({
                            title: 'Success',
                            text: "your answer successfully submitted!",
                            icon: 'success',
                            allowOutsideClick: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK!'
                        }).then((result) => {
                            if (result.value) {
                                $('#submitAnswerFrm')[0].reset();
                                var exam_id = $('#exam_id').val();
                                window.location.href = '/start-exam/submit-exam/result/' + exam_id;
                            }

                        });


                    } else if (data.res == "failed") {
                        Swal.fire(
                            'Error',
                            "Something;s went wrong",
                            'error'
                        )
                    }

                }, 'json');

            }
        });
    } else {
        Swal.fire({
            title: 'Are you sure?',
            text: "you want to submit your answer now?",
            icon: 'warning',
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit now!'
        }).then((result) => {
            if (result.value) {

                $.post("/start-exam/submit-exam", $(this).serialize(), function(data) {

                    if (data.res == "alreadyTaken") {
                        Swal.fire(
                            'Already Taken',
                            "you already take this exam",
                            'error'
                        )
                    } else if (data.res == "success") {
                        Swal.fire({
                            title: 'Success',
                            text: "your answer successfully submitted!",
                            icon: 'success',
                            allowOutsideClick: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK!'
                        }).then((result) => {
                            if (result.value) {
                                $('#submitAnswerFrm')[0].reset();
                                var exam_id = $('#exam_id').val();
                                window.location.href = '/start-exam/submit-exam/result/' + exam_id;
                            }

                        });


                    } else if (data.res == "failed") {
                        Swal.fire(
                            'Error',
                            "Something;s went wrong",
                            'error'
                        )
                    }

                }, 'json');

            }
        });
    }
    return false;
});