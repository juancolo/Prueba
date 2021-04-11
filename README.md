<p align="center"><a href="https://www.nexura.com" target="_blank"><img src="http://www.shareit.com.co/Portafolio/nexura%20logo.jpg"></a>
</p>
<p align="center">
</p>

## About this project

Here is the Nexura application test for a PHP developer.

Here is ann application to create, read, update and delete employee of a company. All that you will find is developed into the laravel 8
framework.

Important: here you will find a system where all the users belongs ton an area, and have a rol into the company.

We recommend you to install the laravel framework to run all the features enjoy all the code, here is the oficial
references to their web. [Instalación Laravel 8](https://laravel.com/docs/8.x/installation)

## Requirements
    PHP 7.4+ required
    Mysql 5.7+ required
    Node 8+
    Laravel 8


- Clone repository `git clone https://github.com/juancolo/Prueba.git`


- Go to the folder were you clone `/cd/prueba`


- copy the `.env.example` file and rename it `.env` open it and change the environment variables as you need to 
work with your database.

  DB_CONNECTION=mysql
  
  DB_HOST=127.0.0.1
  
  DB_PORT=3306
  
  DB_DATABASE=nexura
  
  DB_USERNAME=root
  
  DB_PASSWORD=password


- Use the package manager composer and npm to install:
  
    -`npm install`        
    -`composer install`
  
    
- Run all the migrations and seeders of the web application.
    -`php artisan migrate:fresh --seed`
  

- The las step is run -`php artisan serve`


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
