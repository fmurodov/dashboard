# dashboard
### Linux server admin panel 

Pure-FTPd admin:
 * create users
 * delete users
 * change password
 * restart service
 
Squid admin:
  * add url or regex to deny_list
  * del from deny_list
  * reload service
  * restart service

## setup
```bash
echo "##dashboard
www-data ALL=(ALL:ALL) NOPASSWD:/var/www/dashboard/mod_ftp/ftp-pw.sh
www-data ALL=(ALL:ALL) NOPASSWD:/var/www/dashboard/mod_squid/squid_serv.sh" >> /etc/sudoers
```



