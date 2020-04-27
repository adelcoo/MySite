$(document).ready(function(){
      /**
     * При прокрутке страницы, показываем или срываем кнопку
     */
     let btn = $('#buttonUp');
    $(window).scroll(function () {
        // Если отступ сверху больше 50px то показываем кнопку "Наверх"
        if($(this).outerWidth() >= 768){
        if ($(this).scrollTop() > 50) {
            $(btn).fadeIn();
        } else {
            $(btn).fadeOut();
        }
      }
    });

    /** При нажатии на кнопку мы перемещаемся к началу страницы */
    $(btn).click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
