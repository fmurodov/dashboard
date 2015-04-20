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

#### clone repository
```bash
cd /var/www
git clone https://github.com/firdavsich/dashboard.git
cd dashboard
```
#### make executable dashboard/run.sh and add to sudoers
```bash
chmod +x run.sh
echo "##dashboard
www-data ALL=(ALL:ALL) NOPASSWD:/var/www/dashboard/run.sh" >> /etc/sudoers
```
#### make symlink block list file to squid directory
```bash
ln -s mod_squid/deny.txt /etc/squid3/deny.txt
```
#### add acl to /etc/squid3/squid.conf

`acl block_sites url_regex -i "/etc/squid3/limit/deny.txt"`  
`http_access deny localnet block_sites`




