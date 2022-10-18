<?php
namespace Customdb\Moduledb\Plugin;
//use Magento\Catalog\Model\Product;

class Product
{

    public function beforeSetTitle(\Customdb\Moduledb\Controller\Page\ExampleLogger $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";
        $title="ziocan";
		return [$title];
	}

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {

        $meta=$result/2;
        return $result+$meta;
    }

}
