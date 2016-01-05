<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'*' => array(
	    'omitScriptNameInUrls' => true,
	),

  'localhost' => array(
    'devMode' => true,
    'siteUrl' => 'http://localhost:1337/',
    'environmentVariables' => array(
      'basePath' => '/regnet-craft/html/',
      'baseUrl'  => 'http://localhost:1337/',
    ),
    'testToEmailAddress' => 'dev@email.com',
  ),

  // Use IP address of your droplet below
  '188.166.67.105' => array(
    'siteUrl' => 'http://188.166.67.105/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://188.166.67.105/',
    )
  )
);