Этот проект представляет собой систему авторизации на PHP и CSS. Основной файл в проекте является index.php. Он загружает настройки из файла config.php и использует базу данных MySQL для хранения данных пользователей. Затем он проверяет запрос и проверяет, авторизован ли пользователь. Если пользователь авторизован, он будет перенаправлен на страницу профиля. В противном случае пользователь будет перенаправлен на страницу входа. На странице входа пользователь может ввести свои учетные данные для аутентификации. Если данные были введены правильно, пользователь будет авторизован и перенаправлен на страницу профиля. Страница профиля дает пользователю доступ к дополнительным функциям сайта. Также проект использует файл CSS для стилизации страниц веб-сайта.

Хореография

![Рис. 1 - Хореография](https://github.com/ideahold/SimpleRegistrationSystemPHP/blob/main/%D0%A5%D0%BE%D1%80%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F.png)

## PHP_auth_css 
Simple registration system in PHP.

## Цель работы
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP.

В данном проекте реализованы следующие пункты
- Формы регистрации/входа
- Ограничение время сессии
- Хранения хэша пароля с солью соль для каждого пользователя уникальна

## Ход работы

Реализовал интерфес с формой регистрации и входа, для хранения данных используется БД MySQL.

В проекте содержится 7 файлов: auth.php, registration.php, index.php, exit.php, sign-in.php, success.php, style.css.

- auth.php используется для проверки наличия пользователя в БД.
- registration.php добавления пользователя в БД, при верном формате пароля и логина.
- index.php файл с формой регистрации.
- sign-in.php файл с формой входа.
- exit.php код, который удаляет куки (завершает сессию пользователя)
- success.php код, который срабатывает при успешной регистрации или авторизации.

## Граф(модель проекта)
https://www.figma.com/file/1d2z2Vnkim7dZ66wWQLzPz/Untitled?node-id=1%3A2
