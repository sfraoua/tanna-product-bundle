<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Tests\Manager;
use Doctrine\ORM\EntityRepository;
use Tanna\ProductBundle\Manager\ProductManager;
use Tanna\ProductBundle\Model\Product;

class ProductManagerTest extends \PHPUnit_Framework_TestCase
{
    const PRODUCT_CLASS = 'Tanna\ProductBundle\Tests\Manager\DummyProduct';

    private $manager;
    private $om;
    private $repository;

    public function testGetAllProducts()
    {
        $this->repository->expects($this->once())->method('findAll')->will($this->returnValue(array()));
        $this->manager->getAll();
    }

    public function testDoFlush()
    {
        $product = $this->getProduct();
        $this->om->expects($this->once())->method('persist')->with($this->equalTo($product));
        $this->om->expects($this->once())->method('flush');
        $this->manager->doFlush($product);
    }

    private function getProduct()
    {
        return $this->getMockBuilder('Tanna\ProductBundle\Model\Product')
            ->getMockForAbstractClass();
    }

    protected function setUp()
    {
        if (!interface_exists('Doctrine\Common\Persistence\ObjectManager')) {
            $this->markTestSkipped('Doctrine Common has to be installed for this test to run.');
        }

        $this->om = $this->getMock('Doctrine\Common\Persistence\ObjectManager');
        $this->repository = $this->getMock('Doctrine\Common\Persistence\ObjectRepository');

        $this->om->expects($this->any())
            ->method('getRepository')
            ->with($this->equalTo(static::PRODUCT_CLASS))
            ->will($this->returnValue($this->repository));

        $this->manager = $this->getProductManager();
    }

    private function getProductManager()
    {
        return new ProductManager($this->om, static::PRODUCT_CLASS);
    }

}
class DummyProduct extends Product
{
}
