<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wdth,wght@62.5..100,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <title> Aliance production</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499)686-10-14</a>
      <div class="mobile-info">
        <svg class="address-icon" width="24" height="29">
          <use href="img/sprite.svg#address"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к18
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="email-icon" width="24" height="24">
          <use href="img/sprite.svg#email"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email"
          >a.dragunov@tdaliance.ru</a
        >
      </div>
      <!-- /.mobile-info -->
      <div class="network-info">
        <svg class="vk-icon" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
        <a href="#" class="mobile-info-vk"></a>
        <svg class="inst-icon" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg>
        <a href="#" class="mobile-info-inst"></a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.html" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>

      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal"> 
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div class="button header-button" data-toggle="modal">Подробнее о компании</div>
        </div>
        <!-- /.header-content -->

        <!-- Основной блок слайдера -->
        <div class="swiper features-slider">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- Слайды -->
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>
          <!-- кнопки навигации вперед/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>


        <!-- Slider main container -->
<div class="swiper steps-slider">
  <!-- Additional required wrapper -->
  <ol class="swiper-wrapper steps">
    <!-- Slides -->
    <li class="swiper-slide steps-item"><span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить
              значение форм воздействия.
            </p>
            <a href="" class="button-link">Оставь заявку</a>
          </li>
    <li class="swiper-slide steps-item"><span class="steps-num">02</span>
            <h3 class="steps-title">Заключение договора</h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>
    <li class="swiper-slide steps-item"><span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые элементы.
            </p>
          </li>
    <li class="swiper-slide steps-item"><span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о
              возможностях приоритизации разума над эмоциями.
            </p>
          </li>
  </ol>
  

  <!-- If we need navigation buttons -->
  <div class="steps-buttons primary-buttons-wrapper">
    <div class="steps-button-prev primary-button-prev"><svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg></div>
  <div class="steps-button-next primary-button-next"><svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg></div>
  </div>
  <!-- /.steps-button -->


       
      </div>
      <!-- container -->
    </section>
    <section class="section production">
      <div class="container">
         <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content"><h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p></div>
            <!-- /.card-content -->
            <img src="img/автомобильная химия.png" alt="Автомоильная химия" class="card-image">
          </a>
          <a href="#" class="card">
           <div class="card-content"> <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p></div>
            <img src="img/бытовая химия.png" alt="Бытовая химия" class="card-image">
          </a>
           <!-- /.card-content -->
           <a href="#" class="card">
            <div class="card-content"><h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p></div>
            <!-- /.card-content -->
            <img src="img/дезинфицирующие средства.png" alt="Дезинфицирующие средства" class="card-image">
            </a>
          </a>
          <a href="#" class="card">
            <div class="card-content"><h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p></div>
            <!-- /.card-content -->
            <img src="img/пищевые аэрозоли.png" alt="Пищевые аэрозоли" class="card-image">
          </a>
          <a href="#" class="card">
           <div class="card-content"> <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p></div>
           <!-- /.card-content -->
            <img src="img/косметическая продукция.png" alt="Косметическая продукция" class="card-image">
          </a>
          <a href="#" class="card">
            <div class="card-content"><h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p></div>
            <!-- /.card-content -->
            <img src="img/краски аэрозольные.png" alt="Краски аэрозольные" class="card-image">
          </a>
        </div>
      </div>
    </section>
    <section class="section trademark">
      <div class="container">
         <div class="seporator"></div>
        <h2 class="section-title">собственные торговые марки</h2>
        <div class="trademark-cards">
          <div class="trademark-card">
          <svg class="trademark-card-logo">
                <use href="img/sprite.svg#AGTECH"></use>
              </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
        </div>
         <div class="trademark-card">
          <svg class="trademark-card-logo">
                <use href="img/sprite.svg#AP"></use>
              </svg>
          <h3 class="trademark-card-title">Автохимия AP</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
         </div>
        </div>
        <!-- trademark-cards -->
      </div>
      <!-- container -->
        </section>
        <section class="section founder">
          <img src="img/founder.jpg" alt="founder" class="founder-photo">
          <div class="container">
          <div class="founder-conteent-wrapper">
             <div class="founder-content">
             <div class="seporator"></div>
        <h2 class="section-title">Отношение к делу и к клиентам</h2>
        <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.<br><br>
А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
         <a href="#" class="button-link">Подробности о компании</a>
           </div>
          </div>
          <!-- /.founder-conteent-wrapper -->
           <!-- /.founder-content -->
          </div>
          <!-- /.container -->
        </section>
        <section class="section clients">
          <div class="container">
             <div class="seporator"></div>
           <div class="clients-wrapper">
            <div class="clients-content"> 
        <h2 class="section-title">
          Производим аэрозольную продукцию для разных сфер</h2> 
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#him"></use>
              </svg>
            Химические производства</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#car"></use>
              </svg>Автомойки</li>
              <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#eat"></use>
              </svg>Пищевая продукция</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#brush"></use>
              </svg>Лаки и краски</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>Косметические средства</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#car-cosmetic"></use>
              </svg>Автомобильная косметика</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#shirt"></use>
              </svg>Косметика по уходу за одеждой</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#boots"></use>
              </svg>Косметика по уходу за обувью</li>
          
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#bricks"></use>
              </svg>Строительные материалы</li>
          <li class="clents-list-item">
            <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#more"></use>
              </svg>И многих других</li>
        </ul>
            </div>
            <!-- client-content -->
            <div class="clients-logo-list">
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
<a href="#" class="client-logo-item">
  <img src="img/client.png" alt="" class="clients-logo">
</a>
            </div>
           </div>
           <!-- contents-wrapper -->
          </div>
          <!-- container -->
        </section>
        <section class="section blog">
          <div class="container">
            <div class="seporator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
<div class="swiper blog-slider">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
   
    <a href="#" class="swiper-slide blog-card">
      <img src="img/blog-card.jpg" alt="" class="blog-card-image">
      <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
     <a href="#" class="swiper-slide blog-card">
      <img src="img/blog-post.jpg" alt="" class="blog-card-image">
      <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
      <p class="blog-card-text">Сложно сказать, почему жизнь прекрасна
Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
    </a>
    <a href="#" class="swiper-slide blog-card">
      <img src="img/blog-card.jpg" alt="" class="blog-card-image">
      <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
      <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
    </a>
    </div>

  <div class="blog-slider-footer">
    <a href="#" class="button-link">Весь блог</a>
    <div class="blog-buttons primary-buttons-wrapper">
    <div class="blog-button-prev primary-button-prev"><svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
  <div class="blog-button-next primary-button-next"><svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
  <!-- /.blog-button -->
  </div>
      </div>
     </div>
     <!-- container -->
    </section>
    <section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="#" class="cta-form">
            <h2 class="secton-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input" placeholder=" ">
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input id="user-phone" type="tel" class="input" placeholder=" ">
                <label class="input-group-label" for="user-phone">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
                <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
              </div>
            </div>
            <!-- сеф-form-footer -->
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <a href="tel:74996861014" class="footer-phone">+7 (499) 686-10-14</a>
        <div class="footer-info">
        <svg class="address-icon" width="24" height="29">
          <use href="img/sprite.svg#address"></use>
        </svg>
        <address class="footer-info-address">
          г. Мосвка, Холодильный пер. 4к18
        </address>
      </div>
      <!-- /.footer-info -->
      <div class="footer-info">
        <svg class="email-icon" width="24" height="24">
          <use href="img/sprite.svg#email"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email"
          >a.dragunov@tdaliance.ru</a
        >
      </div>
      <!-- /.footer-info -->
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg></a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg></a>
      </div>
      <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>
      <hr color="#ebebf0" class="footer-seporator">
      <div class="conainer">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
           <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
            
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-mebu-link-bold">О компании</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-mebu-link-bold">Новости</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-mebu-link-bold">Контакты</a>
              </li>
            </ul> 
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.conainer -->
      <hr color="#ebebf0" class="footer-seporator">
      <div class="container">
      <div class="footer-wrapper">
          <div class="footer-legel">
          <p class="footer-copyright">
            &copy; <?php echo date('d.m.y')?> «Aliance Production». Все права защищены.
          </p>
          <a href="#" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- footer-legal -->
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <svg width="52" height="11">
          <use href="img/sprite.svg#ruso"></use>
        </svg>
        </div>
        <!-- /.footer-author -->
      </div>
      <!-- /.footer-wrapper -->
      </div>
    </footer>
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
         <svg class="close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg> 
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
          <form action="#" class="modal-form">
             <div class="input-group-wrapper input-group-vertical">
              <div class="input-group modal-input-group">
                <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
                <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group modal-input-group">
                <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
                <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="modal-form-footer">
              <button type="submit" class="button modal-form-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
                <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
              </div>
            </div>
            <!-- сta-form-footer -->
          </form>
        </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
