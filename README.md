
# Blog de noticias Docker Laravel 10 com PHP 8.1 

### Passo a passo
Clone Repositório
```sh
git clone -b https://github.com/Algoritmo2018/blog_noticias.git 
```
 
```
 
Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Blog de noticias"
APP_URL=http://localhost:1215

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Install o boostrap 5
```sh 
https://www.youtube.com/watch?v=RUAIznF576c&t=668s
```


Acesse o projeto
[http://localhost:1215](http://localhost:1215)
