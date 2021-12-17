# laravel-shopify

### Requirments 

* PHP - 7.4
* Laravel - 8


### Configuration

##### copy .env.example .env

##### Run

```bash
composer install
php artisan migrate
```


#### Shopify App

In your app's settings on your Shopify Partner dashboard, you need to set the callback URL to be:

```bash
https://(your-domain).com/
```

And the `redirect_uri` to be:

```bash
https://(your-domain).com/authenticate
```

The `callback URL` will point to the home route, while the `redirect_uri` will point to the authentication route.

NOTE:Those two URLs must start with https, otherwise you will get an error message:
"Oauth error invalid_request: The redirect_uri is not whitelisted"


#### The required Fileds are in .env file
```bash
SHOPIFY_API_KEY={your shopify api key}
SHOPIFY_API_SECRET={your shopify secret}
```

#### More information

[You can review for a better understanding](https://github.com/osiset/laravel-shopify/wiki).
