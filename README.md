
# ikVelo

A simple Symfony learning project for our engineering school.

## Installation

### Requirements
Php >= 7.1, Symfony 3.1, Mysql, Apache2, Git

### Create files and folders

Create a new Symfony project (version 3.1) named ikVelo with :

    symfony new ikVelo 3.1

Next run these commands inside the project repository :

    git init
    git remote add origin https://github.com/EmtekDzn/ikVelo.git
    git fetch
    git checkout origin/master -ft

Then install the assets :

    php bin/console cache:clear
    php bin/console assets:install

Edit the *parameters.yml* file in *app/config/* to match your database configuration.
Here is a link to the [SQL script](https://pastebin.com/1v4yRrAw) for this project.
Make sure to read [this documentation](https://symfony.com/doc/3.1/setup/web_server_configuration.html) to set up your Apache site.

## Logical data model
![](http://image.noelshack.com/fichiers/2019/02/5/1547209925-logical-data-model.png)

### URL List
**Front :**

| URL | Description |
|--|--|
| sfn-etd1.cir3-frm-smf-ang-37/ | Page d'accueil |
| sfn-etd1.cir3-frm-smf-ang-37/2/profil/edit |Edition du profil|
|sfn-etd1.cir3-frm-smf-ang-37/deplacements/list/2|Liste des déplacements|
|sfn-etd1.cir3-frm-smf-ang-37/deplacementsjour/list/1|Détails du déplacement|
|sfn-etd1.cir3-frm-smf-ang-37/deplacements/create/2|Nouveau déplacement|
|sfn-etd1.cir3-frm-smf-ang-37/deplacements/edit/3|Modifier un déplacement non validé|

**Back :**

| URL | Description |
|--|--|
| sfn-etd1.cir3-frm-smf-ang-37/admindep/ | Page d'accueil |
| sfn-etd1.cir3-frm-smf-ang-37/admindep/users/ |Liste des utilisateurs|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1|Détails de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1/edit|Modification de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/new|Nouvel utilisateur|
| sfn-etd1.cir3-frm-smf-ang-37/admindep/services/ |Liste des services|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/services/1|Détails du service|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/services/1/edit|Modification du service|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/services/new|Nouveau service|
| sfn-etd1.cir3-frm-smf-ang-37/admindep/users/ |Liste des utilisateurs|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1|Détails de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1/edit|Modification de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/new|Nouvel utilisateur|
| sfn-etd1.cir3-frm-smf-ang-37/admindep/users/ |Liste des utilisateurs|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1|Détails de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1/edit|Modification de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/new|Nouvel utilisateur|
| sfn-etd1.cir3-frm-smf-ang-37/admindep/users/ |Liste des utilisateurs|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1|Détails de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/1/edit|Modification de l'utilisateur|
|sfn-etd1.cir3-frm-smf-ang-37/admindep/users/new|Nouvel utilisateur|
