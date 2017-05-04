<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery.uploadfile.js"></script>
<script type="text/javascript" src="js/uploaders.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script src="js/select2.js"></script>
<script>
$.datetimepicker.setLocale('ru');
$('.some_class').datetimepicker();
$('#states').select2();

</script>

<div class="head">
  <span class="title_page">Новое событие (статус "Новый")</span>
  <div class="comments_button">Обсуждение</div>
  <div class="create_button">Создать</div>
</div>

<div class="new_ts_content">


  <div class="cold-4">
    <label>
    <span><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Дата и время</span><br />
    <input type="text" name="date" class="some_class" />
  </label>
  </div>

  <div class="cold-4">
    <label>
    <span><i class="fa fa-university fa-fw" aria-hidden="true"></i> Номер накладной</span><br />
    <input type="text" name="date" />
  </label>
  </div>

  <div class="cold-4">
    <label>
    <span><i class="fa fa-id-card-o fa-fw" aria-hidden="true"></i>Номер заказа</span><br />
    <input type="text" name="date" />
  </label>
  </div>

  <div class="cold-4">
    <label>
    <span><i class="fa fa-level-down fa-fw" aria-hidden="true"></i>Вид нарушения</span><br />
    <select>
      <option value="1">Нарушение сохранности</option>
      <option value="2">Утрата / хищение</option>
    </select>
  </label>
  </div>

  <div class="clearboth"></div>

  <div class="cold-4">
    <label>
    <span><i class="fa fa-level-down fa-fw" aria-hidden="true"></i> Вид услуги</span><br />
    <select>
    <option value="1">Экспресс</option>
    <option value="2">Интернет-магазин</option>
    <option value="3">Транспортное</option>
    <option value="4">Эконом</option>
  </select>
  </label>
  </div>

  <div class="cold-4">
    <label>
    <span><i class="fa fa-user-secret fa-fw" aria-hidden="true"></i> Перевозчик / нарушитель</span><br />
    <input type="text" name="date" />
  </label>
  </div>

  <div class="clearboth margintop20"></div>
  <div class="hlp_doc">Прикрепите документы, необходимые для начала расследования. Нажмите на соответствующую кнопку или перенесите в нужный блок документы и изображения</div>
  <div class="clearboth margintop20"></div>

  <div class="cold-2">
    <div class="fileuploader act_prm"></div>
  </div>

  <div class="cold-2">
    <div class="fileuploader scan_nacl"></div>
  </div>

  <div class="clearboth"></div>

  <div class="cold-2">
    <div class="fileuploader trans_nacl"></div>
  </div>

  <div class="cold-2">
    <div class="fileuploader manifest"></div>
  </div>

  <div class="clearboth"></div>

  <div class="cold-2">
    <div class="fileuploader obsn"></div>
  </div>

  <div class="cold-2">
    <div class="fileuploader pretenz"></div>
  </div>


  <div class="clearboth"></div>


  <div class="cold-2">
    <div class="fileuploader photos"></div>
  </div>

  <div class="cold-2">
    <div class="fileuploader dopmat"></div>
  </div>

  <div class="clearboth"></div>

  <div class="cold-1">
    <label>
    <span><i class="fa fa-id-card-o fa-fw" aria-hidden="true"></i> Описание факта нарушения</span><br />
    <textarea></textarea>
  </label>
  </div>

  <div class="clearboth"></div>

  <div class="cold-1">
    <label>
    <span><i class="fa fa-id-card-o fa-fw" aria-hidden="true"></i> Информирование о факте нарушения участников события</span><br />
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
      <optgroup label="Mountain Time Zone">
        <option value="AZ">Arizona</option>
        <option value="CO">Colorado</option>
        <option value="ID">Idaho</option>
        <option value="MT">Montana</option><option value="NE">Nebraska</option>
        <option value="NM">New Mexico</option>
        <option value="ND">North Dakota</option>
        <option value="UT">Utah</option>
        <option value="WY">Wyoming</option>
      </optgroup>
      <optgroup label="Central Time Zone">
        <option value="AL">Alabama</option>
        <option value="AR">Arkansas</option>
        <option value="IL">Illinois</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="OK">Oklahoma</option>
        <option value="SD">South Dakota</option>
        <option value="TX">Texas</option>
        <option value="TN">Tennessee</option>
        <option value="WI">Wisconsin</option>
      </optgroup>
      <optgroup label="Eastern Time Zone">
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="IN">Indiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="OH">Ohio</option>
        <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
        <option   value="VT">Vermont</option><option value="VA">Virginia</option>
        <option value="WV">West Virginia</option>
      </optgroup>
    </select>

  </label>
  </div>
  <div class="clearboth"></div>
  <div class="cold-4"></div>
  <div class="cold-4"></div>
  <div class="cold-4"></div>
  <div class="cold-4">
    <button style="float: right;margin: 10px;">Создать</button>
  </div>

</div>
