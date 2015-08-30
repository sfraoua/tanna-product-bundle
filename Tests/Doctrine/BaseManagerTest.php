<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Tests\Doctrine;
use Doctrine\ORM\EntityRepository;
use Tanna\ProductBundle\Tests\BaseTest;

class BaseManagerTest extends BaseTest
{


    public function testGet()
    {
        $id = 45;
        $this->repository->expects($this->once())->method('find')->with($this->equalTo($id))->will($this->returnValue(null));
        $result = $this->manager->get($id);
        $this->assertEquals($result, null);
    }

    public function testGetAll()
    {
        $this->repository->expects($this->once())->method('findAll')->will($this->returnValue([]));
        $result = $this->manager->getAll();
        $this->assertEquals($result, []);
    }

    public function testDoFlush()
    {
        $product = $this->getDummyProduct();
        $this->om->expects($this->once())->method('persist')->with($this->equalTo($product));
        $this->om->expects($this->once())->method('flush');
        $this->assertEquals($product, $this->manager->doFlush($product));
    }


    protected function setUp()
    {

        parent::setUp();

        $this->om->expects($this->any())
            ->method('getRepository')
            ->with($this->equalTo(static::DUMMY_PRODUCT_CLASS))
            ->will($this->returnValue($this->repository));

        $this->manager = $this->getBaseManager();
    }

    private function getBaseManager()
    {
        return $this->getMockBuilder(static::BASE_MANAGER_CLASS)
            ->setConstructorArgs([$this->om, static::DUMMY_PRODUCT_CLASS])
            ->setMethods(null)
            ->getMockForAbstractClass();
    }


}
