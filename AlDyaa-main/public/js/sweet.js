

"use strict";

$(document).on('click', '.delete', function (e) {
    e.preventDefault();
    var id = $(this).attr('student_id');

    swal({
        title: 'Are you sure?',
        text: "you want to remove this record?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            token();

            $.ajax({
                url: 'order/' + id,
                method: 'DELETE',
                success: function (result) {
                    if (result.success) {
                        refresh();
                        cleaner();
                        swal(
                            'Deleted!',
                            'Successfull Deleted!',
                            'success'
                        );
                    }
                }
            });
        }
    });

});
