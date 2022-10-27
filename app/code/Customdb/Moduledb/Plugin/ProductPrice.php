<?php
namespace Customdb\Moduledb\Plugin;
use Magento\Catalog\Model\Product;
//use Magento\Catalog\Model\Product;
//https://app.magentowarden.test/customdb/page/examplelogger

class ProductPrice
{

    public $logger;
    public function __construct(\Customdb\Moduledb\Logger\Logger $logger) {
        $this->logger=$logger;
     }



  /* FUNZIONA CON IL CONTROLLER EXAMPLE LOGGER controlla il  di.xml
  */ public function beforeSetTitle(\Customdb\Moduledb\Controller\Page\ExampleLogger $subject, $title)
	{
        echo "Pokemon";
        $title = "prova";

		return $title;
	}

   /* public function beforeSetTitle(\Magento\Catalog\Model\Product $subject, $title)
	{
        echo "Pokemondue";
        $title = "provadue";

		return $title;
	}*/

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {

        $meta=$result/2;
        return $result+$meta;
    }

    public function aroundSave(\Magento\Catalog\Model\Product $subject, \Closure $proceed)
    {
        $returnValue= $proceed();
        if($returnValue) {
          (int) $productId = $subject->getId();
         (string) $name=$subject->getName();
         (string) $type=$subject->getTypeId();
         (int) $prezzo=$subject->getPrice();
         // (int)$valuta=$subject->getPriceInfo();
         // echo gettype($subject->getPriceInfo());
          //var_dump($valuta);
      //$this->logger->info('salvo il prodotto id: '.$productId. " name ".$name);
           $this->logger->info('salvo il prodotto id: '.$productId. " name ".$name." tipo: ".$type." prezzo: ".$prezzo." valuta: " .$valuta);
        }
        return $returnValue;
    }






  /*  public function aroundGetOptions(
        \Magento\ConfigurableProduct\Helper\Data $subject,
        callable $proceed,
        $currentProduct,
        $allowedProducts
    ) {
        $options = [];
        $allowAttributes = $subject->getAllowAttributes($currentProduct);

        foreach ($allowedProducts as $product) {
            $productId = $product->getId();
            foreach ($allowAttributes as $attribute) {
                $productAttribute = $attribute->getProductAttribute();
                $productAttributeId = $productAttribute->getId();
                $attributeValue = $product->getData($productAttribute->getAttributeCode());
                $options[$productAttributeId][$attributeValue][] = $productId;

                $options['index'][$productId][$productAttributeId] = $attributeValue;
            }
        }
        echo "aiuto";
        return $options;
    }*/
}
