$(document).ready(function() {
  function ajaxload(dt = null) {
    /*
    Функция загрузки контента в панели через аякс запросы
    Принимает значения параметров data
    data-page: указание страницы из папки pages
    */
    if (dt == null) { // если в функцию не залетели параметры data то присваиваем list
    $page = 'list';
  } else { // иначе указываем из data страницу
    $page = dt['page'];
  }
    $.ajax({
      beforeSend: function() { // предварительная очистка контентной части сайта
        $('#content_block').empty().removeClass();
        $('.loader').css({'display': 'block'});
      },
      type: "GET",
      url: 'pages/'+$page+'.php', // указываем какую страницу загрузить
      data: dt, // передаем все значения data
      cache: false, // будем загружать без кеша
      success: function(html) { // данные отработаны, выводим на экран
        $("#content_block").addClass('animated fadeInDown').append(html);
        $('.loader').css({'display': 'none'});
      },
      error: function() { // что-то пошло не так, уведомляем об этом
        $("#content_block animated").addClass('animated fadeInDown').append('Ошибка загрузки :(');
        $('.loader').css({'display': 'none'});
      }
    });
  }


  ajaxload();




  /*
Вызов функции ajaxload при нажатии пунктов меню в левой части админки
с передачей значений data в виде списка объектов {ключ : значение}
*/
  $('.navigation ul li a').click(function() {
    ajaxload($(this).data());
  });
/*
Вызов функции ajaxload в загруженной таблице и странице просмотра события
параметры передаются так же как и в меню
На странице просмотра события нужно, для обновления страницы
*/
  $('#content_block').on('click', 'table tr, .update_page_btn', function(){
    ajaxload($(this).data());
  });


  $('.search').click(function(){
    $('.search_block').stop().slideToggle();
  });

$('.top').click(function(){
  $('body, html').stop().animate({scrollTop:0}, 500);

});



});
