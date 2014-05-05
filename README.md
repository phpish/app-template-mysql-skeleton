```
git clone https://github.com/phpish/prj.git $new_prj
cd $new_prj
rm -fr .git
rm README.md
touch README.md
cp conf/development.conf.php conf/production.conf.php
php composer.phar self-update
php composer.phar install
```
