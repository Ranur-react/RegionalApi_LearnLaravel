<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel Project

<div align="justify">
This is a project which I used to learn Microservice terms in the software development system with Laravel. Below of documentation is a step of how to create a project based on the function of the purpose in the Laravel.
</div>

### A. API

-   Create Project
-   Create Database Migration Attribute
-   Create API Reference

1 ) Create Project - Type the below script in the `httdoc$` folder server location.
`       compose create-project laravel/laravel projectName
      `

    - If you have an issue with folder permission being refused, try configuring the folder and all files permit for these projects with the command below.
        ```
        chwon -R 777 projectName/*
        chmod -R 777 projectName/*
        ```
    -  configure ``.env`` file equal with your mysql environmnet like these:

        ````env

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=8889
        DB_DATABASE=laravel
        DB_USERNAME=root
        DB_PASSWORD=root
        ````
        *above env saple is what i use in the local environment MAMP Mysql Server in the MacBook Device using DBEaver as an DBMS Remote Tools for test*

2 ) Create Migration Attribute. - Open the last date series of these folder `database/migrations/` and put the below attribute in `up()` function adjust your project what the table want you put in the database after migration.

    ````
        public function up(): void
    {
        //tabel cities attributewill insert in the new database after migration

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('citieName',100);
            $table->string('nationalId',100);
            $table->timestamps();
        });
    //end table cities attribute
    }

    ````
