## Plano de Trabalho

Requisitos

- XAMPP Apache + MySQL + PHP.
- Composer.
- Laravel.
- Postman.

## Primeiros passos

Clona o repositório com o comando

- git clone https://github.com/israelmarmar/planodetrabalho

Abra no diretório do projeto e renomeie o arquivo .env.example por .env e coloque as configurações do banco de dados

Gere as tabelas do banco de dados por

- php artisan migrate

Teste e crie novas requisições GET e POST no arquivo tests\planodetrabalho.postman_collection.json pelo software Postman.

Execute o servidor com

- php artisan serve
