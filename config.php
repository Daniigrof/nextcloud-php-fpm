<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/nextcloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/nextcloud/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oc9odpf3qcwr',
  'passwordsalt' => '+xB31PXEnXjiTKvt37TtqQmNpBlZqe',
  'secret' => 'nCVcyFL8L1GuHe4LOPIIX+4v4bvEtiRTFO5LsMKnJrhuL7Jk',
  'trusted_domains' => 
  array (
    0 => 'danielmachine:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '16.0.4.1',
  'overwrite.cli.url' => 'http://danielmachine:8080/nextcloud/',
  'overwriteprotocol' => 'http',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'P@ssw0rd!',
  'installed' => true,
);
