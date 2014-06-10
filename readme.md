## Laravel 4.2 multi app setup

### Installation
***Clone git repository***

`git clone https://github.com/bura86/laravel-4-2-multi-app.git`

***Download Dependencies***

`cd  laravel-4-2-multi-app
composer install`


### Application update
**laravel-4-2-multi-app is currently setup for two applications: *blog and *admin. There are two folders inside of apps folder, for each app.
Models are extracted outside of both applications since they are the same for blog and admin, which use the same database.
All model classes are located inside of *apps/classes/models folder.

In order to extend the project with more applications you'll have to add another folder inside of *apps folder and update **composer.json file with additional paths.
Add paths based on the current ones.

