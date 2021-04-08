<? require_once "header.php" ?>
<section class="signature">
  <div class="container">
    <div class="signature__inner">
      <div class="title">Электронная подпись для любых задач</div>
      <ul class="bookkeeping__text-list">
        <li class="bookkeeping__text-item">— Подключение за 30 минут</li>
        <li class="bookkeeping__text-item">— Для бизнеса любого формата</li>
      </ul>
      <ul class="bookkeeping-list">
        <div class="list-headline">Вы можете подобрать ЭЦП под конкретную сферу применения:</div>
        <div class="list__items">
          <li class="list-item">
            <input type="checkbox" id="trade" name="Торг" value="Торг">
            <label for="trade">
              Электронные торги
            </label>
          </li>
          <li class="list-item">
            <input type="checkbox" id="work" name="Работа" value="Работа">
            <label for="work">
              Работа на порталах
            </label>
          </li>
          <li class="list-item">
            <input type="checkbox" id="report" name="Отчетность" value="Отчетность">
            <label for="report">
              Отчетность и документооборот
            </label>
          </li>
          <li class="list-item">
            <input type="checkbox" id="personal" name="Личное" value="Личное">
            <label for="personal">
              Для личных целей
            </label>
          </li>
          <li class="list-item">
            <input type="checkbox" id="all" name="Все" value="Все">
            <label for="all">
              Для всего - универсальная для любых сфер применения и всех торговых площадок
            </label>
          </li>

        </div>
      </ul>
    </div>
  </div>
</section>

<section class="claim claim-n">
  <div class="container">
    <div class="claim__inner">
      <div class="claim__title">
        Остались вопросы по ЭЦП? Наш специалист позвонит вам в течение 10 минут и проконсультирует бесплатно
      </div>
      <div class="claim-pos">
        <div class="claim__title-m">Оставить заявку</div>
        <input type="text" class="claim__input" placeholder="Номер телефона">
        <a class="claim__btn">
          ОСТАВИТЬ ЗАЯВКУ
        </a>
        <div class="claim__btn-m"></div>
      </div>
    </div>
</section>
<? require_once "footer.php" ?>

</body>

</html>