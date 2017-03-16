
<?php
class Webgraphee_Alternate_Model_Observer
{
    public function alternateLinks()
    {
        $headBlock = Mage::app()->getLayout()->getBlock('head');
        $stores = Mage::app()->getStores();
        $product = Mage::registry('current_product');
        $category = Mage::registry('current_category');
        if ($headBlock) {
            foreach ($stores as $store) {
                if ($product) {
                    $category ? $categoryId = $category->getId() : $categoryId = null;
                    $url = $store->getBaseUrl() . Mage::helper('webgraphee_alternate')->rewrittenProductUrl($product->getId(), $categoryId, $store->getId());
                } else {
                    //$store->getCurrentUrl();
                    //modification to work with non-product pages
                    $url = $store->getUrl('', array(
                      '_current' => true,
                      '_use_rewrite' => true
                      )
                    );
                }
                $storeCode = substr(Mage::getStoreConfig('general/locale/code', $store->getId()), 0, 2);
                $headBlock->addLinkRel('alternate"' . ' hreflang="' . $storeCode, $url);
            }
        }
        return $this;
    }
}