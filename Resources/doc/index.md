#TannaProductBundle
TannaProductBundle helps you to create and manage products easily in your e-shop.
This bundle works with Doctrine orm and odm for mongoDb.

To use mongo db as database driver => http://symfony.com/fr/doc/current/bundles/DoctrineMongoDBBundle/index.html

#Installing TannaProductBundle

##Add TannaProductBundle to your project :
Download the package by adding the dependency in your composer.yml
```composer
    "require": {
            "tanna/product-bundle": "dev-master"
        },
```
##Update the kernel:
In your app/AppKernel.php add the following line
```php
            new Tanna\ProductBundle\TannaProductBundle()
```
##Import ProductBundle routing :
In your app/config/routing.yml add the following lines
```yml
# app/config/routing.yml
tanna_product_bundle_routing:
    resource: "@TannaProductBundle/Resources/config/routing.yml"
    prefix:   /
```
##Database config:
In your app/config/config.yml add the following lines
```yml
# app/config/config.yml
tanna_product:
    db_driver: orm # Valid values are 'orm' or 'mongodb'
    class:
        product: YourProject/Entity/YourProductEntity
```
