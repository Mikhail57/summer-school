@extends('layout.master')

@section('title', 'Страна Мастеров ИГУ')

@section('content')
    <section class="block promo">
        <h1 class="block__title block__title_promo">Страна мастеров</h1>
        <div class="block__content">
            <a href="#register">
                <input type="button" value="Регистрация" class="button button_accent">
            </a>
        </div>
        <span class="move-down"></span>
    </section>
    <section class="block">
        <h2 class="block__title">О летней школе</h2>
        <div class="block__content">
            <p>
                Летние творческие и технические мастерские «СТРАНА МАСТЕРОВ» пройдут с 17 по 28 июня в Научной
                библиотеке ИГУ (Лермонтова, 124, 4 этаж) в интенсивном режиме. Дети будут изучать выбранный курс в
                течение 3 часов каждый будний день.
            <p>
                Каждый курс построен таким образом, что за две недели интенсивных занятий ученики освоят какой-либо
                новый для себя инструмент. Дети смогут познакомиться с современными профессиями и уже на школьной скамье
                начнут развиваться в интересующей их сфере.
            <p>
                Мастерские «СТРАНА МАСТЕРОВ» предлагают курсы как по созданию роботов и развития навыков
                программирования, так и для развития творческого потенциала ребенка.
        </div>
    </section>
    <hr class="divider">
    <section class="block">
        <h2 class="block__title">Список курсов</h2>
        <!-- Courses -->
    </section>
    <section class="block register" id="register">
        <h2 class="block__title">Регистрация</h2>
        <div class="block__content">
            <form action="{{ route('registerClient') }}" method="post" class="form">
                @csrf
                <div class="form__line">
                    <label for="firstName" class="form__label">Имя</label>
                    <input class="form__field" type="text" name="firstName" id="firstName" placeholder="Иван" required>
                </div>
                <div class="form__line">
                    <label for="lastName" class="form__label">Фамилия</label>
                    <input class="form__field" type="text" name="lastName" id="lastName" placeholder="Иванов" required>
                </div>
                <div class="form__line">
                    <label for="middleName" class="form__label">Отчество</label>
                    <input class="form__field" type="text" name="middleName" id="middleName" placeholder="Иванович">
                </div>
                <div class="form__line">
                    <label for="email" class="form__label">Электронная почта</label>
                    <input class="form__field" type="email" name="email" id="email" placeholder="example@gmail.com"
                           required>
                </div>
                <div class="form__line">
                    <label for="phone" class="form__label">Номер телефона</label>
                    <input class="form__field" type="text" name="phone" id="phone" placeholder="+7 (999) 123-45-67"
                           required>
                </div>
                <div class="form__line">
                    <label for="age" class="form__label">Возраст</label>
                    <input class="form__field" type="number" name="age" id="age" min="7" max="18" placeholder="7"
                           required>
                </div>

                <div class="form__line">
                    <label for="course" class="form__label">Выберите курс</label>
                    <select class="form__field" name="course" id="course">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__line">
                    <input class="form__checkbox" type="checkbox" name="personal" id="personal">
                    <label class="form__label_inline" for="personal">Согласие на обработку Персональных данных</label>
                </div>
                @if ($errors->any())
                    <div class="form__line errors">
                        <ul class="errors-list">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form__line">
                    <input class="button form__submit" type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </section>
@endsection
