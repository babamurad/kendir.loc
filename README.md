# Интернет магазин строительных материалов
 Описание:
 
 #### Данный проект представляет собой интернет-магазин строительных материалов, созданный с использованием Laravel 10, Livewire и MySQL.
    
 #### Требования:
 
 PHP 8.1 или выше
 Composer
 MySQL 8.0 или выше
 Node.js 16 или выше
 NPM 8 или выше
 #### Установка:
 
- Скопируйте репозиторий на свой локальный сервер.
- Выполните команду composer install в корневой папке проекта.
- Создайте файл .env и заполните его необходимыми данными для подключения к MySQL.
- Выполните команду php artisan key:generate для генерации ключа шифрования.
- Выполните команду npm install && npm run dev для установки зависимостей JavaScript и запуска сервера разработки.
- Перейдите в браузере по адресу http://localhost:8000.
##### Функциональные возможности:
 
 - Каталог товаров:
 Поиск по названию, артикулу, бренду, категории.
 Фильтр по цене, наличию, характеристикам.
 Сортировка по цене, популярности, новизне.
 Подробные карточки товаров с описанием, изображениями, характеристиками.
 - Личный кабинет:
 Регистрация и авторизация пользователей.
 История заказов.
 Сохраненные товары.
 Изменение профиля.
 - Корзина:
 Добавление товаров в корзину.
 Изменение количества товаров в корзине.
 Удаление товаров из корзины.
 Оформление заказа.
 - Заказы:
 Оформление заказов с доставкой и самовывозом.
 Оплата заказов онлайн и наличными.
 Отслеживание статуса заказов.
 Структура проекта:
 - Мульиязычность: реализована мультиязычность на 3-х языках en, ru, tm
 
* app:
* Http: Контроллеры HTTP-запросов.
* Livewire: Компоненты Livewire.
* Models: Модели данных.
* Policies: Политики авторизации.
* Providers: Провайдеры служб.
* Jobs: Очередные задачи.
* Events: События.
* Listeners: Обработчики событий.
* Commands: Консольные команды.
* bootstrap:
* app: Конфигурация приложения.
* cache: Кэш конфигурации.
* logs: Журналы работы приложения.
* storage: Файлы приложения.
* views: Шаблоны представлений.
* config: Конфигурация пакетов Laravel.
* database: Миграции и сиды базы данных.
* public: Папка с общедоступными файлами (изображения, CSS, JavaScript).
* resources: Ресурсы приложения (языковые файлы, изображения, CSS, JavaScript).
* routes: Маршруты HTTP-запросов.
* tests: Тесты приложения.
* vendor: Зависимости Composer.

#### Разработка:
 
 Для разработки приложения можно использовать PHPStorm, Visual Studio Code или любой другой удобный вам IDE.
 Для тестирования приложения можно использовать PHPUnit.
 Для управления версиями кода можно использовать Git.
 Дополнительно:
 
 Для более подробной информации о Laravel 10, Livewire и MySQL, пожалуйста, ознакомьтесь с их официальной документацией.
 Вы можете расширить функциональность интернет-магазина, добавив новые функции, такие как отзывы о товарах, сравнение товаров, система скидок и т.д.
 Лицензия:
 
 Данный проект лицензирован под лицензией "Все права защищены".
