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
tanna_product_bundle_routing:
    resource: "@TannaProductBundle/Resources/config/routing.yml"
    prefix:   /
```
