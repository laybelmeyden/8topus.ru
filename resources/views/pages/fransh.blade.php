@extends('layouts.master')

@section('content')

<section class="service-home pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div style="padding-top: 160px; color:black; text-align:center; font-size:18px;"></div>
                    @foreach ($part as $parts)
                            @if (App::isLocale('ru'))
                            {!! $parts -> body_ru !!}
                            @else 
                            {!! $parts -> body_en !!}
                            @endif
                            @endforeach        
<div class="col-md-12 text-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="
    background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);    border-radius: 33px;
    height: 50px;
    border: 0px;
    cursor: pointer;
    margin-bottom:20px;
    width: 90%;
    text-transform: uppercase;">
  Узнать больше
</button>

</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Франшиза</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="megaform" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваше имя</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name_text" aria-describedby="emailHelp" placeholder="Введите Ваше имя" required>
                                        <small id="emailHelp" class="form-text text-muted">Вы можете ввести любое имя</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваш город</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" placeholder="Введите город вашего проживания" required>
                                        <small id="emailHelp" class="form-text text-muted">Введите город вашего проживания</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ваш телефон</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Введите ваш номер телефона" required>
                                        <small id="emailHelp" class="form-text text-muted">Введите ваш номер телефона</small>
                                    </div>
                                   
                                   
                                    <div class="col s12" style="text-align:right;">
                                    <button class="btn" type="submit">Отправить</button>
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
            </div>
        </section>
        <script> 
const form = document.querySelector('#megaform'); 
form.addEventListener('submit', (e) => { 
e.preventDefault(); 
const formData = new FormData(); 
Array.from(e.srcElement.elements).forEach(el => 
el.value && formData.append(el.name, el.value) 
) 
fetch('https://h.albato.ru/h/38/asKnBuf81YOFbSfMf35sVeu0hPWmmY9n1SDPcLWJQSY%253D', { 
method: 'POST', 
body: formData 
}) 
location.href = '/fransh';}) 
</script> 
        @endsection