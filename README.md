## Introduction
Laravel 5 + Zurb Foundation 6 (Boilerplate)


## Install
Grab the latest copy of laravel-fdn
```
git clone https://github.com/ompmega/laravel-fdn.git <project_name>
```

Go inside the newly created project
```
cd <project_name>
```

Install required node modules (includes foundation-sites)
```
npm install
```

Run Laravel Mix to make sure everything runs smoothly
```
npm run dev
```

And you're done! 🎉

## Configuration
Unlike the new way to install a laravel project using `laravel new <project_name>`, you'll have to manually configure this Laravel installation.

First, create the new .env file and change some of the settings to match your project.
```
cp .env.example .env
```

Then, generate an app key using:
```
php artisan key:generate
```

Finally, if you haven't already installed composer, run:
```
composer install
```

## License
Licensed under the [MIT license](http://opensource.org/licenses/MIT)