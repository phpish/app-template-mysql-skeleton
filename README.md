```
git clone git@github.com:sandeepshetty/prj.git $new_prj
cd $new_prj
rm -fr .git
rm README.md
touch README.md
cp conf/development.conf.php conf/production.conf.php
curl -s https://getcomposer.org/installer | php
php composer.phar install
```
