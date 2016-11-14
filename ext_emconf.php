<?php

/*********************************************************************
* Extension configuration file for ext "examples".
*
* Generated by ext 18-09-2014 12:30 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Core Documentation Code Examples',
  'description' => 'This extension packages a number of code examples from the Core Documentation',
  'category' => 'example',
  'author' => 'Documentation Team',
  'author_email' => 'documentation@typo3.org',
  'shy' => '',
  'dependencies' => '',
  'conflicts' => '',
  'priority' => '',
  'module' => '',
  'state' => 'alpha',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'author_company' => '',
  'version' => '0.7.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '7.6.0-7.99.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:32:{s:9:"ChangeLog";s:4:"870e";s:25:"class.tx_examples_tca.php";s:4:"4dbb";s:16:"ext_autoload.php";s:4:"6d41";s:12:"ext_icon.gif";s:4:"18c7";s:17:"ext_localconf.php";s:4:"9b37";s:14:"ext_tables.php";s:4:"d616";s:14:"ext_tables.sql";s:4:"f5cc";s:26:"icon_tx_examples_dummy.gif";s:4:"f3b6";s:26:"icon_tx_examples_haiku.gif";s:4:"737d";s:13:"locallang.xml";s:4:"13b7";s:33:"locallang_csh_txexampleshaiku.xml";s:4:"7fb4";s:16:"locallang_db.xml";s:4:"06dd";s:10:"README.txt";s:4:"71e5";s:7:"tca.php";s:4:"dd59";s:40:"Classes/Controller/DefaultController.php";s:4:"acd0";s:28:"Classes/ExtDirect/Server.php";s:4:"50d0";s:30:"Classes/Utilities/Viewport.php";s:4:"7838";s:43:"Classes/ViewHelpers/Be/HeaderViewHelper.php";s:4:"b149";s:40:"Resources/Private/Language/locallang.xml";s:4:"8600";s:37:"Resources/Private/Layouts/Module.html";s:4:"6f69";s:46:"Resources/Private/Templates/Default/Flash.html";s:4:"f524";s:38:"Resources/Public/Images/moduleIcon.png";s:4:"671c";s:42:"Resources/Public/JavaScript/Application.js";s:4:"6d2d";s:46:"components/navigation/javascript/Navigation.js";s:4:"624c";s:14:"doc/manual.sxw";s:4:"d907";s:26:"flexforms/flexform_ds1.xml";s:4:"28af";s:26:"flexforms/flexform_ds2.xml";s:4:"e9af";s:26:"flexforms/flexform_ds3.xml";s:4:"1011";s:26:"flexforms/flexform_ds4.xml";s:4:"985c";s:30:"res/images/japanese_garden.jpg";s:4:"7e0a";s:16:"static/setup.txt";s:4:"7528";s:38:"xclasses/class.tx_examples_scdbnew.php";s:4:"cd22";}',
  'suggests' =>
  array (
  ),
  'comment' => 'Code cleanup (in particular, make use of new license header).',
  'user' => 'docteam',
);

?>