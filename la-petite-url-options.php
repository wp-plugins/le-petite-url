<?php
if($_GET['hide_godaddy']) { le_petite_url_hide_godaddy($_GET['hide_godaddy']); }
if($_GET['hide_nag']) { le_petite_url_hide_nag($_GET['hide_nag']); }
$le_petite_url_permalink_prefix = get_option('le_petite_url_permalink_prefix');
$le_petite_url_permalink_custom = get_option('le_petite_url_permalink_custom');
$le_petite_url_permalink_domain = get_option('le_petite_url_permalink_domain');
$le_petite_url_domain_custom = get_option('le_petite_url_domain_custom');
$le_petite_url_hide_godaddy = get_option('le_petite_url_hide_godaddy');

if($le_petite_url_permalink_domain == "custom")
{
	$domain_prefix = 'http://'.$le_petite_url_domain_custom;
}
else
{
	$domain_prefix = get_bloginfo('url');
}

?>
<style type="text/css">
@import url('<?php echo plugins_url('la-petite-url.css',__FILE__); ?>');
</style>
<!-- Thanks to http://jqueryfordesigners.com/coda-slider-effect/ for the coda slider -->
<script src="<?php echo plugins_url('jquery.scrollTo-1.3.3.js',__FILE__); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('jquery.localscroll-1.2.5.js',__FILE__); ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo plugins_url('jquery.serialScroll-1.2.1.js',__FILE__); ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo plugins_url('coda-slider.js',__FILE__); ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo plugins_url('la-petite-url.js',__FILE__); ?>" type="text/javascript" charset="utf-8"></script>
<div class="wrap">
<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
    <div id="slider">    
        <ul class="navigation">
        	<?php if(get_option('le_petite_url_hide_nag') == "no") { ?>
            <li><a href="#laPetiteDonate">Donate</a></li>
            <?php } ?>
            <li><a href="#domain">Domain &amp; Prefix</a></li>
            <li><a href="#advanced">URL Generation</a></li>
            <li><a href="#auto">Advanced</a></li>
        </ul>
		<div class="scroll">
			<div class="scrollContainer">
				<?php if(get_option('le_petite_url_hide_nag') == "no") { ?>
				<div class="la-petite-wrapper panel" id="laPetiteDonate">
					<div class="la-petite-section-header">
						<h3>Donate to la petite url</h3>
					</div>
					<p><strong>Love la petite url?</strong> Why not <a href="http://lapetite.me/buy">buy a license</a>? It's only <strong>$5</strong>. Licensing la petite url will endow you with benefits including but not limited to:</p>
					<ul>
						<li>Support calls and emails totally getting answered</li>
						<li>Allowing the developer to buy essential items, like food</li>
						<li>(he will most likely spend your money on Maker's Mark)</li>
						<li>Removal of heavy $5 from bank account</li>
						<li>Huge amounts of good karma, if you're into that</li>
						<li>If not, maybe you'll just feel good about it?</li>
						<li>The confidence to crush your enemies</li>
					</ul>
					<p id="buy-button"><a href="?page=le-petite-url%2Fla-petite-url-options.php&amp;hide_nag=yes" class="cssbutton gray">Nah</a> <a id="buy-it" class="cssbutton blue" href="http://lapetite.me/buy">I'd like to buy la petite url</a></p>
				</div>
				<?php } ?>

				<div class="la-petite-wrapper panel" id="domain">
					<div class="la-petite-section-header">
						<h3>Domain &amp; URL Prefix</h3>
						<div class="upgrade-now">
							<p><a href="http://lapetite.me/buy">Support la petite url</a>  | <a href="http://getsatisfaction.com/extrafuture/products/extrafuture_la_petite_url">Help</a></p>
						</div>
					</div>
					
					<?php if($le_petite_url_hide_godaddy != "yes") { ?>
					<p id="godaddy"><strong>Want a shorter domain? <a href="https://hover.com/P2xc6SzR">Register one with Hover</a></strong>.</p>
					<?php } ?>
					
					<div class="la-petite-controls-group">
						<h3>Domain</h3>
						<p class="le_petite_url_permalink_domain"><label class="radio"><input name="le_petite_url_permalink_domain" type="radio" value="default" <?php if($le_petite_url_permalink_domain != "custom") { echo 'checked="checked"'; } ?> class="tog"  />Default (Main Domain)</label></p>
						<p class="le_petite_url_permalink_domain"><label class="radio"><input name="le_petite_url_permalink_domain" type="radio" value="custom" class="tog" <?php if($le_petite_url_permalink_domain == "custom") { echo 'checked="checked"'; } ?>/>Different Domain</label></p>
						
						<p id="custom-domain-input" <?php if($le_petite_url_permalink_domain != "custom") { echo 'style="display: none;"'; } ?>><label for="le_petite_url_domain_custom">Domain Name: </label><input name="le_petite_url_domain_custom" id="le_petite_url_domain_custom" style="width: 264px;" type="text" value="<?php if(isset($le_petite_url_domain_custom)) { echo $le_petite_url_domain_custom; } ?>" <?php if(!isset($le_petite_url_domain_custom)) { echo 'placeholder="example.com"'; } ?> class="regular-text code" /></p>
					</div>
					
					<div class="la-petite-controls-group">
						<h3>Prefix</h3>
						<p><label class="radio"><input name="le_petite_url_permalink_prefix" type="radio" value="default" <?php if($le_petite_url_permalink_prefix == "default") { echo 'checked="checked"'; } ?> class="tog"  /> Default (No Prefix)</label></p>
						<p><label class="radio"><input name="le_petite_url_permalink_prefix" type="radio" value="custom" class="tog" <?php if($le_petite_url_permalink_prefix != "default") { echo 'checked="checked"'; } ?>/>Custom Prefix</label></p>
						
						<p id="custom-prefix-input" <?php if($le_petite_url_permalink_prefix == "default") { echo 'style="display: none;"'; } ?>><?php echo $domain_prefix; ?><input name="le_petite_url_permalink_custom" style="width: 196px;" id="le_petite_url_permalink_custom" type="text" value="<?php echo $le_petite_url_permalink_custom; ?>" class="regular-text code" /></p>
					</div>
					<div class="la-petite-look-like">
						<h3>Your Short URLs Will Look Like</h3>
						<?php if($le_petite_url_permalink_prefix != "default") { $domain_prefix .= $le_petite_url_permalink_custom; } else { $domain_prefix .= '/'; } ?>
						<p><?php echo $domain_prefix; ?><?php echo le_petite_url_generate_string(5); ?></p>
					</div>
					<button type="submit" name="submit" class="la-petite-save-button cssbutton blue">Save Changes</button>
				</div>

				<div class="la-petite-wrapper panel" id="advanced">
					<div class="la-petite-section-header">
						<h3>URL Generation</h3>
						<div class="upgrade-now">
							<p><a href="http://lapetite.me/buy">Buy la petite url</a>  | <a href="http://getsatisfaction.com/extrafuture/products/extrafuture_la_petite_url">Help & Support</a></p>
						</div>
					</div>
					
					<label for="le_petite_url_length">Petite URL Length: </label>
				
					<input name="le_petite_url_length" id="le_petite_url_length" type="text" style="width: 35px;" value="<?php echo get_option('le_petite_url_length'); ?>" class="regular-text" />
				
					<label for="le_petite_url_use_lowercase" class="checkbox">
					<input name="le_petite_url_use_lowercase" type="checkbox" id="le_petite_url_use_lowercase" value="yes" <?php if(get_option('le_petite_url_use_lowercase') == "yes") { echo 'checked="checked"'; } ?> />
					Use lowercase letters (<code>a-z</code>)</label>
				
					<label for="le_petite_url_use_uppercase" class="checkbox">
					<input name="le_petite_url_use_uppercase" type="checkbox" id="le_petite_url_use_uppercase" value="yes" <?php if(get_option('le_petite_url_use_uppercase') == "yes") { echo 'checked="checked"'; } ?> />
					Use uppercase letters (<code>A-Z</code>)</label>
				
					<label for="le_petite_url_use_numbers" class="checkbox">
					<input name="le_petite_url_use_numbers" type="checkbox" id="le_petite_url_use_numbers" value="yes" <?php if(get_option('le_petite_url_use_numbers') == "yes") { echo 'checked="checked"'; } ?> />
					Use numbers (<code>0-9</code>)</label>
					
					<div class="la-petite-look-like">
						<h3>Your Generated URLs Will Look Like</h3>
						<p><?php echo le_petite_url_generate_string(5); ?></p>
					</div>
					
					<button type="submit" name="submit" class="la-petite-save-button cssbutton blue">Save Changes</button>
				</div>
					
				<div class="la-petite-wrapper panel" id="auto">
					<div class="la-petite-section-header">
						<h3>Auto-Detection</h3>
						<div class="upgrade-now">
							<p><a href="http://lapetite.me/buy">Buy la petite url</a>  | <a href="http://getsatisfaction.com/extrafuture/products/extrafuture_la_petite_url">Help & Support</a></p>
						</div>
					</div>

					<label for="le_petite_use_short_url" class="checkbox">
					<input name="le_petite_use_short_url" type="checkbox" id="le_petite_use_short_url" value="yes" <?php if(get_option('le_petite_use_short_url') == "yes") { echo 'checked="checked"'; } ?> />
					
					Use <a href="http://sites.google.com/a/snaplog.com/wiki/short_url" title="Learn about short_url: the short_url wiki">short_url</a></label>
					
					<label for="le_petite_use_shortlink" class="checkbox">
					<input name="le_petite_use_shortlink" type="checkbox" id="le_petite_use_shortlink" value="yes" <?php if(get_option('le_petite_use_shortlink') == "yes") { echo 'checked="checked"'; } ?> />
					Use <a href="http://microformats.org/wiki/rel-shortlink" title="Learn about rel=shortlink">shortlink</a></label>
					
					<label for="le_petite_url_track_hits" class="checkbox">
					<input name="le_petite_url_track_hits" type="checkbox" id="le_petite_url_track_hits" value="yes" <?php if(get_option('le_petite_url_track_hits') == "yes") { echo 'checked="checked"'; } ?> />
					
					Use <a href="http://lapetite.me">lapetite.me</a> hit tracking</label>
					
					<button type="submit" name="submit" class="la-petite-save-button cssbutton blue">Save Changes</button>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="le_petite_url_permalink_prefix,le_petite_url_permalink_custom,le_petite_url_use_lowercase,le_petite_url_use_uppercase,le_petite_url_use_numbers,le_petite_url_length,le_petite_url_permalink_domain,le_petite_url_domain_custom,le_petite_use_shortlink,le_petite_url_track_hits" />
	</form>
</div>