# ASTUDIO BACKEND ASSESSMENT
## Overview
This project provides a REST API to perform CRUD operations on entities with support for filtering. 
The Project is built using the latest version Laravel 12 with Passport for authentication.

## Setup Instructions

### Prerequisites
- PHP 8.2+
- Composer
- MySQL or any preferred database
- Postman or cURL for testing the API

### Installation
- #### Clone the repository:
  - git clone https://github.com/ahmedelsensar11/backend-assessment
  - cd project-name

- #### Install dependencies using Composer:
  - composer install

- #### Copy the .env.example file to create a new .env file:
  - cp .env.example .env

- #### Configure the .env file:
  - Set the database credentials

- #### Run Database migration:
  - php artisan migrate

- #### Install Passport:
  - php artisan passport:install

- #### Run database seeders:
  - php artisan db:seed

- #### Start the server:
  - php artisan serve

## Api Documentation
- You can find the full API documentation, including endpoint descriptions, request formats, and example responses, by visiting this link:
[API Documentation](https://documenter.getpostman.com/view/30531413/2sAYdmnTv7#6217032b-e56f-4e83-81d5-1217ce7864ee)


## Test Credentials
### Use the following test credentials to authenticate and access the API:

        - Email: test@astudio.com
        - Password: Test@123
