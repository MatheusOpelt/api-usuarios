## Usuários RESTFul API

API RESTFul para gerenciar usuários utilizando Laravel e Mysql

### Requisitos

- Mysql 8+
- PHP 8+
- Composer 2.2.6+

### Build

Para fazer o build do projeto rode o comando install do composer:

```
composer install
```

### Env config

Antes de subir a aplicação é necessário configurar a conexão com o banco de dados no arquivo `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=test
DB_PASSWORD=test
```

Caso você não tenha um banco de dados é possivél subir uma instância rapidamente usando o docker:

```
docker run -e MYSQL_ROOT_PASSWORD=test -e MYSQL_DATABASE=test -e MYSQL_USER=test -e MYSQL_PASSWORD=test -p 3306:3306 --name mysql -d mysql
```

### Executando

Para subir a api primeiro execute a migração para criar as tabelas:

```
php artisan migrate
```

Feito isso é possivel executar o arquivo de Seeder para popular a base:

```
php artisan db:seed
```

Com a base pronta agora basta subir o servidor via:

```
php artisan serve
```

## Utilizaçâo

A API está exposta na porta 8000 com o prefixo `api`. Esse projeto contêm um arquivo chamado `Usuarios.postman_collection.json`
que pode ser importado no postman, assim criando uma collection nova com todos endpoints da API.
