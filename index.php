<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="manifest" href="manifest.json">
  <meta name="application-name" content="F&S Digital">
  <meta name="apple-mobile-web-app-title" content="F&S Digital">
  <meta name="theme-color" content="#5e2ced">
  <meta name="msapplication-navbutton-color" content="#5e2ced">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Digital-агентство F&S">
  <meta property="og:title" content="Digital-агентство F&S - помогаем бизнесу масштабироваться">
  <meta property="og:description" content="Разработка и сопровождение сайтов в Краснодаре и по всей территории РФ">
  <meta property="og:url" content="https://fsmalcompany.ru/">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:image" content="https://fsmalcompany.ru/images/og-image.jpg">
  <meta property="og:image:width" content="968">
  <meta property="og:image:height" content="504">
  <meta name="description" content="Веб-студия F&S - разработка и сопровождение сайтов в Краснодаре и по всей территории РФ" />
  <meta name="keywords" content="увеличить прибыль, раскрутить бизнес, бизнес в интернете, создать сайт, веб студия, сопровождение сайта, разработка сайта, сайт, интернет магазин, лэндинг, landing page, продвинуть сайт, продвинуть в топ, сайт для компании, сайт визитка, настроить рекламу, заказать рекламу" />
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Digital-агентство F&S - помогаем бизнесу масштабироваться</title>
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="32x32" href="images/logo32x32.png">
  <link rel="apple-touch-icon" type="image/png" sizes="96x96" href="images/logo96x96.png">
  <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="images/logo192x192.png">
  <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="images/logo.png">
  <link rel="preload" href="css/preloader.min.css" as="style" />
  <link rel="preload" href="css/style.min.css" as="style" />
  <link rel="preload" href="css/resize.css" as="style" />
  <link rel="preload" href="css/animate.min.css" as="style" />
  <link rel="prefetch" href="css/pages.css" as="style" />
  <link rel="stylesheet" type="text/css" href="css/preloader.min.css" />

  <script>
      navigator.serviceWorker && navigator.serviceWorker.register('js/sw.js').then(function(registration) {
          console.log('Excellent, registered with scope: ', registration.scope);
      });
  </script>

<!--
Oh, why are you here -in my head-?
Go away, you won't find anything unusual here!
-->
</head>
<body>
  <div class="preloader preloader_active">
    <div class="preloader__inner">
      <div class="preloader-line preloader-line_normal"></div>
      <div class="preloader-line preloader-line_big"></div>
      <div class="preloader-line preloader-line_small"></div>
    </div>
  </div>

  <header class="container">
    <div class="container__header">
      <div id="js-fixed" class="container zIndex-9">
        <div class="container__top">
          <div class="logo inline-block">
            <h1 class="caption caption__header caption_h1 family-Condensed">Digital-агентство F&S</h1>
            <h3 class="caption caption_h3 family-Yanone">Create, Design, Enjoy!</h3>
          </div>
          <ul class="menu inline-block">
            <li><a href="/" class="link menu-link menu-link_active">Главная</a></li>
            <li class="menu__dropdown">
              <a href="javascript:void(0);" class="link menu-link">Услуги</a>
              <ul class="menu submenu zIndex-9">
                <li><a href="pages/services/sites/" class="link menu-link">Сайты</a></li>
                <li><a href="pages/services/other/" class="link menu-link">Продвижение и сопровождение</a></li>
                <li><a href="pages/services/other/" class="link menu-link">Внедрение CRM</a></li>
              </ul>
            </li>
            <li><a href="pages/portfolio/" class="link menu-link">Портфолио</a></li>
            <!--<li><a href="#" class="link menu-link">Блог</a></li>-->
            <li><a href="pages/contacts/" class="link menu-link">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="container zIndex-1">
        <div class="container__preview-block">
          <div class="container preview-block__left">
            <h1 class="caption caption__preview caption_h1">Digital-агентство F&S</h1>
            <h1 class="caption caption__preview caption_h1">Наша работа - Ваша прибыль</h1>
            <p class="text text__preview">
              F&S Agency - это команда профессионалов, знающая, как заставить Интернет работать на Ваш бизнес.
              Мы поможем создать инструмент, который увеличит поток клиентов и масштабирует Ваш бизнес.
              <!--С нашим новым подходом к разработке сайтов Ваш бизнес уже через две недели ощутит прирост количества клиентов минимум на 40%. Вести бизнес в интернете стало проще. Попробуйте и Вы!-->
            </p>
            <a href="#order" class="button">Получить клиентов!</a>
          </div>
          <div class="container preview-block__right" id="parallax">
            <picture>
              <source srcset="images/rocket.webp" type="image/webp">
              <source srcset="images/rocket.png" type="image/png">
              <img src="images/rocket.png" class="image__rocket" id="rocket" alt="Создание и продвижение сайтов | Digital-агентство F&S" />
            </picture>
            <img src="images/cloudes.png" class="image__cloudes" id="cloudes" />
            <img src="images/notebook.png" class="image__notebook" id="notebook" />
          </div>
          <div class="container preview-block__right-mobile">
            <picture>
              <source srcset="images/preview-image.webp" type="image/webp">
              <source srcset="images/preview-image.png" type="image/png">
              <img src="images/preview-image.png" class="image image__preview" alt="Разработка сайта в веб-студии F&S" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="container__services">
      <h1 class="caption caption__services caption_h1 wow fadeIn">Разрабатываем качественные сайты</h1>
      <p class="text alignCenter wow fadeIn">
        Наша компания специализируется на разработке качественных типовых интернет-решений для различных сфер бизнеса. Мы используем только современные технологии и поможем Вам быстро и с минимальными вложениями начать бизнес в Интернете. Заказывайте сайт в нашей веб-студии!
      </p>
      <div class="services">
        <div class="service-block service-block__margin wow fadeInLeft">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-group icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Команда профессионалов</h1>
            <p class="text">
              Нет необходимости нанимать специалистов в штат. Доверяясь нам, Вы получаете целую команду профессионалов
            </p>
          </div>
        </div>
        <div class="service-block service-block__margin wow fadeIn">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-suitcase icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Надежность</h1>
            <p class="text">
              В своем распоряжении мы имеем собственные сервера для тестирования и резервного копирования Ваших проектов
            </p>
          </div>
        </div>
        <div class="service-block service-block__margin wow fadeInRight">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-lock icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Безопасность</h1>
            <p class="text">
              Мы гарантируем безопасность Ваших проектов. К каждому сайту мы подключаем SSL и настраиваем Cloudflare для обеспечения безопасности и производительности
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="service__button wow fadeIn">
          <a href="pages/contacts/" class="button button_lightBlue">Узнать больше</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container container_lightBlue">
    <div class="container__problems">
      <div class="container problems__image wow slideInLeft">
        <picture>
          <source srcset="images/problem-image.webp" type="image/webp">
          <source srcset="images/problem-image.png" type="image/png">
          <img src="images/problem-image.png" class="image image__problems" alt="Решим проблему поиска клиентов в интернете" />
        </picture>
      </div>
      <div class="container problems__text wow slideInRight">
        <h1 class="caption caption_h1">Наша цель - решить задачу клиента</h1>
        <p class="text">
          Цель выхода бизнеса в интернет - охватить как можно больше аудитории и получить дополнительных клиентов. Заказывая разработку сайта в нашей веб-студии, Вы получаете мощный и надежный инструмент для продвижения компании в Интернете.
          <br>
          <ul class="problems__list">
            <li class="problems__li"><span class="text problems__span">Привлечение дополнительных клиентов</span></li>
            <li class="problems__li"><span class="text problems__span">Увеличение прибыльности бизнеса</span></li>
            <li class="problems__li"><span class="text problems__span">Укрепление имиджа компании</span></li>
            <li class="problems__li"><span class="text problems__span">Автоматизация работы</span></li>
          </ul>
        </p>
      </div>
    </div>
  </div>

  <div class="container container_promo">
    <div id="particles-js"></div>
    <div class="promo-block wow fadeIn">
      <h1 class="caption caption_h1 caption__promo alignCenter zIndex-9">Решите проблему с поиском клиентов прямо сейчас!</h1>
      <h3 class="caption caption_h3 text__promo alignCenter zIndex-9">Закажите продвижение сайта и рекламу в веб-студии F&S</h3>
      <div class="promo__button alignCenter zIndex-9">
        <a href="#order" class="button button_border">Получить больше клиентов</a>
      </div>
    </div>
  </div>

  <div class="container alignCenter">
    <div class="container__work-process wow slideInUp">
      <h1 class="caption caption_h1 caption__steps">Как мы работаем?</h1>
      <div class="container">
        <div class="container__tabs alignCenter">
          <div class="link__tabs link__tabs_active" tab=0>
            <div class="steps__image">
              <div class="steps__image-inner steps__image-inner_active">
                <i class="fa fa-binoculars icon icon__steps icon__steps_active"></i>
              </div>
            </div>
            <h3 class="caption caption_h3 caption__step">Подготовка</h3>
          </div>
          <div class="link__tabs" tab=1>
            <div class="steps__image">
              <div class="steps__image-inner">
                <i class="fa fa-paint-brush icon icon__steps"></i>
              </div>
            </div>
            <h3 class="caption caption_h3 caption__step">Дизайн</h3>
          </div>
          <div class="link__tabs" tab=2>
            <div class="steps__image">
              <div class="steps__image-inner">
                <i class="fa fa-code icon icon__steps"></i>
              </div>
            </div>
            <h3 class="caption caption_h3 caption__step">Разработка</h3>
          </div>
          <div class="link__tabs" tab=3>
            <div class="steps__image">
              <div class="steps__image-inner">
                <i class="fa fa-terminal icon icon__steps"></i>
              </div>
            </div>
            <h3 class="caption caption_h3 caption__step">Тестирование</h3>
          </div>
          <div class="link__tabs" tab=4>
            <div class="steps__image">
              <div class="steps__image-inner">
                <i class="fa fa-rocket icon icon__steps"></i>
              </div>
            </div>
            <h3 class="caption caption_h3 caption__step">Запуск</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="tab__text tab_active">
          <div class="tab__image-block">
            <img src="images/step-1.png" class="image tab__image" alt="Предпроектная подготовка в веб-студии F&S" />
          </div>
          <div class="tab__text-block">
            <h1 class="caption caption_h1 caption__tab">Предпроектная подготовка</h1>
            <p class="text">
              Ознакомление с проектом, уточнение целей и задач.<br>
              Определение и анализ целевой аудитории. Разработка и утверждение окончательного ТЗ.<br>
              <ul class="problems__list">
                <li class="problems__li"><span class="text problems__span">Ознакамливаемся с Вашими требованиями</span></li>
                <li class="problems__li"><span class="text problems__span">Ставим цели и задачи</span></li>
                <li class="problems__li"><span class="text problems__span">Составляем план разработки</span></li>
                <li class="problems__li"><span class="text problems__span">Утверждаем ТЗ</span></li>
              </ul>
            </p>
          </div>
        </div>
        <div class="tab__text">
          <div class="tab__text-block">
            <h1 class="caption caption_h1 caption__tab">Разработка дизайна</h1>
            <p class="text">
              Разработка основной графической концепции дизайна сайта.<br>
              Создание графических шаблонов страниц сайта.<br>
              <ul class="problems__list">
                <li class="problems__li"><span class="text problems__span">Предложим до двух вариантов дизайна</span></li>
                <li class="problems__li"><span class="text problems__span">Проработка дизайна главной страницы сайта</span></li>
                <li class="problems__li"><span class="text problems__span">Проработка дизайна дополнительных страниц</span></li>
                <li class="problems__li"><span class="text problems__span">Утверждаем дизайн сайта</span></li>
              </ul>
            </p>
          </div>
          <div class="tab__image-block">
            <img src="images/step-2.png" class="image tab__image" alt="Разработка дизайна в веб-студии F&S" />
          </div>
        </div>
        <div class="tab__text">
          <div class="tab__image-block">
            <img src="images/step-3.png" class="image tab__image" alt="Верстка сайта в веб-студии F&S" />
          </div>
          <div class="tab__text-block">
            <h1 class="caption caption_h1 caption__tab">Верстка и программирование</h1>
            <p class="text">
              Верстка страниц сайта.<br>
              Интеграция с CMS, доработка функционала, настройка сервера.<br>
              <ul class="problems__list">
                <li class="problems__li"><span class="text problems__span">Сверстаем сайт по утвержденному шаблону</span></li>
                <li class="problems__li"><span class="text problems__span">Напишем необходимые дополнительные модули</span></li>
                <li class="problems__li"><span class="text problems__span">Проведем настройку сервера для сайта</span></li>
                <li class="problems__li"><span class="text problems__span">Используем HTML5, CSS3, БЭМ, JavaScript, PHP5-7</span></li>
                <li class="problems__li"><span class="text problems__span">Подключим CMS</span></li>
                <li class="problems__li"><span class="text problems__span">Утверждаем верстку</span></li>
              </ul>
            </p>
          </div>
        </div>
        <div class="tab__text">
          <div class="tab__text-block">
            <h1 class="caption caption_h1 caption__tab">Проведение тестирования перед запуском</h1>
            <p class="text">
              Тестирование сайта на наличие ошибок.<br>
              Проверка корректного отображения сайта на различных устройствах, разрешениях и браузерах.<br>
              <ul class="problems__list">
                <li class="problems__li"><span class="text problems__span">Проверим корректное отображение сайта на разных разрешениях</span></li>
                <li class="problems__li"><span class="text problems__span">Выявим и исправим ошибки на сайте</span></li>
              </ul>
            </p>
          </div>
          <div class="tab__image-block">
            <img src="images/step-4.png" class="image tab__image" alt="Тестирование сайта в веб-студии F&S" />
          </div>
        </div>
        <div class="tab__text">
          <div class="tab__image-block">
            <img src="images/step-5.png" class="image tab__image" alt="Запуск сайта в веб-студии F&S" />
          </div>
          <div class="tab__text-block">
            <h1 class="caption caption_h1 caption__tab">Запуск сайта</h1>
            <p class="text">
              Размещение проекта в сети Интернет. Проведение финального тестирования.<br>
              Продвижение сайта в поисковых системах и каталогах.<br>
              <ul class="problems__list">
                <li class="problems__li"><span class="text problems__span">Подключим модули для сбора статистики</span></li>
                <li class="problems__li"><span class="text problems__span">Окончательное утверждение выполненной работы</span></li>
                <li class="problems__li"><span class="text problems__span">Вы оплачиваете нашу работу</span></li>
                <li class="problems__li"><span class="text problems__span">Дальнейшее сопровождение и продвижение (опционально)</span></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container alignCenter">
    <div class="container__prices">
      <h1 class="caption caption_h1 caption__prices alignCenter wow fadeIn">Стоимость разработки сайтов</h1>
      <div class="prices">
        <div class="service-block service-block__margin wow fadeInLeft">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-plane icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Landing page</h1>
            <p class="text cost">
              От 4 750 рублей
            </p>
            <ul class="list">
              <li class="list-elem capability__li">Дизайн на выбор</li>
              <li class="list-elem capability__li">Адаптивный дизайн</li>
              <li class="list-elem capability__li">Форма обратного звонка</li>
              <li class="list-elem capability__li">Подключение CMS</li>
              <li class="list-elem capability__li">Регистрация сайта в поисковых системах</li>
              <li class="list-elem capability__li">Настройка Яндекс.Метрики и Google Analitycs</li>
              <li class="list-elem capability__li">-</li>
            </ul>
            <div class="container alignCenter">
              <div class="cost__button">
                <a href="#order" class="button cost-block__button add-to-cart" site-type="Landing page">Заказать</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-block service-block__margin wow fadeIn">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-clipboard icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Сайт компании</h1>
            <p class="text cost">
              От 8 250 рублей
            </p>
            <ul class="list">
              <li class="list-elem capability__li">Дизайн на выбор</li>
              <li class="list-elem capability__li">Адаптивный дизайн</li>
              <li class="list-elem capability__li">До 5 страниц</li>
              <li class="list-elem capability__li">Подключение CMS</li>
              <li class="list-elem capability__li">Регистрация сайта в поисковых системах</li>
              <li class="list-elem capability__li">Настройка Яндекс.Метрики и Google Analitycs</li>
              <li class="list-elem capability__li">-</li>
            </ul>
            <div class="container alignCenter">
              <div class="cost__button">
                <a href="#order" class="button cost-block__button add-to-cart" site-type="Сайт компании">Заказать</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-block service-block__margin wow fadeInRight">
          <div class="service__inner alignCenter">
            <div class="services__image">
              <div class="services__image-inner">
                <i class="fa fa-cart-plus icon"></i>
              </div>
            </div>
            <h1 class="caption caption_h1">Интернет-магазин</h1>
            <p class="text cost">
              От 10 650 рублей
            </p>
            <ul class="list list__cost">
              <li class="list-elem capability__li">Дизайн на выбор</li>
              <li class="list-elem capability__li">Адаптивный дизайн</li>
              <li class="list-elem capability__li">Каталог товаров</li>
              <li class="list-elem capability__li">Настройка платежных систем</li>
              <li class="list-elem capability__li">Подключение CMS</li>
              <li class="list-elem capability__li">Регистрация сайта в поисковых системах</li>
              <li class="list-elem capability__li">Настройка Яндекс.Метрики и Google Analitycs</li>
            </ul>
            <div class="container alignCenter">
              <div class="cost__button">
                <a href="#order" class="button cost-block__button add-to-cart" site-type="Интернет-магазин">Заказать</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container alignCenter">
    <div class="container__portfolio wow fadeIn">
      <h1 class="caption caption_h1 portfolio__caption">Портфолио</h1>
      <div class="container">
        <div class="portfolio__images">
          <div class="portfolio__image image-1" img-num=0>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-2" img-num=1>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-3" img-num=2>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-4" img-num=3>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
        </div>
        <div class="portfolio__images">
          <div class="portfolio__image image-5" img-num=4>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-6" img-num=5>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-7" img-num=6>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="portfolio__image image-8" img-num=7>
            <a href="/pages/privacy/" class="link">
              <div class="portfolio-img">
                  <div class="portfolio-img__inner">
                    <div class="portfolio-img__button">
                      <span class="button link__portfolio">Смотреть</span>
                    </div>
                  </div>
              </div>
            </a>
          </div>
        </div>
        <div class="container">
          <div class="portfolio__button alignCenter">
            <a href="#" class="button button_portfolio">Смотреть портфолио</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="js-contactForm">
    <div class="container__form">
      <h1 class="caption caption_h1 caption__contact alignCenter wow fadeIn">Закажите разрабоку сайта прямо сейчас!</h1>
      <p class="text alignCenter wow fadeIn">
        Хотите создать сайт? Обращайтесь в нашу веб-студию и мы с радостью разработаем для Вас сайт. Вы так же можете задать нам интересующие Вас вопросы, воспользовавшись контактной формой ниже.
      </p>
      <div class="container">
        <div class="contact-block__inner">
          <div class="contact__form wow slideInLeft">
            <form class="form form__inner" id="js-form" method="post">
              <div class="container input__NamePhone">
                <input type="text" pattern="[а-яА-Яa-zA-Z]+" class="input contact__input contact__input_name family-Condensed" name="name" placeholder="Ваше имя:" maxlength="20" required>
                <input type="text" class="input contact__input contact__input_phone family-Condensed" name="phone" placeholder="+7 (___) ___-__-__" required>
              </div>
              <div class="container input__email">
                <input type="email" class="input contact__input contact__input_email family-Condensed" name="email" placeholder="my@email.com" maxlength="50" required>
              </div>
              <div class="container input__textarea">
                <textarea class="input contact__input contact__input_textarea family-Condensed" placeholder="Ваше сообщение:" name="user-text" maxlength="500"></textarea>
              </div>
              <div class="rule__agree">
                <input type="checkbox" class="checkbox" checked disabled> <span class="text text__privacy">Я согласен c <a href="pages/privacy/" target="_blank" class="link link_blue">политикой в отношении обработки персональных данных</a></span>
              </div>
              <input type="hidden" name="order-from" value="fsmalcompany">
              <input type="hidden" name="site-type" id="js-siteType" value="Другое">
              <button type="submit" class="button contact__button button_form">Оставить заявку</button>
            </form>
          </div>
          <div class="contact__contacts wow slideInRight">
            <div class="container contacts__phone">
              <p class="text noMargin">
                <span class="fa fa-phone contacts__icon"></span><span class="phone">Телефон:</span><br>
                <span class="text contacts__text">8800 700-98-21</span>
              </p>
            </div>
            <div class="container contacts__email">
              <p class="text noMargin">
                <span class="fa fa-envelope contacts__icon"></span><span class="email">Email:</span><br>
                <span class="text contacts__text">fsmalcompany@mail.ru</span>
              </p>
            </div>
            <div class="container contacts__address">
              <p class="text noMargin">
                <span class="fa fa-map-marker contacts__icon"></span><span class="address">Адрес:</span><br>
                <span class="text contacts__text">г. Краснодар,</span><br>
                <span class="text contacts__text">ул. Красная 154</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mobile-menu zIndex-9">
    <ul class="list mobile-menu__items">
      <li class="mobile-menu__item">
        <a href="/" class="link mobile-menu__a mobile-menu_active">
          <div class="mobile-menu__image">
            <i class="fa fa-binoculars icon__mobile-menu"></i>
          </div>
          <p class="mobile-menu__link">Главная</p>
        </a>
      </li>
      <li class="mobile-menu__item">
        <a href="pages/services/sites/" class="link mobile-menu__a">
          <div class="mobile-menu__image">
            <i class="fa fa-code icon__mobile-menu"></i>
          </div>
          <p class="mobile-menu__link">Услуги</p>
        </a>
      </li>
      <li class="mobile-menu__item">
        <a href="/" class="link mobile-menu__a">
          <div class="mobile-menu__image">
            <i class="fa fa-clipboard icon__mobile-menu"></i>
          </div>
          <p class="mobile-menu__link">Портфолио</p>
        </a>
      </li>
      <li class="mobile-menu__item">
        <a href="pages/contacts/" class="link mobile-menu__a">
          <div class="mobile-menu__image">
            <i class="fa fa-cart-plus icon__mobile-menu"></i>
          </div>
          <p class="mobile-menu__link">Контакты</p>
        </a>
      </li>
    </ul>
  </div>

  <footer class="container">
    <div class="footer__inner">
      <p class="text footer__text family-Condensed">
        &copy; <span id="js-date" data-dateFormat='0'></span>. ООО "ФЭНДСМАЛКОМПАНИ<sup>&reg;</sup> ЛТД"
      </p>
    </div>
  </footer>

  <div class="go-top zIndex-9">
    <span class="fa fa-arrow-circle-up arrowToTop"></span>
  </div>

  <link rel="stylesheet" href="css/style.min.css" />
  <link rel="stylesheet" href="css/resize.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
  <script src="https://fsmalcompany.ru/js/jquery-1.12.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/script.js"></script>
  <script src="js/particles.js"></script>

  <!--Use fa fa-* class-->
</body>
</html>

<!--v0.2.5-dev-withoutAri-->
