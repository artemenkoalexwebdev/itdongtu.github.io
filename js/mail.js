(function ($) {
$(".footer-form").submit(function (event) {
event.preventDefault();

    // Сохраняем в переменную form id текущей формы, на которой сработало событие submit
    let form = $('#' + $(this).attr('id'))[0];
    let formClass = $(this).attr('class');

    // Сохраняем в переменные дивы, в которые будем выводить текст ошибки
    let inpFamError = $(this).find('.contact-form__error_fam');
    let inpNameError = $(this).find('.contact-form__error_name');
    let inpEmailError = $(this).find('.contact-form__error_email');
    let inpMessageError = $(this).find('.contact-form__error_message');

    // Сохраняем в переменную див, в который будем выводить сообщение формы
    let formDescription = $(this).find('.contact-form__description');

    let fd = new FormData(form);
    $.ajax({
        url: "/mail/php/mail.php",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        success: function success(res) {
            let respond = $.parseJSON(res);
            if (respond.fam) {
             inpFamError.text(respond.fam);
            } else {
             inpFamError.text('');
            }
            if (respond.name) {
             inpNameError.text(respond.name);
            } else {
             inpNameError.text('');
            }

            if (respond.email) {
                inpEmailError.text(respond.email);
            } else {
                inpEmailError.text('');
            }
            if (respond.message) {
                inpEmailError.text(respond.message);
            } else {
                inpEmailError.text('');
            }
            if (respond.message) {
                inpMessageError.text(respond.message);
            } else {
                inpMessageError.text('');
            }

            if (respond.attantion) {
                formDescription.text(respond.attantion).css('color', '#e84a66').fadeIn();
            } else {
                formDescription.text('');
            }

         if (respond.success) {
                       formDescription.text(respond.success).fadeIn();
                       $('.' + formClass).find('input').val('');
                       $('.' + formClass).find('input').prop('checked', false);
                       $('.' + formClass).find('textarea').val('');
                       setTimeout(() => {
                           formDescription.fadeOut("slow");
                       }, 4000);
                       setTimeout(() => {
                           formDescription.text('');
                       }, 5000);
                   }
        },
    });
});
}(jQuery));
