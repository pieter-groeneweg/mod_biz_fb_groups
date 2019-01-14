<?php
/**
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );

$mod_biz_fb_groups = modBiz_fb_groups::getScript( $params );

require( JModuleHelper::getLayoutPath( 'mod_biz_fb_groups' ) );

?>