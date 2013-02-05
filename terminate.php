<?php
  require_once('AWSSDKforPHP/sdk.class.php');

  $ec2 = new AmazonEC2(array('default_cache_config' => '/tmp'));
  $ec2->set_region(REGION_APAC_NE1);
  $ec2->terminate_instances($argv[1]);
