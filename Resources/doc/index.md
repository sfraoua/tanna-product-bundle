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
##Creating Entities / Documents
You must extend the TannaProductBundle Models.

The product entity/document
```php
    use Tanna\ProductBundle\Model\Product as BaseProduct;
    /**
     * Your entity/document
     */
    class Product extends BaseProduct
    {
        protected $id;
    }
```
The product variant entity/document
```php
    use Tanna\ProductBundle\Model\ProductVariant as BaseProductVariant;
    /**
     * Your entity/document
     */
    class ProductVariant extends BaseProductVariant
    {
        protected $id;
    }
```


##Configuration:
In your app/config/config.yml add the following lines
```yml
# app/config/config.yml
tanna_product:
    db_driver: orm # Valid values are 'orm' or 'mongodb'
    #Declaring your enities/documents
    class:
        product: YourProject/Entity/YourProductEntity
        product_variant: YourProject/Entity/YourProductVariantEntity
        #TannaProductBundle suppose that all crud operations will be made by a logged user.
        user: YourProject/Entity/YourUserEntity
```
