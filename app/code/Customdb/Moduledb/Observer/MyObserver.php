<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * @category  PHP
 * @package   Customdb_Moduledb
 * @author    enricog <enrico.giorgi92@gmai.com>
 * @copyright 2022 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

namespace MyCompany\MyModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * @category  PHP
 * @package   Customdb_Moduledb
 * @author    enricog <enrico.giorgi92@gmai.com>
 * @copyright 2022 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class MyObserver implements ObserverInterface
{


    /**
     * Constructor
     */
    public function __construct()
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }//end __construct()


    /**
     * Execute
     *
     * @param Observer $observer comment about this variable
     *
     * @return $this
     */
    public function execute(Observer $observer)
    {

        $displayText = $observer->getData('myEventData');
        echo $displayText->getText()." - Event </br>";
        $displayText->setText('Execute event successfully.');

        return $this;

    }//end execute()


}//end class
