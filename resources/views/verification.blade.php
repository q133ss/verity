@extends('layouts.main')
@section('title', 'Проверка сертификата')
@section('content')
    <div class="verification-main">
        <div class="containers">
            <div class="verification-main__t">Проверка сертификата</div>
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
    <div class="verification-form">
        <div class="containers">
            <div class="verification-form__wrapper">
                <div class="verification-form__item">
                    <div class="verification-form__element">
                        <div class="verification-form__element-l">Проверка по номеру сертификата</div>
                        <input class="custom-input" placeholder="Введите 12 цифр номера сертификата">
                    </div>
                    <button class="verification-form__button">Проверить</button>
                </div>
                <div class="verification-form__item">
                    <div class="verification-form__element">
                        <div class="verification-form__element-l">Проверка по номеру телефона</div>
                        <label class="custom-input-phone__label"><img class="custom-input-phone__icon" src="/assets/svg/components/rus.svg">
                            <input class="custom-input-phone__input" id="phone__mask" placeholder="+7">
                        </label>
                    </div>
                    <button class="verification-form__button">Проверить</button>
                </div>
                <div class="verification-form__item">
                    <div class="verification-form__element">
                        <div class="verification-form__element-l">Проверка по ФИО</div>
                        <div class="verification-form__element-list">
                            <input class="custom-input" placeholder="Фамилия">
                            <input class="custom-input" placeholder="Имя">
                            <input class="custom-input" placeholder="Отчество">
                        </div>
                    </div>
                    <button class="verification-form__button">Проверить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="verification-ready">
            <div class="verification-ready__header">
                <div class="verification-ready__header-i"> <img src="/assets/svg/verification/ready.svg"></div>
                <div class="verification-ready__header-t">Проверка прошла успешно</div>
            </div>
            <div class="verification-ready__content">
                <div class="verification-ready__blocks">
                    <div class="verification-ready__content-l">
                        <div class="verification-ready__content-t">ФИО жертвователя:</div>
                        <div class="verification-ready__content-i">Иванов Иван Александрович</div>
                    </div>
                    <div class="verification-ready__content-l">
                        <div class="verification-ready__content-t">ФИО жертвователя:</div>
                        <div class="verification-ready__content-i">Иванов Иван Александрович</div>
                    </div>
                    <div class="verification-ready__content-l">
                        <div class="verification-ready__content-t">ФИО жертвователя:</div>
                        <div class="verification-ready__content-i">Иванов Иван Александрович</div>
                    </div>
                    <div class="verification-ready__content-l">
                        <div class="verification-ready__content-t">ФИО жертвователя:</div>
                        <div class="verification-ready__content-i">Иванов Иван Александрович</div>
                    </div>
                    <div class="verification-ready__content-l">
                        <div class="verification-ready__content-t">ФИО жертвователя:</div>
                        <div class="verification-ready__content-i">Иванов Иван Александрович</div>
                    </div>
                </div>
                <div class="verification-ready__photo"> <picture><source srcset="/assets/img/verification/serf.webp" type="image/webp"><img src="/assets/img/verification/serf.png"></picture></div>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="verification-error">
            <div class="verification-error__header">
                <div class="verification-error__header-i"> <img src="/assets/svg/verification/error.svg"></div>
                <div class="verification-error__header-t">Проверка прошла успешно</div>
            </div>
            <div class="verification-error__content">
                <div class="verification-error__content-t">Проверьте правильность написания номера сертификата или других данных для поиска. </div>
                <div class="verification-error__content-d">
                    Если в итоге вы не смогли найти свой сертификат, то:<br>1. Обратитесь к своему рекомендателю, чтобы уточнить добавлен ли ваш платеж<br>2. Если рекомендателя нет, то напишите нам в поддержку на сайте позвоните по номеру  8 800 453 83 04</div>
                <div class="verification-error__content-buttons"> <a class="verification-error__content-button" href="/">Обратиться к рекомендателю</a><a class="verification-error__content-button" href="/">Написать в поддержку</a></div>
            </div>
        </div>
    </div>
    <div class="verification-description">
        <div class="containers">
            <div class="verification-description__wrapper">
                <div class="verification-description__t">Почему важно проверять сертификат на подлинность?</div>
                <div class="verification-description__d">Равным образом консультация с широким активом позволяет оценить значение дальнейших направлений развития. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом укрепление и развитие структуры позволяет оценить значение соответствующий </div>
            </div>
        </div>
    </div>
@endsection
