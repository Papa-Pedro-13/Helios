<? require_once "header.php" ?>
<section class="main" style="background-image: url('./images/main-bg.svg')">
  <div class="container">
    <div class="main__inner">
      <div class="main__uppertitle">
        Профессиональное бухгалтерское обслуживание предпринимателей
        и малого бизнеса
      </div>
      <h1 class="main-title">
        Вы занимаетесь бизнесом, мы — бухучетом!
      </h1>
      <div class="main__subtitle" id="typing">
      </div>
      <div class="main__rate">
        <div class="main__rate-title">
          Гибкие тарифы, выберите ваш вариант:
        </div>
        <a href="#" class="main__rate-link">
          ООО – Общество с ограниченной ответственностью
        </a>
        <a href="#" class="main__rate-link">
          ИП – Индивидуальный предприниматель
        </a>
      </div>
    </div>
  </div>
  <div class="big-form">
    <div class="container">
      <div class="big-form__inner">
        <div class="big-form-title--p">
          Оставить заявку
        </div>
        <div class="big-form-step--p">
          Оставте свой номер и за один звонок мы рассчитаем тариф, который подойдёт именно вашему бизнесу
        </div>
        <div class="big-form-close" id="big-form-close-m">
          <div class="big-form-close-line"></div>
          <div class="big-form-close-line"></div>
        </div>
        <h2 class="title">Профессиональное бухгалтерское обслуживание предпринимателей и малого бизнеса</h2>
        <form action="https://helios1c.ru/mail.php/" method="POST" class="contacts__form form" id="myForm">
          <div class="big-form-title">
            Оставить заявку
          </div>
          <div class="big-form-step">
            Оставте свой номер и за один звонок мы рассчитаем тариф, который подойдёт именно вашему бизнесу
          </div>
          <input type="text" id="phone-input" placeholder="Ваш телефон" name="tel">
          <div class="num__block">
            <div class="num__block-item" data-num="1">1</div>
            <div class="num__block-item" data-num="2">2</div>
            <div class="num__block-item" data-num="3">3</div>
            <div class="num__block-item" data-num="4">4</div>
            <div class="num__block-item" data-num="5">5</div>
            <div class="num__block-item" data-num="6">6</div>
            <div class="num__block-item" data-num="7">7</div>
            <div class="num__block-item" data-num="8">8</div>
            <div class="num__block-item" data-num="9">9</div>
            <div class="num__block-item" data-num="+">+</div>
            <div class="num__block-item" data-num="0">0</div>
            <div class="num__block-item">
              <img src="./images/ico-del.svg" alt="">
            </div>
          </div>
          <div class="form-policy">
            <input type="checkbox" id="policy" name="checkbox">
            <label for="policy">Принимаю условия</label>
            <a href="./policy.php">политики конфиденциальности</a>
          </div>
          <div class="big-form-close" id="big-form-close-desk">
            <div class="big-form-close-line"></div>
            <div class="big-form-close-line"></div>
          </div>
          <button type="submit" class="big-form-btn">
            Рассчитать
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="advantages">
  <div class="container">
    <div class="advantages__inner">
      <div class="advantages__item advantages__item--1">
        Работаем
        с 2010 года
      </div>
      <div class="advantages__item advantages__item--2">
        90% клиентов приходят по рекомендации
      </div>
      <div class="advantages__item advantages__item--3">
        200+ довольных
        клиентов
      </div>
      <div class="advantages__item advantages__item--4">
        Экономия в 2 раза по сравнению со штатной командой
      </div>
    </div>
  </div>
</section>
<section class="services" id="services">
  <div class="container">
    <h2 class="title">
      Услуги
    </h2>
    <div class="services__inner">
      <div class="services__item">
        <div class="services__item-number">01</div>
        <div class="services__item-headline">
          Бухгалтерское обслуживание: от восстановления учёта до налоговой оптимизации
        </div>
        <a class="services__item-btn" href="./booker.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">02</div>
        <div class="services__item-headline">
          Подключаем облачную 1С (Scloud, 1CFresh)
        </div>
        <a class="services__item-btn" href="./1c-cloud.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">03</div>
        <div class="services__item-headline">
          Подключение 1С «Отчётность»
        </div>
        <a class="services__item-btn" href="./reporting.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">04</div>
        <div class="services__item-headline">
          Регистрация ИП и ООО
        </div>
        <a class="services__item-btn" href="./registration.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">05</div>
        <div class="services__item-headline">
          Продажа и регистрирация онлайн-касс, ОФД
        </div>
        <a class="services__item-btn" href="./cashbox.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">06</div>
        <div class="services__item-headline">
          Выпуск электронных подписей, ЭЦП
        </div>
        <a class="services__item-btn" href="./signature.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">07</div>
        <div class="services__item-headline">
          Юридические услуги
        </div>
        <a class="services__item-btn" href="./lawyer.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">08</div>
        <div class="services__item-headline">
          Онлайн отчётность «Астрал Отчёт 5.0»
        </div>
        <a class="services__item-btn" href="./Astral.php">
          Подробнее
        </a>
      </div>
      <div class="services__item">
        <div class="services__item-number">09</div>
        <div class="services__item-headline">
          Оформление сертификатов
          и регистрация декларации
          о соответствии
        </div>
        <a class="services__item-btn" href="./certificate.php">
          Подробнее
        </a>
      </div>
    </div>
  </div>
</section>
<section class="outsourcing">
  <div class="container">
    <div class="outsourcing__top">
      <h2 class="title">
        Как работает аутсорсинг
      </h2>
      <p class="outsourcing__subtitle-des">
        HELIOS заменит вам бухгалтера, юриста, кадровика, налогового консультанта и личного ассистента
      </p>
    </div>
    <video id="myPlayer" preload="auto" src="./videos/outsource.mp4" class="outsourcing__video bg video" data-setup='{}'>

    </video>
    <p class="outsourcing__subtitle">
      HELIOS заменит вам бухгалтера, юриста, кадровика, налогового консультанта и личного ассистента
    </p>
  </div>
</section>
<section class="partners" id="clients">
  <div class="container">
    <div class="partners__inner">
      <div class="partners__item">
        <h2 class="title">
          Партнёры
        </h2>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/alfa-bank.webp" type="image/webp">
          <source srcset="" data-srcset="./images/alfa-bank.png" type="image/png">
          <img class="partners__img" data-src="./images/alfa-bank.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/sber.webp" type="image/webp">
          <source srcset="" data-srcset="./images/sber.png" type="image/png">
          <img class="partners__img" data-src="./images/sber.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/tinkoff.webp" type="image/webp">
          <source srcset="" data-srcset="./images/tinkoff.png" type="image/png">
          <img class="partners__img" data-src="./images/tinkoff.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/open-bank.webp" type="image/webp">
          <source srcset="" data-srcset="./images/open-bank.png" type="image/png">
          <img class="partners__img" data-src="./images/open-bank.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/dot-bank.webp" type="image/webp">
          <source srcset="" data-srcset="./images/dot-bank.png" type="image/png">
          <img class="partners__img" data-src="./images/dot-bank.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/1c.webp" type="image/webp">
          <source srcset="" data-srcset="./images/1c.png" type="image/png">
          <img class="partners__img" data-src="./images/1c.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/astral.webp" type="image/webp">
          <source srcset="" data-srcset="./images/astral.png" type="image/png">
          <img class="partners__img" data-src="./images/astral.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <h2 class="title">
          Клиенты
        </h2>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/yandex-t.webp" type="image/webp">
          <source srcset="" data-srcset="./images/yandex-t.png" type="image/png">
          <img class="partners__img" data-src="./images/yandex-t.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/motorest.webp" type="image/webp">
          <source srcset="" data-srcset="./images/motorest.png" type="image/png">
          <img class="partners__img" data-src="./images/motorest.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/citymobile.webp" type="image/webp">
          <source srcset="" data-srcset="./images/citymobile.png" type="image/png">
          <img class="partners__img" data-src="./images/citymobile.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/GetTaxi.webp" type="image/webp">
          <source srcset="" data-srcset="./images/GetTaxi.png" type="image/png">
          <img class="partners__img" data-src="./images/GetTaxi.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/iShop-center.webp" type="image/webp">
          <source srcset="" data-srcset="./images/iShop-center.png" type="image/png">
          <img class="partners__img" data-src="./images/iShop-center.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/Ekamant.webp" type="image/webp">
          <source srcset="" data-srcset="./images/Ekamant.png" type="image/png">
          <img class="partners__img" data-src="./images/Ekamant.png" alt="">
        </picture>
      </div>
      <div class="partners__item">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/Fit-Service.webp" type="image/webp">
          <source srcset="" data-srcset="./images/Fit-Service.png" type="image/png">
          <img class="partners__img" data-src="./images/Fit-Service.png" alt="">
        </picture>
      </div>
    </div>
  </div>
</section>


<section class="recall">
  <div class="container">
    <h2 class="title">
      Кейсы
    </h2>
    <div class="recall__inner">
      <div class="recall__item">
        <div class="recall__item-text">
          Клиент обратился с такой проблемой: компания готовится на продажу, есть задолженности по налогам за
          прошлые периоды, нет действующего расчетного счета, а покупатель не хочет покупать компанию с долгами.
          Подключили к электронной отчётности, сдали недостающие декларации, погасили со своего расчетного счета
          задолженности перед налоговой за компанию клиента, предоставили справку об отсутствии задолженности.
          Клиент смог без проблем продать свою компанию.
          <div class="read-more">Читать далее</div>
        </div>

        <div class="recall__item-name">
          Евгений Островский
        </div>
        <div class="recall__item-rank">
          основатель Фонда <br>
          «ostrovskiy TRade»
        </div>
        <div class="recall__item-work">
          торговля акциями, облигациями, криптовалютой
        </div>
      </div>
      <div class="recall__item">
        <div class="recall__item-text">
          Клиент хотел вывести из тени свой интернет-магазин косметики, обратился к нам. Подготовили документы на
          открытие ООО, помогли выбрать удобный и современный кассовый аппарат со встроенным эквайрингом, установили
          1С-программу для учета заказов (УНФ – управление нашей фирмой) и синхронизировали её с 1С: Бухгалтерия
          предприятия, открыли счёт в банке-партнере с выгодными условиями обслуживания для его деятельности,
          подключили к одной из систем для приёма платежей покупателей на сайте клиента. Компания по настоящее время
          находится на абонентском обслуживании в HELIOS.
          <div class="read-more">Читать далее</div>
        </div>

        <div class="recall__item-name">
          Денис Козырь
        </div>
        <div class="recall__item-rank">
          владелец компании <br>
          «Bewith»
        </div>
        <div class="recall__item-work">
          разработка, развитие, поддержка сайтов и сервисов
        </div>
      </div>
      <div class="recall__item">
        <div class="recall__item-text">
          Степан открыл пункт продажи цветов исключительно перед 8 марта, а затем планировал закрыть его. Но дела
          так хорошо пошли, что он решил продолжить дело. Тогда Степан обратился к нам по совету друга, чтобы
          организовать бизнес с учетом всех нюансов. <br>
          <br>
          <br>
          ТРЕБОВАНИЯ БЫЛИ СЛЕДУЮЩИЕ: <br>
          <br>
          Быстро зарегистрировать ИП, поставить бухучёт, помочь определиться с налоговым режимом, подготовить
          документы для арендодателей с целью продления аренды (изначально работали без договора), подключить
          онлайн-кассу и настроить все интеграции, проверить всё законодательно. <br>
          <br>
          <br>

          ЧТО МЫ СДЕЛАЛИ ДЛЯ СТЕПАНА: <br>
          <ul class="list">
            <li class="list-item">Зарегистрировали ИП</li>
            <li class="list-item">Выбрали ОКВЭД и подобрали экономичный налоговый режим</li>
            <li class="list-item">Поставили бухучет и взяли на себя ведение бухгалтерии</li>
            <li class="list-item">Подключили и настроили интеграцию с онлайн-кассой</li>
            <li class="list-item">Подключили товарный учёт</li>
            <li class="list-item">Подготовили первую отчетность</li>
            <li class="list-item">Составили документы для арендодателей, в том числе, по аренде за первые два месяца
            </li>
            <li class="list-item">Настроили интеграцию со Сбербанком, чтобы все платежи подгружались в сервис</li>
            <li class="list-item">Юрист проверил законность деятельности и провел аудит документации</li>
          </ul>
          В результате Степан смог продолжить полноценно вести цветочный бизнес, начатый быстро и спонтанно.
          <br>
          <br>
          <br>
          ОТЗЫВ КЛИЕНТА:
          <br>
          <br>
          «Видимо, это судьба моя — продавать цветы. Никак не думал, что стану этим заниматься, хотел только поднять
          денег под 8 марта и свернуть лавочку. Огромная благодарность коллективу Helios!!! Без вас у меня точно бы
          не вышло — я бы начал отвлекаться на все эти юридические проволочки и забил бы на бизнес, а вы поддержали
          меня в такой критический, переломный момент! Поэтому всё сложилось так, как сложилось. Я доволен! Всем вам
          удачи, а мои цветы всегда для вас со скидками!!!»
          <div class="read-more" id="read-more-st">Читать далее</div>
        </div>

        <div class="recall__item-name">
          Степан
        </div>
        <div class="recall__item-rank">
          владелец цветочной лавки
        </div>
      </div>
    </div>
  </div>
</section>


<section class="recommendations" id="callback">
  <div class="container">
    <h2 class="title">
      За что нас
      рекомендуют друзьям
    </h2>
    <div class="recommendations__inner">
      <div class="recommendations__item">
        <video preload="auto" src="./videos/review.mov" class="recommendations__video bg video" data-setup='{}' poster="./images/poster-1.svg">
        </video>
        <div class="recommendations__item-desc">
          <div class="recommendations__item-text">
            “Мы пользуемся услугами HELIOS уже больше года. По сравнению с другими аутсорсинговыми компаниями они на
            порядок выше! Это действительно профессионалы, которые знают ответы на любой вопрос, им можно позвонить
            в
            любое время и получить грамотную, четкую консультацию по бухгалтерским услугам. Очень радует, что ребята
            сами предлагают нам варианты оптимизации налогов, издержек для получения большей прибыли.”
          </div>
          <div class="recommendations-item-inner">
            <div class="recall__item-name">
              Андрей Савченков
            </div>
            <div class="recommendations-item-sub">
              <div class="recall__item-rank">
                основатель компании <br>
                «WIND TO GO»
              </div>
              <div class="recall__item-work">
                яхт-туры, регаты, аренда яхт
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="recommendations__item">
        <video preload="auto" src="./videos/feedback-1.mp4" class="recommendations__video bg video" data-setup='{}'>
        </video>
        <div class="recommendations__item-desc">
          <div class="recommendations__item-text">
            “Мы пользуемся услугами HELIOS уже больше года. По сравнению с другими аутсорсинговыми компаниями они на
            порядок выше! Это действительно профессионалы, которые знают ответы на любой вопрос, им можно позвонить
            в
            любое время и получить грамотную, четкую консультацию по бухгалтерским услугам. Очень радует, что ребята
            сами предлагают нам варианты оптимизации налогов, издержек для получения большей прибыли.”
          </div>
          <div class="recommendations-item-inner">
            <div class="recall__item-name">
              Андрей Савченков
            </div>
            <div class="recommendations-item-sub">
              <div class="recall__item-rank">
                основатель компании <br>
                «WIND TO GO»
              </div>
              <div class="recall__item-work">
                яхт-туры, регаты, аренда яхт
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="recommendations__nav">
      <span>0</span>
      <span id="cp">1</span>/02
    </div>
  </div>
</section>

<section class="carier">
  <div class="container">
    <div class="carier__bg">
      <div class="carier__inner">
        <h2 class="title">
          Карьера в HELIOS
        </h2>
        <div class="carier__text">
          Наша команда всегда рада новым специалистам, готовым развиваться вместе с нами и становиться еще лучше!
        </div>
        <a class="services__item-btn" href="./vacancy.php">
          Вакансии
        </a>
      </div>
    </div>
  </div>
</section>

<section class="contacts" id="contacts">
  <div class="container">
    <h2 class="title">Контакты</h2>
    <div class="contacts__inner">
      <form action="https://helios1c.ru/mail.php/" method="POST" class="contacts__form form" id="contacts__form" id="myForm-f">
        <div class="contacts__form-item form-item">
          <div class="form-item-title">
            Оставить заявку
          </div>
          <div class="form-item-step">
            Шаг:01<span>/04</span>
          </div>
          <input type="text" placeholder="Ваше имя" name="name">
        </div>
        <div class="contacts__form-item form-item">
          <div class="form-item-title">
            Оставить заявку
          </div>
          <div class="form-item-step">
            Шаг:02<span>/04</span>
          </div>
          <input type="text" placeholder="Ваша почта" name="mail">
        </div>
        <div class="contacts__form-item form-item">
          <div class="form-item-title">
            Оставить заявку
          </div>
          <div class="form-item-step">
            Шаг:03<span>/04</span>
          </div>
          <input type="text" id="phone-input" placeholder="Ваш телефон" name="tel">
          <div class="num__block">
            <div class="num__block-item" data-num="1">1</div>
            <div class="num__block-item" data-num="2">2</div>
            <div class="num__block-item" data-num="3">3</div>
            <div class="num__block-item" data-num="4">4</div>
            <div class="num__block-item" data-num="5">5</div>
            <div class="num__block-item" data-num="6">6</div>
            <div class="num__block-item" data-num="7">7</div>
            <div class="num__block-item" data-num="8">8</div>
            <div class="num__block-item" data-num="9">9</div>
            <div class="num__block-item" data-num="+">+</div>
            <div class="num__block-item" data-num="0">0</div>
            <div class="num__block-item">
              <img src="./images/ico-del.svg" alt="">
            </div>
          </div>
        </div>
        <div class="contacts__form-item form-item">
          <div class="form-item-title">
            Оставить заявку
          </div>
          <div class="form-item-step">
            Шаг:04<span>/04</span>
          </div>
          <div class="form-item-text">
            Выбирите ваш вариант:
          </div>
          <div class="form-item-plan">
            <input type="radio" id="radioButton1" name="radio">
            <label for="radioButton1">
              ИП – Индивидуальный предприниматель
            </label>
          </div>
          <div class="form-item-plan">
            <input type="radio" id="radioButton2" name="radio">
            <label for="radioButton2">
              ООО – Общество с ограниченной ответственностью
            </label>
          </div>
        </div>
        <div class="contacts__form-item form-item">
          <div class="form-item-title">
            Спасибо за заявку,
            мы скоро свяжемся с вами!
          </div>
        </div>
      </form>
      <div class="contacts__phones">
        <a class="title" href="mailto:info@helios1c.ru">info@helios1c.ru</a>
        <div class="phones">
          <div class="phones-item">
            <div class="phones-item-headline">Сергей</div>
            <div class="phones-item-name">директор</div>
            <a class="phones-item-link" href="tel:+79031912616">+7 903 191 26 16</a>
          </div>
          <div class="phones-item">
            <div class="phones-item-headline">Алексей</div>
            <div class="phones-item-name">продукты 1С</div>
            <a class="phones-item-link" href="tel:+79252003733">+7 925 200 37 33</a>
          </div>
          <div class="phones-item">
            <div class="phones-item-headline">Сергей</div>
            <div class="phones-item-name">кассы и сертификация</div>
            <a class="phones-item-link" href="tel:+79639623433">+7 963 962 34 33</a>
          </div>
        </div>
        <div class="contacts__phones-inst">
          <div class="phones-item-name">
            instagram
          </div>
          <a class="phones-item-link" href="https://www.instagram.com/helios1c/?hl=ru">@helios1c</a>
        </div>
      </div>
      <div class="contacts__address">
        <div class="address__description">
          <div class="address__title">
            Адрес
          </div>
          <div class="address__text">
            Метро «Савёловская». По указателям
            к Савёловскому вокзалу. Как только выходишь на свежий воздух поворачиваешь направо и идёшь
            по тротуару на встречу автомобилям, оставляя вокзал за спиной, проходишь под эстакадой. Первое здание по
            пути
            и есть наше. Для того, чтобы попасть
            к нам, будет нужен пропуск, который выпишут только по паспорту или водительскому удостоверению.
            Далее 6 этаж, офис №606.
          </div>
          <div class="address__subtext">
            Чтобы посетителя ждали, о встрече нужно договориться по любому из наших телефонов.
          </div>
        </div>
        <div class="address__illustration">
          <picture class="lazy">
            <source srcset="" data-srcset="./images/webp/address-1.webp" type="image/webp">
            <source srcset="" data-srcset="./images/address-1.png" type="image/png">
            <img class="address__illustration-item" data-src="./images/address-1.png" alt="">
          </picture>
          <picture class="lazy">
            <source srcset="" data-srcset="./images/webp/address-2.webp" type="image/webp">
            <source srcset="" data-srcset="./images/address-2.png" type="image/png">
            <img class="address__illustration-item" data-src="./images/address-2.png" alt="">
          </picture>
          <picture class="lazy">
            <source srcset="" data-srcset="./images/webp/address-3.webp" type="image/webp">
            <source srcset="" data-srcset="./images/address-3.png" type="image/png">
            <img class="address__illustration-item" data-src="./images/address-3.png" alt="">
          </picture>
          <picture class="lazy">
            <source srcset="" data-srcset="./images/webp/address-4.webp" type="image/webp">
            <source srcset="" data-srcset="./images/address-4.png" type="image/png">
            <img class="address__illustration-item" data-src="./images/address-4.png" alt="">
          </picture>
        </div>
      </div>
      <div class="contacts__map">
        <picture class="lazy">
          <source srcset="" data-srcset="./images/webp/map-bg.webp" type="image/webp">
          <source srcset="" data-srcset="./images/map-bg.png" type="image/png">
          <img class="map-bg" data-src="./images/map-bg.png" alt="">
        </picture>
      </div>
    </div>
  </div>
</section>
<? require_once "footer.php" ?>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js"></script>


</body>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="./js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="./js/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

<script>
  $(document).ready(function() {
    $("#myForm").validate({
      rules: {
        email: {
          required: "Поле обязательно для заполнения",
          email: true
        },
        name: {
          required: "Поле обязательно для заполнения",
          minlength: 5
        },
        tel: {
          required: "Поле обязательно для заполнения",
          minlength: 11,
        }
      }
    });
    $("#myForm-f").validate({
      rules: {
        email: {
          required: "Поле обязательно для заполнения",
          email: true
        },
        name: {
          required: "Поле обязательно для заполнения",
          minlength: 5
        },
        tel: {
          required: "Поле обязательно для заполнения",
          minlength: 11,
        }
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('.recall__inner').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      responsive: [{
          breakpoint: 10000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            // initialSlide: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]

    });

    $(".recommendations__inner").slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
    $(".recommendations__inner").on('afterChange', function(event, slick, currentSlide) {
      $("#cp").text(currentSlide + 01);
    });
    $("#contacts__form").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

  });
  var typed = new Typed('#typing', {
    strings: [" ", "отчётами / налогами / кадрами / взносами / 1С онлайн / первичкой"],
    typeSpeed: 70,
    loop: true,
    loopCount: 10,
  });
  if ($('.recall__item-text').height() > parseFloat($('.recall__item-text').css('line-height')) * 12) {
    $('.recall__item-text').height(parseFloat($('.recall__item-text').css('line-height')) * 12)
    $('.read-more').css("display", "block");
  } else {
    $('.read-more').css("display", "none");
  }
  const anchors = document.querySelectorAll('a[href*="#"]')

  for (let anchor of anchors) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault()

      const blockID = anchor.getAttribute('href').substr(1)

      document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      })
    })
  }

  //Код jQuery, установливающий маску для ввода телефона элементу input
  //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
  $(function() {
    //2. Получить элемент, к которому необходимо добавить маску
    $("#phone-input").mask("+7(999) 999-99-99");
  });
</script>


</html>