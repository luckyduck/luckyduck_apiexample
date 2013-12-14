<?php

class Luckyduck_Apiexample_Model_Api2_Featuredproduct_Rest_Guest_V1
    extends Luckyduck_Apiexample_Model_Api2_Featuredproduct
{
    public function _retrieveCollection()
    {
        $collection = Mage::getModel('catalog/product')->getCollection();
        $collection->addAttributeToSelect('*');
        // $collection->[..your filter for featured products here..]

        $featuredProducts = array();
        foreach ($collection as $product) {
            $featuredProducts[] = array(
                'entity_id' => $product->getId(),
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'sku' => $product->getSku()
            );
        }

        return $featuredProducts;
    }
}