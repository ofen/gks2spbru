@extends('base')
@section('content')
<h4>{{ $page_title }}</h4>
<form>
    <!-- Field -->
    <div class="form-group">
        <input type="text" class="form-control" id="fullName" placeholder="ФИО">
    </div>
    <!-- Field -->
    <div class="form-group">
        <input type="text" class="form-control" id="address" placeholder="Ваш адрес">
    </div>
    <!-- Field -->
    <div class="form-group">
        <input type="text" class="form-control" id="phone" placeholder="Ваш номер телефона">
    </div>
    <!-- Field -->
    <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="E-mail адрес">
    </div>
    <!-- Field -->
    <div class="form-group">
        <select class="custom-select" id="messageSubject">
            <option value="" disabled selected hidden>Выберите тему</option>
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