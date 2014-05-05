```
composer -sdev --prefer-dist create-project phpish/skeleton new_prj
cd new_prj
rm README.md
cp conf/development.conf.php conf/production.conf.php
php composer.phar self-update
php composer.phar install
```
