<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tests\Model;


use Tanna\ProductBundle\Tests\BaseTest;

class ProductVariantTest extends BaseTest
{
    public function testExtraPriceGetterSetter()
    {

        $productVariantMock = $this->getDummyProductVariant();

        $productVariantMock->setExtraPrice(20);
        $this->assertEquals($productVariantMock->getExtraPrice(), 20);

    }

    public function testParentProductGetterSetter()
    {

        $productVariantMock = $this->getDummyProductVariant();
        $productMock = $this->getDummyProduct();

        $productVariantMock->setParentProduct($productMock);
        $this->assertEquals($productVariantMock->getParentProduct(), $productMock);

    }

    protected function setUp()
    {
        parent::setUp();
    }

}