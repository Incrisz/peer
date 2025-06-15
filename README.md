# Peernectics Company Website

## Installation Guide

Follow these steps to install and run the application on your local machine or deploy online server:


## Install Dependencies

```
composer install
```

```
npm install
```

## or if you use yarn

```
 yarn install
```

## Setting Up Environment Variables

```
copy .env.example to .env
```
## Open the .env file in your favorite text editor and replace the database, email, and other configuration values to match your local setup.


## Generate Key
And run this command to generate key

```
php artisan key:generate
```

## Create a mysql database using phpmyadmin or anyother client and configure those details in your env file

```
DB_USERNAME=YOUR_DATABASE_USERNAME
```

## Running Migrations

After setting up the environment variables, run the following command to create the tables in the database:

```
php artisan migrate
```

## Seeding fake data

```
php artisan db:seed --class=VoyagerDatabaseSeeder
```


## Compiling Assets

Run the following command to compile the assets:

```
npm run dev or npm run build
```


## Starting the Application

To start the Laravel server, run the following command:

```
php artisan serve
```

## Admin Login details

Admin

```
email => admin@admin.com
password => password

```

## NOTE: Before pushing to Dev, run 'npm run build' to push any new assets.# peer
