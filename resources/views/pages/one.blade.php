@extends('layouts.master')

@section('content')
<div class="parallax-container">
      <div class="parallax"><img src="assets/css/nastol.com.ua-120172.jpg"></div>
      <div class="container">
      <div class="row">
      <p class="main_text_one">Туры от компании 8TOPUS</p> 
        <div class="col s12 m12 nav_pages_item">
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Выбрать напраление</a>

          <!-- Modal Structure -->
          <div id="modal1" class="modal modal-fixed-footer modal_main">
            <div class="modal-content">
                  <a href="/one">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/374c812b4c4857d83b25a014ec5a8c3f40e16487.svg" alt="">
                      <p>Туры</p>
                      </div>
                  </div>
                  </a>
                  <a href="/two">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/4eb63eefe1859c5c8cde91c5f0b455d0edb6e7a5.svg" alt="">
                      <p>Прокат авто</p>
                      </div>
                  </div>
                  </a>
                  <a href="/three">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/070574bd9c5902d0f5b297e7d3136c0e13ef6f5b.svg" alt="">
                      <p>Экскурсии</p>
                      </div>
                  </div>
                  </a>
                  <a href="/four">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/1d5413e4d86028964e7d385ab073ab6f33db996f.svg" alt="">
                      <p>Аренда яхт</p>
                      </div>
                  </div>
                  </a>
                  <a href="/five">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/837370051ef81c2867293c8a871b17e391e76859.svg" alt="">
                      <p>Ж/д билеты</p>
                      </div>
                  </div>
                  </a>
                  <a href="/six">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/83845bfbb7e81434ea3666f8d046372b23346075.svg" alt="">
                      <p>Поиск попутчиков</p>
                      </div>
                  </div>
                  </a>
                  <a href="/seven">
                  <div class="col m4">
                      <div class="nav_birger_item">
                      <img src="//theme.zdassets.com/theme_assets/622844/08895e77147645702bc1d4fd2bb634df09c8ab21.svg" alt="">
                      <p>Визы</p>
                      </div>
                  </div>
                  </a>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>

<script src="http://c18.travelpayouts.com/content?promo_id=1492&shmarker=219987" charset="utf-8" async></script>



@endsection