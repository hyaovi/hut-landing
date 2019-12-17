<?php get_header();?>
<?php 
 if(filter_has_var(INPUT_POST, 'submit')){echo 'submitted';}
 echo $_POST['name'];
?>
<main>
  <!-- {/* FIRST SCREEN */} -->

  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-11">
          <h2 class="title-2">Система контроля</h2>
          <h1 class=" title-1 mb-md-5 ">
            <b>удаленного доступа</b> <br />
            <span class="font-weight-normal">и автоматизации задач</span>
            <br />
            <span class="font-weight-normal gradient-light">
              в бизнесе аренды квартир.
            </span>
          </h1>
        </div>
        <div class="col-12 px-0 ml-auto col-md-5 hero-img ">
          <img src="<?php bloginfo('template_directory');?>/images/girl+door-min.png"
            class="img-fluid d-none d-md-block" alt="" />
          <img src="<?php bloginfo('template_directory');?>/images/girl+door-mobile-min.png"
            class="img-fluid mobile-img d-md-none" alt="" />
        </div>
        <div class="col-md-12 px-md-0">
          <div class="gears rounded-lg">
            <div class="row mx-2 py-3  py-md-5 hero-card align-items-center rounded-lg ">
              <div class="col-12 text-center col-md-2 ">
                <img src="<?php bloginfo('template_directory');?>/images/icon-gears.svg"
                  class=" img-responsive d-none d-md-block mx-auto" style="max-height: 42px;" alt="..." />
              </div>

              <div class="col">
                <h4 class="title-2 text-center text-md-left text-primary">
                  Комплект HutSharing помогает собственникам
                  и агентам увеличить прибыль, избавиться от нежелательных гостей и защитить имущество.
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- {/* FIRST SCREEN END */}
      {/* CARDS  */} -->
  <section class="container block ">
    <div class="cards cards-slider ">
      <div>
        <div class="row mx-2 mx-md-auto p-1 align-items-center mb-md-5">
          <div class="col-md-6 my-4">
            <img class="img-fluid illustration" src="<?php bloginfo('template_directory');?>/images/illustration-1.svg"
              alt="" />
          </div>
          <div class="col-md-6">
            <h4 class="title-2 mb-4 text-primary text-center text-md-left">
              Электронный доступ
            </h4>
            <p class="text-center text-md-left">
              Предоставляйте удаленно гостевой доступ в квартиру из
              мобильного приложения. Больше не нужно приезжать на встречи с
              гостями, оставлять ключи консьержу или прятать их в подъезде.
            </p>
          </div>
        </div>
      </div>
      <div>
        <div class="row mx-2 mx-md-auto p-1 align-items-center mb-md-5 flex-wrap-reverse">
          <div class="col-md-6 my-4">
            <h4 class="title-2 mb-4 text-primary text-center text-md-left">
              Безопасная сделка
            </h4>
            <p class="text-center text-md-left">
              Вы отправляете гостю ссылку из мобильного приложения. Гость
              оплачивает сумму за бронирование квартиры соглашаясь с
              условиями договора. После оплаты на его время активируется
              доступ в квартиру.
            </p>
          </div>
          <div class="col-md-6">
            <img class="img-fluid illustration" src="<?php bloginfo('template_directory');?>/images/illustration-2.svg"
              alt="" />
          </div>
        </div>
      </div>

      <div>
        <div class="row mx-2 mx-md-auto p-1 align-items-center mb-md-5">
          <div class="col-md-6 my-4">
            <img class="img-fluid illustration" src="<?php bloginfo('template_directory');?>/images/illustration-3.svg"
              alt="" />
          </div>
          <div class="col-md-6">
            <h4 class="title-2 mb-4 text-primary text-center text-md-left">
              Контроль квартиры
            </h4>
            <p class="text-center text-md-left">
              Датчики открытия двери, шума и счетчик посещения подскажут по sms сколько гостей в вашей квартире а так же
              если проходит шумная вечеринка. Опишите инструкцию чем и как пользоваться для самостоятельной ориентации
              гостя.
            </p>
          </div>
        </div>
      </div>
      <div>
        <div class="row mx-2 mx-md-auto p-1 align-items-center mb-md-5 flex-wrap-reverse">
          <div class="col-md-6 my-4">
            <h4 class="title-2 mb-4 text-primary text-center text-md-left">
              Завершение аренды
            </h4>
            <p class="text-center text-md-left">
              Гость завершает аренду в личном кабинете. Вам придет
              мгновенное sms уведомление об успешном съезде гостя. Сервис
              мотивирует гостей оставлять за собой порядок.
            </p>
          </div>
          <div class="col-md-6">
            <img class="img-fluid illustration" src="<?php bloginfo('template_directory');?>/images/illustration-4.svg"
              alt="" />
          </div>
        </div>
      </div>
  </section>
  <!-- {/* CARDS END */} -->
  <div class="container block">
    <section class="block">
      <h2 class="title-2 text-primary">В комплект HUT_BOT входит:</h2>
      <div class="row  flex-wrap-reverse">
        <div class="col-md-8  mt-4 mt-md-5">
          <ul class="list-unstyled kit">
            <li>Контроллер с функцией антивзлома </li>
            <li>Открытие до 2х домофонов </li>
            <li>Электромеханический замок Полис 13М</li>
            <li>Антивор – датчик положения открытия и закрытия двери</li>
            <li>Счетчик посещения</li>
            <li>Датчик шума</li>
            <li>rfid меток 10 шт.</li>
            <li>Провода</li>
            <li>Инструкция по установке</li>
            <li>Монтаж за 3 часа</li>
            <li>Обучение</li>
          </ul>
          <h5 class='font-weight-bold gradient-light p-2'>Комплект HutSharing работает с более 50 электромеханическими
            замками</h5>

        </div>
        <div class="col-6 mx-auto col-md-4">
          <img src="<?php bloginfo('template_directory');?>/images/kitbox.png" alt="" class="img-fluid" />
        </div>
      </div>
    </section>
    <section class=" block remote-card p-2 p-md-5 d-flex flex-column rounded-lg">
      <div class="my-5 col-md-8">
        <h1 class="title-2 text-white mb-4">
          Управляйте арендой квартиры удаленно из мобильного приложения
        </h1>
        <h4 class="title-2">
          Внедрите HUT_BOT в бизнес посуточной аренды и сконцентрируйте свое
          внимание на масштабирование квартир.
        </h4>
      </div>
    </section>

    <!-- {/* TESTIMONIALS */} -->
    <section class="testimonials block">
      <div class="testimonials-container">
        <h1 class="title-1 text-primary ">
          <span class="underline-magic">Посмотрите видео</span>
        </h1>
        <h3 class="title-2 mb-2 font-weight-normal">
          о том как другие пользуются сервисом
        </h3>
        <p class="arrows d-none d-lg-block">
          <img src="<?php bloginfo('template_directory');?>/images/arrow-l.svg" alt="arrow prev"
            class="prevto arrow mr-2" />
          <img src="<?php bloginfo('template_directory');?>/images/arrow-r.svg" alt="arrow next" class="nexto arrow" />
        </p>
        <div class="carousel">
          <div class="">
            <div class="row  flex-wrap-reverse">
              <div class="col-md-5">
                <h5 class="mb-md-3 mt-3 mt-md-4">Артем Соколов</h5>
                <p>
                  – С сервисом hut-bot я сэкономил кучу времени на задачи
                  которые не приносили мне особого удовольствия. Для меня
                  нет разницы встречать гостей лично или удаленно, с данным
                  сервисом квартира защищена, поэтому я сплю спокойно) так
                  же я оптимизировал расходы на персонал, а на выигранную
                  разницу смог вести дела в белую)
                </p>
              </div>
              <div class="col-md-6 offset-md-1">
                <div class="iframe-container">
                  <iframe src="https://www.youtube.com/embed/2ZlopCDt6iU" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="block   ">
      <div class="">
        <h1 class="title-2 mb-3 mb-md-5">
          Регистрируйтесь в личном кабинете
        </h1>
        <div class="row app-preview iphone-slider">
          <div class="col-md-3 col-10">
            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/iphone-1.png" alt="" />
          </div>
          <div class="col-md-3 col-10 mt-5 ">
            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/images/iphone-2.png" alt="" />
          </div>
          <div class="col-md-3 col-10">
            <img class="img-fluid mx-auto" src="<?php bloginfo('template_directory');?>/images/iphone-3.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="pricing block">
      <h2 class="title-2 text-center mb-3 mb-md-5 ">
        Выберете в личном кабинете подходящий тариф:
      </h2>
      <div class="row justify-content-center " style="align-items: stretch;">
        <div class="col-md-10 col-lg-4 col-12 mb-4 mb-lg-auto">
          <div class="card border-warning px-3 py-4 shadow">
            <div class="m-3">
              <h5 class="mb-2 mb-md-4 text-uppercase">
                Минимальная сумма пополнения
              </h5>
              <h3 class="mb-4 text-primary">4990 руб.</h3>

              <ul class="pricing-list mx-auto font-weight-bold">
                <li>Комплекта hut_bot в аренду.</li>
                <li>
                  С вашего баланса списывается по 99 руб.
                  <small>(За каждое успешное заселение гостя удаленно)</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-4 col-12">
          <div class="card border-warning px-3 py-4 shadow">
            <div class="m-3">
              <h5 class="mb-2 mb-md-4 text-uppercase">
                20 ГОСТЕВЫХ ДОСТУПОВ <br />+ 5 УБОРОК
              </h5>
              <h3 class="mb-4 text-primary ">6530 РУБ</h3>

              <ul class=" pricing-list mx-auto font-weight-bold ">
                <li>Комплекта hut_bot в аренду.</li>
                <li>5 влажных уборок по 990 руб.</li>
                <li>20 гостевых доступовпо 79 руб.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <h5 class=" text-center mt-2 mt-md-5">
        После оплаты с вами свяжется наш менеджер для уточнения даты монтажа
      </h5>
    </section>
    <section class="form-section container">
      <div class="row">
        <div class="  col-md-6 col-lg-4 offset-md-1 bg-white p-3 my-3 my-md-5 rounded-lg">
          <h5>Остались вопросы?</h5>
          <h2 class="title-2 text-primary">Оставьте заявку</h2>
          <?php echo do_shortcode( '[contact-form-7 id="5" title="hut-form"]' ); ?>
        </div>
      </div>
    </section>
    <section class="accordion clearfix block qa" id="accordionExample">
      <h2 class="title-1 text-primary mb-3 mb-md-5">
        Ответы на часто задаваемые вопросы.
      </h2>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question1">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa1" aria-expanded="true" aria-controls="qa1">
            Смогу ли я заключать договор с гостем?
          </h5>
        </div>
        <div id="qa1" class="collapse show" aria-labelledby="question1" data-parent="#accordionExample">
          <div class="">
            В системе предусмотрен шаблон договора аренды. Заполнив свои
            данные один раз, вы без проблем сможете отправлять его клиенту.
            Данные о квартире (мебель, техника, прочее), даты и время
            заезда/съезда, количество гостей подтянутся к договору
            автоматически.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question2">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa2" aria-expanded="false" aria-controls="qa2">
            Гости отказываются платить?
          </h5>
        </div>
        <div id="qa2" class="collapse hide" aria-labelledby="question2" data-parent="#accordionExample">
          <div class="">
            Система, в случае подтверждений всех нарушений гостем,
            автоматически спишет денежные средства с его счета.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question3">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa3" aria-expanded="false" aria-controls="qa3">
            Я не могу заселить гостя без встречи, мне нужно посмотреть кто
            заезжает?
          </h5>
        </div>
        <div id="qa3" class="collapse hide" aria-labelledby="question3" data-parent="#accordionExample">
          <div class="">
            Вспомните сколько раз вы отказывали гостю в заселении после того
            как увидели его в живую? Даже если недобросовестный гость
            арендует квартиру, в случае нарушений с hut_bot вы узнаете об
            этом быстрее. Система считывает с какой периодичностью
            открывается дверь, кто заходит и выходит, вы сразу увидите
            подозрения.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question4">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa4" aria-expanded="false" aria-controls="qa4">
            Гости устроили вечеринку?
          </h5>
        </div>
        <div id="qa4" class="collapse hide" aria-labelledby="question4" data-parent="#accordionExample">
          <div class="">
            Счетчик посещения считает, сколько гостей зашло в вашу квартиру.
            Если при заселении вы указали 2 гостей, а система считала 3 или
            8, вам придет sms уведомление, вы как минимум можете созвониться
            с гостей.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question5">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa5" aria-expanded="false" aria-controls="qa5">
            Как я смогу заработать больше денег?
          </h5>
        </div>
        <div id="qa5" class="collapse hide" aria-labelledby="question5" data-parent="#accordionExample">
          <div class="">
            С системой hut_bot вы не тратите деньги на поездки, встречи с
            гостями, восстановление потерянных ключей, ожидания гостей.
            Новые гости перейдут в постоянных так как для них это удобный
            сервис, который экономит их время и дает им возможность
            чувствовать себя более свободным при проживании. Думайте о новых
            объектах, используйте свое время эффективно.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question6">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa6" aria-expanded="false" aria-controls="qa6">
            Что делать после оплаты тарифа?
          </h5>
        </div>
        <div id="qa6" class="collapse hide" aria-labelledby="question6" data-parent="#accordionExample">
          <div class="">
            После оплаты тарифа, с вами свяжется наш менеджер для уточнения
            всех деталей, мы договоримся о дате и времени монтажа системы
            hut_bot на ваш объект.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question7">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa7" aria-expanded="false" aria-controls="qa7">
            Как проходит монтаж оборудования?
          </h5>
        </div>
        <div id="qa7" class="collapse hide" aria-labelledby="question7" data-parent="#accordionExample">
          <div class="">
            Сертифицированный специалист с оборудованием выезжает на ваш
            объект в указанную дату и время. Устанавливается: замок на
            дверь, маленькие датчик посещения в пролет, датчик открытия и
            закрытия на дверь, контроллер в домофон, все механизмы через
            провод подключается к контроллеру, проводов не видно, все
            выглядит аккуратно, работает без потерь связи при электричестве
            и интернете, при потере связи вам придет уведомление. ID
            контроллера вводится при регистрации вашей квартиры в личном
            кабинете.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question8">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa8" aria-expanded="false" aria-controls="qa8">
            Что такое тариф?
          </h5>
        </div>
        <div id="qa8" class="collapse hide" aria-labelledby="question8" data-parent="#accordionExample">
          <div class="">
            Существует несколько тарифных планов, которые делятся на
            количество заселений и квартир, вы выбираете оптимальный для
            себя вариант. Сервис постоянно разрабатывает дополнительные
            тарифы на уборку и маркетинг.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question9">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa9" aria-expanded="false" aria-controls="qa9">
            Что такое заселения?
          </h5>
        </div>
        <div id="qa9" class="collapse hide" aria-labelledby="question9" data-parent="#accordionExample">
          <div class="">
            Вы отправляете гостю ссылку на удаленный доступ, после того как
            гость заехал в квартиру с вашего баланса спишется 1 заселение.
            Когда пакет заселений спишется, система предложит вам его
            продлить.
          </div>
        </div>
      </div>
      <div class="item">
        <div class="bg-light pl-4 py-3 mb-3" id="question10">
          <h5 class="mb-0 question" data-toggle="collapse" data-target="#qa10" aria-expanded="false"
            aria-controls="qa10">
            Чем мы отличаемся от других систем удаленного доступа?
          </h5>
        </div>
        <div id="qa10" class="collapse hide" aria-labelledby="question10" data-parent="#accordionExample">
          <div class="">
            Сервис hutsharing.com создает отраслевой продукт исключительно
            под бизнес аренды квартир, учитывая все тонкости данной сферы в
            одном окне.
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section block">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="title-2 text-primary">Адрес</h2>
          <h5 class="mb-4">
            <span class="font-weight-normal">Казань,</span>
            <br />
            ул.переулок Дорожный, д.3 оф. 208
          </h5>
          <h5 class="mb-4">
            <span class="font-weight-normal">телефон</span>
            <br />
            89872727742 <br />
            Почта info@hutbot.ru
          </h5>
        </div>
        <div class="col-md-6">
          <div id="map"></div>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer();?>