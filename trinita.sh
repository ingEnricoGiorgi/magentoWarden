#!/bin/bash

bin/magento setup:upgrade
bin/magento setup:di:compile 
bin/magento setup:static-content:deploy -f
bin/magento cache:clean
bin/magento cache:flush