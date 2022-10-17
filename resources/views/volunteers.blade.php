@extends('layouts.main')
@section('title', 'Волонтеры')
@section('content')
    <div class="volunteers-recom">
        <div class="containers">
            <div class="volunteers-recom__t">Волонтеры</div>
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
            <div class="volunteers-recom__d">Равным образом консультация с широким активом позволяет оценить значение дальнейших направлений развития. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом укрепление и развитие структуры позволяет оценить значение соответствующий </div>
            <div class="volunteers-recom__filter">
                <div class="volunteers-recom__filter-i">
                    <select class="c_select" name="select" style="display: none">
                        <option>Сортировка по фамилии</option>
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
                <div class="volunteers-recom__filter-i">
                    <label class="custom-input-search__label"><img class="custom-input-search__icon" src="/assets/svg/components/search.svg">
                        <input class="custom-input-search__input" placeholder="Поиск по ФИО">
                    </label>
                </div>
                <div class="volunteers-recom__filter-i">
                    <label class="custom-input-search__label"><img class="custom-input-search__icon" src="/assets/svg/components/search.svg">
                        <input class="custom-input-search__input" placeholder="Поиск по региону">
                    </label>
                </div>
            </div>
            <ul class="volunteers-recom__list">
                <li class="volunteers-recom__list-i">
                    <div class="volunteers-recom__list-t">А</div>
                    <div class="volunteers-recom__list-peoples">
                        <div class="cardUser">
                            <div class="cardUser__photo"> <picture><source srcset="/assets/img/volunteers/people.webp" type="image/webp"><img src="/assets/img/volunteers/people.png"></picture></div>
                            <div class="cardUser__content">
                                <div class="cardUser__content-n">Габиулин Ферис Азимович</div>
                                <div class="cardUser__content-j">Самарская обл. г. Тольятти</div>
                                <div class="cardUser__content-socials"><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/whatsapp.webp" type="image/webp"><img src="/assets/img/volunteers/whatsapp.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/telegram.webp" type="image/webp"><img src="/assets/img/volunteers/telegram.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/mail.webp" type="image/webp"><img src="/assets/img/volunteers/mail.png"></picture></a></div>
                            </div>
                        </div>
                        <div class="cardUser">
                            <div class="cardUser__photo"> <picture><source srcset="/assets/img/volunteers/people.webp" type="image/webp"><img src="/assets/img/volunteers/people.png"></picture></div>
                            <div class="cardUser__content">
                                <div class="cardUser__content-n">Габиулин Ферис Азимович</div>
                                <div class="cardUser__content-j">Самарская обл. г. Тольятти</div>
                                <div class="cardUser__content-socials"><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/whatsapp.webp" type="image/webp"><img src="/assets/img/volunteers/whatsapp.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/telegram.webp" type="image/webp"><img src="/assets/img/volunteers/telegram.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/mail.webp" type="image/webp"><img src="/assets/img/volunteers/mail.png"></picture></a></div>
                            </div>
                        </div>
                        <div class="cardUser">
                            <div class="cardUser__photo"> <picture><source srcset="/assets/img/volunteers/people.webp" type="image/webp"><img src="/assets/img/volunteers/people.png"></picture></div>
                            <div class="cardUser__content">
                                <div class="cardUser__content-n">Габиулин Ферис Азимович</div>
                                <div class="cardUser__content-j">Самарская обл. г. Тольятти</div>
                                <div class="cardUser__content-socials"><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/whatsapp.webp" type="image/webp"><img src="/assets/img/volunteers/whatsapp.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/telegram.webp" type="image/webp"><img src="/assets/img/volunteers/telegram.png"></picture></a><a class="cardUser__content-s" href="/"> <picture><source srcset="/assets/img/volunteers/mail.webp" type="image/webp"><img src="/assets/img/volunteers/mail.png"></picture></a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
