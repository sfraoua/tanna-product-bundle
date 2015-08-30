<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tests\Model;


use Tanna\ProductBundle\Tests\BaseTest;

class ProductTest extends BaseTest
{
    public function testTrueHasVariant()
    {

        $productVariantMock = $this->getDummyProductVariant();
        $productMock = $this->getDummyProduct();

        $productMock->addVariant($productVariantMock);

        $this->assertTrue($productMock->hasVariant($productVariantMock));

    }

    public function testFalseHasVariant()
    {

        $productVariantMock = $this->getDummyProductVariant();
        $productMock = $this->getDummyProduct();

        $this->assertFalse($productMock->hasVariant($productVariantMock));

        $productMock->addVariant($productVariantMock);

        $this->assertTrue($productMock->hasVariant($productVariantMock));

    }

    public function testRemoveVariant()
    {

        $productVariantMock = $this->getDummyProductVariant();
        $productMock = $this->getDummyProduct();
        $productMock->addVariant($productVariantMock);

        $this->assertTrue($productMock->hasVariant($productVariantMock));
        $productMock->removeVariant($productVariantMock);
        $this->assertfalse($productMock->hasVariant($productVariantMock));

    }

    protected function setUp()
    {
        parent::setUp();
    }
}