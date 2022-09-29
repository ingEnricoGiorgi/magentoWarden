#!/bin/bash

rm -rf var/generation
rm -rf var/cache

bin/magento maintenance:enable
bin/magento maintenance:disable
bin/magento config:show

https://app.magentowarden.test/

consumer key            gw0ovu3dywjwjtjapcsj69eu8ymszjtr
consumer secret         n78wpj2q73for53jcxzg1afpg3mb6jhx
access token            gzxr26do5ssy19oe0mfpy6y185lilpsk
access token secret     pk2ca1xyd9ob7f80wdf06boy4wclnl4o
