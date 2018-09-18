@extends('base')
@section('content')
<h4>{{ $page_title }}</h4>
<form>
    <!-- Field -->
    <div class="form-group">
        <label for="fullName">ФИО (полностью)</label>
        <input type="text" class="form-control" id="fullName" placeholder="ФИО">
    </div>
    <!-- Field -->
    <div class="form-group">
        <label for="address">Ваш адрес</label>
        <input type="text" class="form-control" id="address" placeholder="Адрес">
    </div>
    <!-- Field -->
    <div class="form-group">
        <label for="phone">Ваш номер телефона</label>
        <input type="text" class="form-control" id="phone" placeholder="+7 812 765-43-21">
    </div>
    <!-- Field -->
    <div class="form-group">
        <label for="email">Ваш e-mail</label>
        <input type="email" class="form-control" id="email" placeholder="email@domain.ru">
    </div>
    <!-- Field -->
    <div class="form-group">
        <label for="messageSubject">Тема письма</label>
        <select class="custom-select" id="messageSubject">
            <option>Обращение</option>
            <option>Пожелание</option>
            <option>Заявление</option>
            <option>Благодарность</option>
            <option>Претензия</option>
            <option>Жалоба</option>
            <option>Другое</option>
        </select>
    </div>
    <!-- Field -->
    <div class="form-group">
        <label for="messageBody">Текст письма</label>
        <textarea class="form-control" id="messageBody" rows="3"></textarea>
    </div>
    <!-- Field -->
    <div class="custom-file">
        <label class="custom-file-label" for="attachment">Выберите файл</label>
        <input type="file" class="custom-file-input" id="attachment">
    </div>
    <!-- Button -->
    <button type="submit" class="btn btn-primary mt-3">Отправить</button>
</form>
@endsection