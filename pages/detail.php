<?php if(isset($_GET['id']) && $_GET['id']!='') {$pageid= $_GET['id'];} ?>

<?php
$upload_dir    = $_SERVER['DOCUMENT_ROOT'].'/uploads';
function dirToArray($dir) { /* функция создает многомерный масив имен папок и имен файлов */
 $result = array();
 $cdir = scandir($dir);
 foreach ($cdir as $key => $value)
 {
    if (!in_array($value,array(".","..")))
    {
       if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
       {
          $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
       }
       else
       {
          $result[] = $value;
       }
    }
 }
 return $result;
}

$mass_files = dirToArray($upload_dir);
 ?>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery.uploadfile.js"></script>
<script type="text/javascript" src="js/uploaders.js"></script>
<script src="js/select2.js"></script>

<script>
$('#states').select2({placeholder: 'Нажмите для выбора'});
$('#vina').select2({placeholder: 'Нажмите для выбора'});
$('#add_oficce').select2({placeholder: 'Нажмите для добавления офисов'});


</script>

<div class="head">
  <div class="go_back"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
  <span class="title_page">Событие № хххх (статус "хххх")</span>
  <div class="comments_button">Обсуждение</div>
  <div class="create_button">Сохранить</div>
  <div class="create_button update_page_btn" data-page="detail" data-id="<?=$pageid;?>" >Обновить страницу</div>
</div>

<section id="section1">
  <div class="cold-2">
    <span>Создано: </span><span class="screated">2017/05/09 10:23</span><br/>
    <span>Инициатор: </span><span>г. Ростов-на-Дону, Красноармейская (Иванов И. И.) </span><br />
    <span>Вид нарушения: </span><span><strong>Нарушение сохранности</strong></span><br />
    <span>Описание: </span><br /><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br />
    <span><strong>Документ подтверждающий, что клиент претензий не имеет:</strong></span><br />
    <div class="fileuploader nopretense"></div><br />
    <div class="fileuploader act_prm"></div><br />
    <div class="fileuploader scan_nacl"></div><br />
    <div class="fileuploader trans_nacl"></div><br />
    <div class="fileuploader manifest"></div><br />
    <div class="fileuploader obsn"></div><br />
    <div class="fileuploader pretenz"></div><br />
    <div class="fileuploader photos"></div><br />
    <div class="fileuploader dopmat"></div><br />






  </div>
  <div class="cold-2 materialinc">

<?
$images_type = array('jpg', 'bmp', 'png');
$neme_cats =  array(
  'act_prm' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i> Акт приема и осмотра',
  'scan_nacl' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Скан накладной',
  'trans_nacl' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Транспортная накладная',
  'manifest' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Манифест',
  'obsn' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Объяснительная',
  'pretenz' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Претензия',
  'photos' => '<i class="fa fa-camera-retro fa-fw"></i> Фото отчет',
  'dopmat' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i>  Дополнительные материалы',
  'nopretense' => '<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i> Нет претензий'
 );
/*выгоняем все на всеобщее обозрение*/
foreach ($mass_files as $categories => $namecat) {
//echo $categories.'<br />'; // название папки
// выводим название раздела, файлов
echo '<strong>'.$neme_cats[$categories].'</strong><br/>';

 foreach ($namecat as $key => $value) {
   $full_file_dir = $_SERVER['HTTP_REFERER'].'uploads/'.$categories.'/'.$value;// полный путь к файлу
   $type_file = explode('.', $value);
   $type_file = end($type_file); // расширение файла
      if (in_array($type_file, $images_type)) { //картинки
        echo '<a href="'.$full_file_dir.'" class="linkimgs" data-lightbox="'.$categories.'"><img class="img_uploads" src="'.$full_file_dir.'" /></a>';
      } elseif ($type_file == 'doc' || $type_file == 'docx' || $type_file == 'rtf' || $type_file == 'odt'){
        echo '<div class="file"><a href="'.$full_file_dir.'" target="_blank" > <span class="filetype word"><i class="fa fa-file-word-o" aria-hidden="true"></i></span><br /><span>'.$value.'</span></a></div>';
      } elseif ($type_file == 'xls' || $type_file == 'xlsx' ||  $type_file == 'ods'){
        echo '<div class="file"><a href="'.$full_file_dir.'" target="_blank" > <span class="filetype exel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span><br /><span>'.$value.'</span></a></div>';
      } elseif ($type_file == 'pdf'){
        echo '<div class="file"><a href="'.$full_file_dir.'" target="_blank" > <span class="filetype pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span><br /><span>'.$value.'</span></a></div>';
      } else {
        echo '<div class="file"><a href="'.$full_file_dir.'" target="_blank" > <span class="filetype ofter"><i class="fa fa-file-code-o" aria-hidden="true"></i></span><br /><span>'.$value.'</span></a></div>';
      }
 }
 echo '<br /><div class="clearboth"></div>';
}
?>

  </div>
</section>

<?php function oficceDetected($idoficce)
{
$result .= '<section id="ofice_'.$idoficce.'">';


$result .='

<div class="head2">
  <span class="title_page"><i class="fa fa-briefcase" aria-hidden="true"></i> Офис: <strong>'.$idoficce.'</strong>, (Ответственный за наполнение)</span>
</div>



<div class="cold-2">
<span>Вопросы Офису:</span><br />
<textarea class="vp_ot" name="vopr_'.$idoficce.'"></textarea><br />

<span>Ответ офиса:</span><br />
<textarea class="vp_ot" name="vopr_'.$idoficce.'"></textarea><br />
</div>
<div class="cold-2">
<span>Вопросы и ответы:</span><br />
<span><strong>Вопрос:</strong> Почему нет манифеста?</span><br />
<span><strong>Ответ:</strong> Мы его не прикрепили.</span><br />
<span><strong>Вопрос:</strong> Почему нет манифеста?</span><br />
<span><strong>Ответ:</strong> Мы его не прикрепили.</span><br />
<span><strong>Вопрос:</strong> Почему нет манифеста?</span><br />
<span><strong>Ответ:</strong> Мы его не прикрепили.</span><br />
<span><strong>Вопрос:</strong> Почему нет манифеста?</span><br />
<span><strong>Ответ:</strong> Мы его не прикрепили.</span><br />
</div>
<div class="clearboth"></div>
';


$result .= '<div class="cold-2">

<div class="fileuploader manifest_'.$idoficce.'"></div>
<div class="fileuploader blank_'.$idoficce.'"></div>
<div class="clearboth"></div>
<span>Примечания:</span><br />
<textarea class="vp_ot" name="coment_'.$idoficce.'"></textarea><br />
</div><div class="cold-2">photos</div>
<div class="clearboth"></div>
<div class="cold-1"><button style="float: right;margin: 10px;">Сохранить</button></div>
';

$result .='<script>
$(".fileuploader.manifest_'.$idoficce.'").uploadFile({url:"system/upload.php", fileName:"myfile", uploadStr:`<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i> Манифест`});
$(".fileuploader.blank_'.$idoficce.'").uploadFile({url:"system/upload.php", fileName:"myfile", uploadStr:`<i class="fa fa-file-archive-o fa-fw" aria-hidden="true"></i> Бланк`});
</script></section>';

return $result;
} ?>

<?php for ($i=0; $i < 3; $i++) { // в качестве примера, зациклим 3 офиса
echo oficceDetected($i);
} ?>


<section class="rasl">
  <div class="head2">
    <span class="title_page"><i class="fa fa-users" aria-hidden="true"></i> <strong>Комиссия по расследованию</strong>, (Фамилия И.О.)</span>
  </div>
  <div class="cold-1">
    <span>Предварительные результаты раследования по факту нарушения № хххх :</span><br />
    <textarea class="vp_ot" name="pre_result"></textarea><br />
  </div>
  <div class="cold-2">
    <span>Заключение специалиста по факту нарушения № хххх :</span><br />
    <textarea class="vp_ot" name="result_spec"></textarea><br />
  </div>
  <div class="cold-2">
    <span><i class="fa fa-level-down fa-fw" aria-hidden="true"></i> Изменить вид нарушения</span><br />
    <select>
      <option value="1">Нарушение сохранности</option>
      <option value="2">Утрата / хищение</option>
    </select><br /><br />

  <span><i class="fa fa-level-down fa-fw" aria-hidden="true"></i> Добавить еще офисы</span><br />
    <select id="add_oficce" multiple="true" >
        <optgroup label="Alaskan/Hawaiian Time Zone">
        <option value="AK">Alaska</option>
        <option value="HI">Hawaii</option>
      </optgroup>
      <optgroup label="Pacific Time Zone">
        <option value="CA">California</option>
        <option value="NV">Nevada</option>
        <option value="OR">Oregon</option>
        <option value="WA">Washington</option>
      </optgroup>
    </select><br />


  </div>
  <div class="clearboth"></div>
  <div class="cold-2">
    <i class="fa fa-id-card-o fa-fw" aria-hidden="true"></i> Информирование о заключении</span><br />
    <select id="states" multiple="true" >
        <optgroup label="Alaskan/Hawaiian Time Zone">
        <option value="AK">Alaska</option>
        <option value="HI">Hawaii</option>
      </optgroup>
      <optgroup label="Pacific Time Zone">
        <option value="CA">California</option>
        <option value="NV">Nevada</option>
        <option value="OR">Oregon</option>
        <option value="WA">Washington</option>
      </optgroup>
    </select><br />


  </div>
  <div class="cold-2">
    <button style="float: right;margin: 10px;">Сохранить</button>
  </div>
</section>


<section class="result_rasl">
  <div class="head2">
    <span class="title_page"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <strong>Результатирующая информация</strong>, (Фамилия И.О.)</span>
  </div>
  <div class="cold-2">
    <span>Решение по факту нарушения:</span><br />
    <textarea class="vp_ot"></textarea>
  </div>
  <div class="cold-2">
    <i class="fa fa-id-card-o fa-fw" aria-hidden="true"></i> Выберите всех участников, кто виновен в нарушении</span><br />
    <select id="vina" multiple="true" >
        <optgroup label="Alaskan/Hawaiian Time Zone">
        <option value="AK">Alaska</option>
        <option value="HI">Hawaii</option>
      </optgroup>
      <optgroup label="Pacific Time Zone">
        <option value="CA">California</option>
        <option value="NV">Nevada</option>
        <option value="OR">Oregon</option>
        <option value="WA">Washington</option>
      </optgroup>
    </select>
  </div>
  <div class="cold-1">
      <button style="float: right;margin: 10px;">Сохранить</button>
  </div>
  <div class="clearboth"></div>
</section>

<section class="ur_vopr">
  <div class="head2">
    <span class="title_page"><i class="fa fa-gavel" aria-hidden="true"></i> <strong>Решение юриста</strong>, (Фамилия И.О.)</span>
  </div>
  <div class="cold-2">
    <span>Ответ юриста</span><br />
    <textarea class="vp_ot"></textarea>
  </div>
  <div class="cold-2">
    <span>Результатирующие документы юриста:</span><br />
      <div class="fileuploader ur_doc"></div>
  </div>

  <div class="cold-1">
    <button style="float: right;margin: 10px;">Сохранить</button>
  </div>
</section>

<section class="result_delo">
  <div class="head2">
    <span class="title_page"><i class="fa fa-lock" aria-hidden="true"></i> <strong>Итоговая информация по событию</strong>, (Фамилия И.О.)</span>
  </div>
  <div class="cold-2">
    <span>Результаты расследования по нарушению № хххх :</span><br />
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br />
    <span>В ходе расследования было выявлено, что:</span><br/>

  </div>
  <div class="cold-2">

  </div>
</section>
