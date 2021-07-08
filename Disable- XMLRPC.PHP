For DISABLE XMLRPC.PHP in WordPress 
If you use this code in .htaccess, smlrpc.php will be disabled from attack. If you need more help, feel free to contact with me. Thanks!


# DISABLE XMLRPC.PHP
<files xmlrpc.php>
Order allow,deny
Deny from all
</files>
# END DISABLE XMLRPC.PHP
