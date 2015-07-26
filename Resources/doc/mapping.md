#Mapping

TannaProductBundle mapping works with interfaces.
So, you must resolve in your config.yml the entity to use

## Doctrine mongodb Configuration
 
```yml
# app/config/config.yml
doctrine_mongodb:
    # ....
    resolve_target_documents:
            Tanna\ProductBundle\Model\ProductInterface: AppBundle\Document\Product
            Tanna\ProductBundle\Model\ProductVariantInterface: AppBundle\Document\ProductVariant
```
 
## Doctrine orm Configuration

```yml
# app/config/config.yml
doctrine:
    # ....
    orm:
        # ....
        resolve_target_entities:
            Tanna\ProductBundle\Model\ProductInterface: AppBundle\Document\Product
            Tanna\ProductBundle\Model\ProductVariantInterface: AppBundle\Document\ProductVariant

```
