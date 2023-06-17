#!/bin/bash
enrico
enrico92@

rm -rf var/generation
rm -rf var/cache
rm -r pub/static/*/*
rm -r var/view_preprocessed/*
bin/magento module:enable --all

bin/magento setup:upgrade
bin/magento setup:static-content:deploy -f
bin/magento setup:di:compile
bin/magento cache:clean
bin/magento cache:flush

bin/magento admin:user:create
bin/magento deploy:mode:set developer
bin/magento cache:status
bin/magento cache:disable layout
bin/magento cache:disable block_html
bin/magento cache:disable full_page

bin/magento maintenance:enable
bin/magento maintenance:disable
bin/magento config:show

https://app.magentowarden.test/

enricog
consumer key            gw0ovu3dywjwjtjapcsj69eu8ymszjtr
consumer secret         n78wpj2q73for53jcxzg1afpg3mb6jhx
access token            gzxr26do5ssy19oe0mfpy6y185lilpsk
access token secret     pk2ca1xyd9ob7f80wdf06boy4wclnl4o

sudo composer self-update --2


ADMIN
consumer key            sb1ozm8ouofdrqslqdbb4qfd1vxbam96
consumer secret         tvm3rbkmkr6h4pgrnytmoyu4poh37kr3
access token            kf0u1cbbz0wonpsvu7qqw0en0f227313
access token secret     n2rtz0gxhtxx76yylkz076jjm4j3796b


bin/magento setup:install \
    --backend-frontname=backend \
    --amqp-host=rabbitmq \
    --amqp-port=5672 \
    --amqp-user=guest \
    --amqp-password=guest \
    --db-host=db \
    --db-name=magento \
    --db-user=magento \
    --db-password=magento \
    --search-engine=elasticsearch7 \
    --elasticsearch-host=elasticsearch \
    --elasticsearch-port=9200 \
    --elasticsearch-index-prefix=magento2 \
    --elasticsearch-enable-auth=0 \
    --elasticsearch-timeout=15 \
    --http-cache-hosts=varnish:80 \
    --session-save=redis \
    --session-save-redis-host=redis \
    --session-save-redis-port=6379 \
    --session-save-redis-db=2 \
    --session-save-redis-max-concurrency=20 \
    --cache-backend=redis \
    --cache-backend-redis-server=redis \
    --cache-backend-redis-db=0 \
    --cache-backend-redis-port=6379 \
    --page-cache=redis \
    --page-cache-redis-server=redis \
    --page-cache-redis-db=1 \
    --page-cache-redis-port=6379


bin/magento queue:consumers:start async.operations.all  //starta una coda su rabbit

lista moduli di terze parti con vulnerabilità
n98-magerun2.phar dev:module:security

code sniffer commands per vedere gli errori e fixarli -n nega i warning
1    php phpcs.phar -n /var/www/html/app/code/Customdb
#corregge in automatico il codice
2    php phpcbf.phar /var/www/html/app/code/Customdb
