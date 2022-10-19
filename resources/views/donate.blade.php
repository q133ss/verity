@extends('layouts.main')
@section('title', '')
@section('content')
    <div class="donate-main">
        <div class="containers">
            <div class="donate-main__t">Пожертвовать</div>
            <div class="banners__slider">
                <div class="swiper volunteersSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banners__slider-i">
                                <div class="banners__slider-bg"> <picture><source srcset="/assets/img/banners/banners-1.webp" type="image/webp"><img src="/assets/img/banners/banners-1.png"></picture></div>
                                <div class="banners__slider-c">
                                    <div class="banners__slider-subtitle">Подзаголовок</div>
                                    <div class="banners__slider-title">
                                        Проверьте своего <br>рекомендателя </div>
                                    <div class="banners__slider-text">Текст для второго подзаголовка  </div><a class="banners__slider-button" href="/">Проверить</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banners__slider-i">
                                <div class="banners__slider-bg"> <picture><source srcset="/assets/img/banners/banners-2.webp" type="image/webp"><img src="/assets/img/banners/banners-2.png"></picture></div>
                                <div class="banners__slider-c">
                                    <div class="banners__slider-subtitle">Подзаголовок</div>
                                    <div class="banners__slider-title">
                                        Проверьте своего <br>рекомендателя </div>
                                    <div class="banners__slider-text">Текст для второго подзаголовка  </div><a class="banners__slider-button" href="/">Проверить</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banners__slider-i">
                                <div class="banners__slider-bg"> <picture><source srcset="/assets/img/banners/banners-3.webp" type="image/webp"><img src="/assets/img/banners/banners-3.png"></picture></div>
                                <div class="banners__slider-c">
                                    <div class="banners__slider-subtitle">Подзаголовок</div>
                                    <div class="banners__slider-title">
                                        Проверьте своего <br>рекомендателя </div>
                                    <div class="banners__slider-text">Текст для второго подзаголовка  </div><a class="banners__slider-button" href="/">Проверить</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banners__slider-i">
                                <div class="banners__slider-bg"> <picture><source srcset="/assets/img/banners/banners-4.webp" type="image/webp"><img src="/assets/img/banners/banners-4.png"></picture></div>
                                <div class="banners__slider-c">
                                    <div class="banners__slider-subtitle">Подзаголовок</div>
                                    <div class="banners__slider-title">
                                        Проверьте своего <br>рекомендателя </div>
                                    <div class="banners__slider-text">Текст для второго подзаголовка  </div><a class="banners__slider-button" href="/">Проверить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-controls">
                    <div class="swiper-button-next"><img src="/assets/svg/slider/arrow-next.svg"></div>
                    <div class="swiper-button-prev"><img src="/assets/svg/slider/arrow-prev.svg"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="donate-form">
        <div class="donate-form__banner"> <img src="/assets/svg/donate/bg.svg"></div>
        <div class="containers">
            <form action="{{route('contributors.payment')}}" method="POST">
                @csrf
            <div class="donate-form__wrapper">
                <div class="donate-form__t">Заполните информацию о себе</div>
                <div class="donate-form__d">Товарищи! реализация намеченных плановых заданий позволяет выполнять важные задания по разработке системы обучения</div>
                @if ($errors->any())
                    <span class="for_volunteers-plus__item-d" style="color:#f00; font-weight: 700;">{{ $errors->first() }}</span>
                @endif
                <div class="donate-form__blocks">
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите Вашу фамилию</div>
                        <input class="custom-input" value="{{old('lastname')}}" name="lastname" placeholder="Фамилия">
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите Ваше имя</div>
                        <input class="custom-input" value="{{old('name')}}" name="name" placeholder="Имя">
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите Ваше Отчество </div>
                        <input class="custom-input" value="{{old('patronymic')}}" name="patronymic" placeholder="Отчество">
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите номер телефона</div>
                        <label class="custom-input-phone__label"><img class="custom-input-phone__icon" src="/assets/svg/components/rus.svg">
                            <input class="custom-input-phone__input" value="{{old('phone')}}" id="phone__mask" name="phone" placeholder="+7">
                        </label>
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите вашу почту</div>
                        <input class="custom-input" value="{{old('email')}}" name="email" placeholder="mail@mail.ru">
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Выберите страну</div>
                        <select class="c_select" name="country" style="display: none">
                            <option>Страна</option>
                            <option value="default" selected="">1.Element</option>
                            <option value="element_2">2.Element</option>
                            <option value="element_3">3.Element</option>
                            <option value="element_4">4.Element</option>
                            <option value="element_5">5.Element</option>
                            <option value="element_6">6.Element</option>
                            <option value="element_7">7.Element</option>
                            <option value="element_8">8.Element</option>
                        </select>
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите регион</div>
                        <input class="custom-input" value="{{old('city')}}" name="city" placeholder="Город / Село / Поселок">
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-h">
                            <div class="donate-form__item-l">Выберите страну</div><a class="donate-form__item-a" href="/">у меня нет рекомендателя</a>
                        </div>
                        <select class="c_select" name="recommender_id" style="display: none">
                            <option>Выберите рекомендателя</option>
                            <option value="1" selected="">Нету</option>
                            <option value="element_2">2.Element</option>
                            <option value="element_3">3.Element</option>
                            <option value="element_4">4.Element</option>
                            <option value="element_5">5.Element</option>
                            <option value="element_6">6.Element</option>
                            <option value="element_7">7.Element</option>
                            <option value="element_8">8.Element</option>
                        </select>
                    </div>
                    <div class="donate-form__item">
                        <div class="donate-form__item-l">Введите сумму пожертвования</div>
                        <label class="custom-input-rub__label">
                            <div class="custom-input-rub__text">₽</div>
                            <input class="custom-input-rub__input" value="{{old('sum')}}" name="sum" placeholder="">
                        </label>
                    </div>
                </div>
                <div class="donate-form__checkboxs">
                    <div class="checkbox">
                        <input class="checkbox__input" type="checkbox" id="1">
                        <label class="checkbox__label" for="1">Согласен с политикой обработки персональных данных, договором офертой  и условиями использования</label>
                    </div>
                    <div class="checkbox">
                        <input class="checkbox__input" type="checkbox" id="2">
                        <label class="checkbox__label" for="2">Согласен с политикой обработки персональных данных, правилами предоставления услуг по подписке, офертой рекуррентных платежей, договором-офертой и условиями использования</label>
                    </div>
                </div>
                <button type="submit" class="donate-form__button">Пожертвовать</button>
            </div>
            </form>
        </div>
    </div>
@endsection
