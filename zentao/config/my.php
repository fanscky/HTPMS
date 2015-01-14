<?php
$config->installed       = true;
$config->debug           = false;
$config->requestType     = 'PATH_INFO';
$config->db->host        = '127.0.0.1';
$config->db->port        = '3308';
$config->db->name        = 'zentao';
$config->db->user        = 'root';
$config->db->password    = '123456';
$config->db->prefix      = 'zt_';
$config->webRoot         = getWebRoot();
$config->default->lang   = 'zh-cn';
$config->mysqldump       = dirname(dirname(dirname(__FILE__))) . '\mysql\bin\mysqldump.exe';
