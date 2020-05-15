Запуск:

1. Скачать. В скачаной папке открыть терминал. Ввести команду: docker-compose build && docker-compose up -d
2. Перейти в папку с проэктом: cd src
3. Вводим: composer dump-autoload
4. Вводим: docker-compose exec php php /var/www/html/artisan migrate
5. Вводим: docker-compose exec php php /var/www/html/artisan db:seed
6. Вводим в браузере: localhost:8088
7. phpMyAdmin: localhost:8008 
