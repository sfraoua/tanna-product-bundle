#Installing TannaProductBundle
##Add TannaProductBundle to your project :
Download the package by adding the dependency in your composer.yml
```composer
    "require": {
            "tanna/product-bundle": "dev-master",
            "doctrine/mongodb-odm": "1.0.*@dev",
            "doctrine/mongodb-odm-bundle": "3.0.*@dev"
        },
```
##Update the kernel:
In your app/AppKernel.php add the following line
```php
            new Tanna\Bundle\ProductBundle\TannaProductBundle()
```
##Import ProductBundle routing :
In your app/config/routing.yml add the following lines
```yml
tanna_product_bundle_routing:
    resource: "@TannaProductBundle/Resources/config/routing.yml"
    prefix:   /
```
