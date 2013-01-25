```
git clone git@github.com:sandeepshetty/prj.git new_prj
cd new_prj
rm -fr .git
cp conf/development.conf.php conf/production.conf.php
curl -s https://getcomposer.org/installer | php
```