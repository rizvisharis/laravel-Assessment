
# Laravel Assessment

Frontend team has decided that they need to show form details for runners in the website. At the moment form data is passed with race data endpoint. Ideally we want to move that into it’s own endpoint with additional history on the runners ( last runs ).


## Installation

Install project with composer

```bash
    cd my-project
    composer install 
    php artisan serve
```
    
## Tech Stack

**php version:** 8.0

**laravel version:** 8.6

**mysql/maria db**

**php/redis**




## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_CONNECTION` mysql

`DB_HOST` 127.0.0.1

`DB_PORT` 3306

`DB_DATABASE` laravel_assessment


## API Reference

#### Get form data for runner

```http
  GET /api/v1/runner/{runnerId}/form-data
```


