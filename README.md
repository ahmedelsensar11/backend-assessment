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
  - cd backend-assessment

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



## Technical Notes
- This project utilizes the [Union architecture](https://medium.com/expedia-group-tech/onion-architecture-deed8a554423) to expose API CRUD endpoints. 
- The Union architecture is employed as a pragmatic and streamlined approach, favoring simplicity over abstraction layers.
- In this implementation: No repository layer is included, Data access and business logic are directly managed within the service layer or controllers. This design minimizes the overhead of managing an additional abstraction and allows for faster, more direct implementation of CRUD operations.
- I am using spatie query laravel to allow regular filtering and HasWithAttributeFilters trait to manage dynamic EAV
- each model has own filters that can filter on it
- the project model cruds allowing regular & dynamic filters 
  - example:`https://backend-assessment.test/api/projects?filter[name]=new website&filter[search]=project&filter[department]=IT&filter[start_date][from]=2025-03-16&filter[start_date][to]=2025-03-25&filter[type]=offline`


## Test Credentials
### Use the following test credentials to authenticate and access the API:

        - Email: test@astudio.com
        - Password: Test@123
