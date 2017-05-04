/*
В данном скрипте вызываются функции загрузки файлов на сервер "на лету с прогрессом загрузки"
Данный тип загружает поочередно файлы, а не скопом все сразу, уменьшая вероятность получения
503, 500 или 403 ошибки
 Данную функцию выполняет jquery плагин jquery.uploadfile.min.js
*/

$(document).ready(function() {
	$(".fileuploader.act_prm").uploadFile({
		url:"system/upload.php",
		fileName:"myfile",
  	uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i> Акт приема и осмотра'
	});

  $(".fileuploader.scan_nacl").uploadFile({
		url:"system/upload.php",
		fileName:"myfile",
  	uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Скан накладной'
	});

  $(".fileuploader.trans_nacl").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Транспортная накладная'
  });
  $(".fileuploader.manifest").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Манифест'
  });

  $(".fileuploader.obsn").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Объяснительная'
  });

  $(".fileuploader.pretenz").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Претензия'
  });

  $(".fileuploader.photos").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-camera-retro fa-fw"></i> Фото отчет'
  });

  $(".fileuploader.dopmat").uploadFile({
    url:"system/upload.php",
    fileName:"myfile",
    uploadStr:'<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Дополнительные материалы'
  });




});
