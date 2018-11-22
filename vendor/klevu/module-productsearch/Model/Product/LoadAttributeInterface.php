<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 9/18/2018
 * Time: 6:56 PM
 */

namespace Klevu\Search\Model\Product;

/**
 * Interface LoadAttributeInterface
 * @package Klevu\Search\Model\Product
 */
interface LoadAttributeInterface
{
    /**
     * Add the Product Sync data to each product in the given list. Updates the given
     * list directly to save memory.
     *
     * @param array $products An array of products. Each element should be an array with
     *                        containing an element with "id" as the key and the product
     *                        ID as the value.
     *
     * @return $this
     */
    public function addProductSyncData(&$products);

    /**
     * Process product data if wannt to add any extra information from third party module
     * @param $product
     * @param $parent
     * @param $item
     * @return $this|mixed
     */
    public function processProductBefore(&$product,&$parent,&$item);

    /**
     * Process product data if wannt to add any extra information from third party module
     * @param $product
     * @param $parent
     * @param $item
     * @return $this|mixed
     */
    public function processProductAfter(&$product,&$parent,&$item);

    /**
     * Load product data uisng magento collection method
     * @param $product_ids
     * @return array
     *
     */
    public function loadProductDataCollection($product_ids);

    /**
     * Return a list of all Magento attributes that are used by Product Sync
     * when collecting product data.
     *
     * @return array
     */
    public function getUsedMagentoAttributes();

    /**
     * Returns an array of all automatically matched attributes. Includes defaults and filterable
     * in search attributes.
     *
     * @return array
     */
    public function getAutomaticAttributes();

}