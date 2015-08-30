<?php
namespace Tanna\ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ProductType extends AbstractType
{
    private $class;

    /**
     * @param string $class The user Product class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('description');
        $builder->add('price');
        $builder->add('title');
        $builder->add('isActive');
        $builder->add('isAvailable');
        $builder->add('metaDescription');
        $builder->add('Send', 'submit');
    }

    /**
     * Set default
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
        ));
    }

    public function getName()
    {
        return 'tanna_product_product';
    }
}