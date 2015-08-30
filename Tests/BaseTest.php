<?php
namespace Tanna\ProductBundle\Tests;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
use Tanna\ProductBundle\Model\Product;
use Tanna\ProductBundle\Model\ProductVariant;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    const DUMMY_PRODUCT_CLASS = 'Tanna\ProductBundle\Tests\DummyProduct';
    const DUMMY_PRODUCT_VARIANT_CLASS = 'Tanna\ProductBundle\Tests\DummyProductVariant';
    const BASE_MANAGER_CLASS = 'Tanna\ProductBundle\Manager\BaseManager';
    const PRODUCT_MANAGER_CLASS = 'Tanna\ProductBundle\Manager\ProductManager';

    protected $manager;
    protected $om;
    protected $repository;

    protected function setUp()
    {
        if (!interface_exists('Doctrine\Common\Persistence\ObjectManager')) {
            $this->markTestSkipped('Doctrine Common has to be installed for this test to run.');
        }

        $this->om = $this->getMock('Doctrine\Common\Persistence\ObjectManager');
        $this->repository = $this->getMock('Doctrine\Common\Persistence\ObjectRepository');
    }

    protected function getDummyProduct($overrideMethods = false)
    {
        $builder = $this->getMockBuilder(static::DUMMY_PRODUCT_CLASS);
        if (!$overrideMethods) {
            $builder->setMethods(null);
        }
        return $builder->getMockForAbstractClass();
    }

    protected function getDummyProductVariant($overrideMethods = false)
    {
        $builder = $this->getMockBuilder(static::DUMMY_PRODUCT_VARIANT_CLASS);
        if (!$overrideMethods) {
            $builder->setMethods(null);
        }
        return $builder->getMockForAbstractClass();
    }
}


class DummyProduct extends Product
{
}

class DummyProductVariant extends ProductVariant
{
}
