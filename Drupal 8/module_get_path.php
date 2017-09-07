<?php
/**
 * Created by PhpStorm.
 * User: pavlik
 * Date: 07.09.17
 * Time: 12:44
 */
$module_handler = Drupal::service('module_handler');
$path = $module_handler->getModule('your_module')->getPath();
