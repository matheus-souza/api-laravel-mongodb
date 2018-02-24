# api-laravel-mongodb

Simple Rest API with persistence in MongoDB

## Prerequisite
- [Docker](https://docs.docker.com/install/)
- [docker-compose](https://docs.docker.com/compose/install/)

## To roll
- Run ```cp .env.laradock ./laradock/.env```
- Run ```cp .env.dev .env```
- Run ```./run```
- Access the ```workspace``` container with the user ``` laradock```
- Run ```composer install```

PS: When running ```./run``` already accesses the ``` workspace``` container with the user ```laradock```

After the above steps the application will be available in ```localhost```. You will need to create a user and log in to the application.
To access the api documentation [click here](https://documenter.getpostman.com/view/1774155/simpleservicelaravelmongodb/RVg3dnWo)