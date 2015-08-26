#Extending TannaProductBundle forms
You can easily extend an override all the bundle forms.
First, create your own form type
Then extend it by using the TannaProductBundle Type

```php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Tanna\ProductBundle\Form\Type\ProductType as BaseType;

class MyProductType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        //add here your own properties
        //example
        $builder->add('user');
    }
    
    /**
     * Set default
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Document\Product',
        ));
    }

    public function getName()
    {
        return 'product';
    }
}
```
