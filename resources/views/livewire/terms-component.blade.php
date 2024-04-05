<div>
    @section('title', __('Privacy Policy'))
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('Home')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Terms And Conditions')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="document">
                <div class="document__header">
                    <h1 class="document__title">{{__('Privacy Policy')}}</h1>
                    <div class="document__subtitle">{{__('В настоящее Соглашение последний раз вносились изменения 21 марта 2024 года.')}}</div>
                </div>
                <div class="document__content typography">

                    <ol>
                        <li>
                            <h5>Введение</h5>
                            <p>Мы, "Kendir" HK, уважаем вашу конфиденциальность и стремимся защищать ваши персональные данные.</p>
                        </li>
                        <li>
                            <h5>Собираемые данные</h5>
                            <span>Когда вы используете наши услуги, мы можем собирать следующие данные:</span>
                                <ul>
                                    <li>Имя</li>
                                    <li>Адрес электронной почты</li>
                                    <li>Номер телефона</li>
                                    <li>IP-адрес</li>
                                    <li>Данные о cookies</li>
                                    <li>Информация о вашем устройстве</li>
                                </ul>
                        </li>
                        <li>
                            <h5>Использование данных</h5>
                            <span>Мы используем ваши данные для:</span>
                            <ul>
                                <li>Предоставления вам наших услуг</li>
                                <li>Улучшения наших услуг</li>
                                <li>Маркетинга и рекламы</li>
                                <li>Аналитики</li>
                                <li>Исследования и разработки</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Обмен данными</h5>
                            <span>Мы можем делиться вашими данными с:</span>
                            <p>Третьими сторонами, которые помогают нам предоставлять вам наши услуги
                                Партнерами, с которыми мы совместно предлагаем вам продукты и услуги
                                Государственными органами, если это требуется по закону</p>
                        </li>
                        <li>
                            <h5>Права пользователей</h5>
                            <span>Вы имеете право:</span>
                            <ul>
                                <li>Доступа к своим данным</li>
                                <li>Исправления своих данных</li>
                                <li>Удаления своих данных</li>
                                <li>Ограничения обработки своих данных</li>
                                <li>Возражения против обработки своих данных</li>
                                <li>Переносимости своих данных</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Контактная информация</h5>
                            <span>Если у вас есть вопросы по поводу этой политики, вы можете связаться с нами по электронной почте: online@kendir.com.tm</span>
                        </li>
                        <li>
                            <h5>Изменения в политике</h5>
                            <span>Мы можем время от времени изменять эту политику.</span>
                        </li>
                        <li>
                            <h5>Согласие</h5>
                            <span>Используя наши услуги, вы соглашаетесь с этой политикой.</span>
                        </li>
                    </ol>

                    <p>For information about how to contact us, please visit our <a href="{{ route('contacts') }}">contact page</a>.</p>
                    <p>Для получения информации о том, как с нами связаться, посетите нашу <a href="{{ route('contacts') }}">страницу контактов</a>.</p>
                    <p> Biziň bilen nädip habarlaşmalydygymyz barada maglumat almak üçin <a href="{{ route('contacts') }}"> aragatnaşyk sahypasy </a>. </p>
                </div>
            </div>
        </div>
    </div>
</div>
