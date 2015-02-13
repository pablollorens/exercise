# Testapplication

Write an application based on this skeleton which allows you to search for the offices in a given city

## Requirements:
- the application must make use of the Silex framework (included in this skeleton application)
- all data must be retrieved using AJAX
- you should be able to filter on 'is_open_on_sunday'
- the layout of the application should resemble the mockup in resources/mockup.png
- you may use an orm, but are not required to do so:
    - [doctrine](http://www.doctrine-project.org/)
    - [propel](http://propelorm.org/)
- you must use the data contained in resources/exercise_2015.sql, but the schema is optional
- you may use the twig template engine, but are not required to do so

## Bonus:
- as a bonus you could make it possible to search for the offices within a radius of x km of the city you are searching for.

## Project setup:
- fork the project
- clone your fork
- if you don't have composer installed on your system install it using the documentation on:
  https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx
- run `composer install` to install all dependencies
- optionally use the built in webserver of php5.4+ to run the project `php -S localhost:8080 -t web web/index.php`

## Disclaimer
- this is meant as an exercise application, in no way, shape or form should it be used in a production environment
