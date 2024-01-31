<section class="form">
    <h2 class="form__title">
        Узнать стоимость
    </h2>
    <input type="radio" class="form__radio-input" id="radio" name="radio" checked>
    <label for="radio" class="form__radio-title">
        Забрать
    </label>
    <input type="radio" class="form__radio-input" id="radio2" name="radio">
    <label for="radio2" class="form__radio-title">
        Привезу сам
    </label>
    <div class="form__box">
        <input class="form__input" type="text" placeholder="Ваше имя">
        <div class="select2">
            <div class="select2__trigger select__trigger-js">
                <span>Тип вторсырья</span>
                <div class="select2__arrow">
                    <svg width="9" height="7" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 7L0.602886 0.250001L8.39711 0.25L4.5 7Z" fill="#3A3A3A"/>
                    </svg>
                </div>
            </div>
            <div class="select2__drop select__drop-js">
                <ul class="select2__list">
                    <li>
                        <input id="select_0" type="radio" name="select">
                        <label for="select_0">1</label>
                    </li>
                    <li>
                        <input id="select_1" type="radio" name="select">
                        <label for="select_1">2</label>
                    </li>
                    <li>
                        <input id="select_2" type="radio" name="select">
                        <label for="select_2">3</label>
                    </li>
                </ul>
            </div>
        </div>
        <input class="form__input phone" type="tel" placeholder="Ваш телефон">
        <input class="form__input" type="text" placeholder="Объем">
        <button class="form__button button" type="submit">
            Получить расчет
        </button>
    </div>

    <p class="form__text">
        Нажимая на кнопку Вы соглашаетесь с <a class="form__link" href="#">Политикой обработки данных</a>
    </p>
</section>
