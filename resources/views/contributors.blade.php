@extends('layouts.main')
@section('title', 'Жертвователи')
@section('content')
    <div class="contributors">
        <div class="containers">
            <div class="contributors__t">Жертвователи</div>
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
            <div class="contributors__filter">
                <div class="contributors__filter-i">
                    <div class="contributors__filter-t">Дата </div>
                    <select class="c_select" name="select" style="display: none">
                        <option>Сначала последние</option>
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
                <div class="contributors__filter-i">
                    <div class="contributors__filter-t">ФИО жертвователя </div>
                    <label class="custom-input-search__label"><img class="custom-input-search__icon" src="/assets/svg/components/search.svg">
                        <input class="custom-input-search__input" placeholder="Поиск по ФИО жертвователя">
                    </label>
                </div>
                <div class="contributors__filter-i">
                    <div class="contributors__filter-t">Сумма  </div>
                    <select class="c_select" name="select" style="display: none">
                        <option>Сортировка по умолчанию</option>
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
                <div class="contributors__filter-i">
                    <div class="contributors__filter-t">Регион</div>
                    <label class="custom-input-search__label"><img class="custom-input-search__icon" src="/assets/svg/components/search.svg">
                        <input class="custom-input-search__input" placeholder="Поиск по региону">
                    </label>
                </div>
            </div>
            <div class="contributors__list">
                <div class="contributors__item">
                    <div class="contributors__item-d">0</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">1</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">2</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">3</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">4</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">5</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">6</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">7</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">8</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">9</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">10</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">11</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">12</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">13</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">14</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">15</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">16</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">17</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">18</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">19</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">20</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">21</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">22</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">23</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">24</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">25</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">26</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">27</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">28</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">29</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">30</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">31</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">32</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">33</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">34</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">35</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">36</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">37</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">38</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">39</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">40</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">41</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">42</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">43</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">44</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">45</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">46</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">47</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">48</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">49</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">50</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">51</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">52</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">53</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">54</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">55</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">56</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">57</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">58</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">59</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">60</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">61</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">62</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">63</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">64</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">65</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">66</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">67</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">68</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">69</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">70</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">71</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">72</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">73</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">74</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">75</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">76</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">77</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">78</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">79</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">80</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">81</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">82</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">83</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">84</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">85</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">86</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">87</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">88</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">89</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">90</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">91</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">92</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">93</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">94</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">95</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">96</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">97</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">98</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">99</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">100</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">101</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">102</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">103</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">104</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">105</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">106</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">107</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">108</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">109</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">110</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">111</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">112</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">113</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">114</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">115</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">116</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">117</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">118</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">119</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">120</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">121</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">122</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">123</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">124</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">125</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">126</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">127</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">128</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">129</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">130</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">131</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">132</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">133</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">134</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">135</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">136</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">137</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">138</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">139</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">140</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">141</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">142</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">143</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">144</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">145</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">146</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">147</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">148</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">149</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">150</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">151</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">152</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">153</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
                <div class="contributors__item">
                    <div class="contributors__item-d">154</div>
                    <div class="contributors__item-n">Иванов Иван Александрович</div>
                    <div class="contributors__item-p">10.000 ₽</div>
                    <div class="contributors__item-c">Россия, Самарская обл. г. Тольятти</div>
                </div>
            </div>
            <div id="pagination-controls"></div>
        </div>
    </div>
@endsection
