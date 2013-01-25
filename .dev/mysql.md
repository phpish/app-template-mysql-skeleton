
### Create database and user:
```bash
$ mysql -u root -p
mysql> CREATE DATABASE project;
mysql> GRANT ALL PRIVILEGES ON project.* TO 'project'@'localhost' IDENTIFIED BY 'password';
mysql> FLUSH PRIVILEGES;
```

### Create Tables:
```sql


```