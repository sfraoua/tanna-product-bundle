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

To deal with multi-language websites TannaProduct don't add a translatable properties like name or description...
The Bundle models implements ``Tanna\ProductBundle\Model\TranslatableInterface``, so when you extend a model, you must 
implement all the ``TranslatableInterface``methods.

You can put you translation logic in those methods.
###The product

```php
    use Tanna\ProductBundle\Model\Product as BaseProduct;
    /**
     * Your entity/document
     */
    class Product extends BaseProduct
    {
        protected $id;
            /**
             * Deal with you local here and return the product name
             * @return string
             */
            public function getLocaleName()
            {
               return 'Translated Product name';
            }
        
            /**
             *  Deal with you local here and return the product description
             *
             * @return string
             */
            public function getLocaleDescription()
            {
               return 'My product variant description';
            }
        
            /**
             *  Deal with you local here and return the product variant page title
             *
             * @return string
             */
            public function getLocalePageTitle()
            {
                return 'My product page title';
            }
        
            /**
             *  Deal with you local here and return the product page meta-description
             *
             * @return string
             */
            public function getLocaleMetaDescription()
            {
                 return 'My product page meta-description';
            }
    }
```

###The product variant
```php
    use Tanna\ProductBundle\Model\ProductVariant as BaseProductVariant;
    /**
     * Your entity/document
     */
    class ProductVariant extends BaseProductVariant
    {
        protected $id;
        /**
                     * Deal with you local here and return the product variant name
                     * @return string
                     */
                    public function getLocaleName()
                    {
                       return 'Translated product variant name';
                    }
                
                    /**
                     *  Deal with you local here and return the product variant description
                     *
                     * @return string
                     */
                    public function getLocaleDescription()
                    {
                       return 'My product variant description';
                    }
                
                    /**
                     *  Deal with you local here and return the product variant page title
                     *
                     * @return string
                     */
                    public function getLocalePageTitle()
                    {
                        return 'My product variant page title';
                    }
                
                    /**
                     *  Deal with you local here and return the product variant page meta-description
                     *
                     * @return string
                     */
                    public function getLocaleMetaDescription()
                    {
                         return 'My product variant page meta-description';
                    }
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
