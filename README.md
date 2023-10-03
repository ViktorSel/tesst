перед запуском и установкой
1. npm install
2. npm run build

Запуск - docker-compose up -d

Для заполнения БД - php artisan db:seed

API - 
1. /login ( описание запроса в app/Http/Requests/LoginDTO)
2. /test 
!!! 
Запросы должны выполняться с header Accept - application/json
Токен для авторизации после запроса login в header  Authentificate - "Bearer " + token 
