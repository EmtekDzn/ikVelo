# ikVelo

A simple Symfony learning project for our engineering school.

# Installation

### Requirements
Php >= 5.6, Symfony 3.1, Mysql, Apache2, Git

### Create files and folders

Create a new Symfony project (version 3.1) named ikVelo with :

    symfony new ikVelo 3.1

Next up, clone the repository :

    git clone https://github.com/EmtekDzn/ikVelo.git

Then run this commands inside the project folder to install the assets :

    php bin/console cache:clear
    php bin/console assets:install

Make sur to read [this documentation](https://symfony.com/doc/3.1/setup/web_server_configuration.html) to set up your Apache site.
Edit the *parameters.yml* file in *app/config/* to match your configuration.
