#### Установка
* git clone https://github.com/goti2/mUrl.git
* composer install

#### Настройка приложения
* Исправить в файле ```.env``` настройки подключения к базе данных
* Если необходимо сгенерировать новый ключ ```php artisan key:generate```
* Выполнить миграцию ```php artisan migrate:install``` и  ```php artisan migrate```

#### Запуск приложения
* ```php artisan serve```
* Использовать ссылку ```http://localhost:8000``` 