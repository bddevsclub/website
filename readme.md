## BD Devs Club Website

### Setup

This is a typical Laravel 5.1 app. I recommend you create a Virtual Host for it. 

Create a `.env` file. Use the example `.env.example` file to create it. Add your configurations here. You must configure a database connection before proceeding. 

### Data Migration and Seeding

		php artisan migrate
		php artisan db:seed
		

### Common Conventions

* Use implicit controllers, keep the routes.php file clean.
* Create your models inside `App\Models` namespace.
* Views should be placed inside directories dedicated to each controller. For example all the views for `IndexController` should be inside `index` directory under the main directory. 
* Assets should go inside `public/static`.