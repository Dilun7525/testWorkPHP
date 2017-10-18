function call() {

    var msg = $('#form-comments').serialize();
    $.ajax({
        method: 'POST',
        url: '../php/submit_forms.php',
        data: msg,
        success: function (data) {

            $('#result_add_comments').html(data);
        },
        error: function () {
            alert(' Форма не отправлена ');
        }
    });
}


/*$('#btn_form').submit(function(e){
    e.preventDefault();
    var date_form = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "php/submit_forms.php",
        data: date_form,
        success: function(result_php){
            $('#result_add_comments').html('<p>охохохохохохохохоххохохохоххо</p>');
            $('#result_add_comments').show();
        }
    })
});*/
