## Laravel 4.2 multi app setup


### Installation ###
***Clone git repository***
```javascript
git clone https://github.com/bura86/laravel-4-2-multi-app.git
```

***Download Dependencies***
```javascript
cd  laravel-4-2-multi-app
composer install
```


### Application update ###
**laravel-4-2-multi-app** is currently setup for two applications: *blog* and *admin*. There are two folders inside of apps folder, for each app.
Models are extracted outside of both applications since they are the same for blog and admin, which use the same database.
All model classes are located inside of *apps/classes/models* folder.

In order to extend the project with more applications you'll have to add another folder inside of *apps* folder and update **composer.json** file with additional paths.
Add paths based on the current ones.

If there's a need to use some different models, not the common ones in *apps/classes/models*, then you'll have to configure model paths in */myAppName/start/global.php* file.

#### Note ####
Every time you add a new class, rename the existing one, change the file structure or add/change the namespace you'll have to update the composer by running `composer update` command.
In order to enable laravel to work properly don't forget to edit storage permissions: `chmod -R 775 $MY_APP_PATH/laravel-4-2-multi-app/apps/blog/storage`



### Usage examples ###
Application structure like this requires a namespace usage to differentiate one app from another. If you want to use some class without namespace then you have to call that class with "\" prefix which tells to laravel to look in the global namespace. There are some example files in the code so you could see what is all about.
In the *apps/blog/routes.php* and *apps/admin/routes.php* files there are already some paths specified to show how to use controllers, models and some general classes in the application. Also you have a test classes in *apps/classes* and *apps/classes/models* folders just to see how access these files from the controller.

Enjoy :)