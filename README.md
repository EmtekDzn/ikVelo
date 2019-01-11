# ikVelo

A simple Symfony learning project for our engineering school.

# Installation

### Requirements
Php >= 7.1, Symfony 3.1, Mysql, Apache2, Git

### Create files and folders

Create a new Symfony project (version 3.1) named ikVelo with :

    symfony new ikVelo 3.1

Next run this set of instructions inside the project repository :

    git init
    git remote add origin https://github.com/EmtekDzn/ikVelo.git
    git fetch
    git checkout origin/master -ft

Then install the assets :

    php bin/console cache:clear
    php bin/console assets:install

Edit the *parameters.yml* file in *app/config/* to match your database configuration.
Make sure to read [this documentation](https://symfony.com/doc/3.1/setup/web_server_configuration.html) to set up your Apache site.

