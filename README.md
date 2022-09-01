# Запуск приложения в docker:
1. Сборка: Docker-compose build
2. Запуск контейнеров: Docker-compose up -d
3. Данные для .env: Host:mysql, port: 3306, DB: laravel, user:root, password:root
4. Открыть сайт - http://localhost:8000
5. Открыть phpMyAdmin: http://localhost:8080
6. Выполнить миграции (внутри контейнера fpm): docker exec -it <container name\id> php artisan migrate

# Если возникли проблемы с правами:
1. sudo chmod -R 777 storage/logs
2. sudo chmod -R gu+w storage
3. sudo chmod -R guo+w storage

# Если внес изменения в webpack.mix.js, выполнить 
- npm run dev

# Очистка кэша:
- php artisan optimize:clear

