<form id="contactMessage">
  <div class="form-group">
    <label class="col-form-label" for="email">Адрес эл. почты: </label>
    <input type="text" class="form-control" id="email" placeholder="Введите адрес эл. почты">
    <span  id="email-error" class="er-span"></span>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="name">Имя: </label>
    <input type="text" class="form-control" id="name" placeholder="Введите ваше имя">
    <span  id="name-error" class="er-span"></span>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="phone">Номер телефона: </label>
    <input type="text" class="form-control" id="phone" placeholder="Введите ваш номер телефона">
    <span  id="phone-error" class="er-span"></span>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="message">Cообщение: </label>
    <textarea class="form-control" rows="5" id="message" placeholder="Введите ваше сообщение"></textarea>
    <span  id="message-error" class="er-span"></span>
    
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
  </div>
</form>