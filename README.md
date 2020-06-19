<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel Excel

Projeto em laravel para importar planilhas do Excel

## Requisitos

-   [Git](https://git-scm.com/)
-   [Postman](https://www.getpostman.com/downloads/)
-   [Docker](https://www.docker.com/get-started)

## Instalação

1. Clone ou baixe o repositorio e execute os comandos no terminal dentro da pasta do projeto

    ```bash
    cd laradock
    cp env-example .env

    # Linux - Criar os containers (OBS: Demora um pouco na primeira vez)
    sudo docker-compose up -d nginx mysql phpmyadmin workspace
    sudo docker-compose exec --user=laradock workspace bash

    # Windows - Criar os containers, utilizar CMD ou SHELL (OBS: Demora um pouco na primeira vez)
    docker-compose up -d nginx mysql phpmyadmin workspace
    docker-compose exec --user=laradock workspace bash

    # Instalação das dependencias do Laravel
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    ```
    
2. Agora você deve ser capaz de visualizar a sua aplicação funcionando.

    [http://localhost](http://localhost) 

3. Acessar o Banco de dados com o phpmyadmin

    >[http://localhost:8081](http://localhost:8081)  
    >Servidor: mysql  
    >Usuario: laravel  
    >Senha: laravel  

3. Importar o arquivo da raiz do projeto para o postman 
    
    ```bash
    Laravel Excel.postman_collection.json
    ```

4. OBS: Utilizar o excel da raiz do projeto, pois na importação da planilha foi mapeado que o cabeçalho da planilha começa na linha 5


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
