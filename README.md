Развёртывание
---
1. Настройка базы данных:

> **Измените (при необходимости) файл ./sandwich-selector/.env**
> + DB_CONNECTION // СУБД (поддерживаются 4, по умолчанию это mysql)
> + DB_HOST // ip базы данный
> + DB_PORT // порт базы данных
> + DB_DATABASE // имя базы данных
> + DB_USERNAME // имя пользователя базы данных
> + DB_PASSWORD // пароль пользователя базы данных

2. Миграции:
> **Необходимо выполнить следующую команду:**
> + php artisan migrate:fresh --seed

3. Настройка приложения:
> **Измените (при необходимости) файл ./sandwich-selector/.env**
> + APP_NAME // имя приложения
> + APP_URL // url приложения

4. Запуск:
> **Необходимо выполнить следующую команду:**
> + php artisan serve

5. Список маршрутов:
> **Необходимо выполнить следующую команду:**
> + php artisan route:list
