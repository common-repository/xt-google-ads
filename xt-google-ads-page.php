<?php
if ($_POST['xt_google_ads_code']) {
	update_option ( 'xt_google_ads_code', ( string ) stripslashes($_POST ["xt_google_ads_code"]));
}
$ads_code = get_option('xt_google_ads_code');
$xt_google_ads_code = $ads_code?$ads_code:get_option('xt_google_ads_default');
?>
<div class=wrap>
		<u><h2>XT Google Ads Options</h2></u>
		<div style="float:right;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MWJXZM6HCFNQ4">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
		<div align="left">
			<br/> <a href="https://twitter.com/xtrsyz"
				class="twitter-follow-button" data-show-count="false"
				data-size="large">Follow @xtrsyz</a>
			<script>!function (d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (!d.getElementById(id)) {
                      js = d.createElement(s);
                      js.id = id;
                      js.src = "//platform.twitter.com/widgets.js";
                      fjs.parentNode.insertBefore(js, fjs);
                  }
              }(document, "script", "twitter-wjs");</script>

			<iframe
				src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fxtrsyz.org&amp;width=292&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=519929141369894"
				scrolling="no" frameborder="0"
				style="border: none; overflow: hidden; width: 292px; height: 62px;"
				allowTransparency="true"></iframe>
		</div>

		<div id="poststuff" class="metabox-holder has-right-sidebar">
<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
			<div style="float: left; width: 70%;">

				<br>
<div class="postbox">
	<h3>Google Adsense Options</h3>

	<div>
		<table class="form-table">

			<tr valign="top" class="alternate">
				<th scope="row" style="width: 32%;"><label><b>Google</b>
						Adsense Code
				</label></th>
				<td><textarea rows="6" style="width:100%;" id="styled" name="xt_google_ads_code"
					type="text" placeholder="Google Adsense Code"><?php echo $xt_google_ads_code; ?></textarea>
				</td>
			</tr>

		</table>
	</div>
</div>

<div class="submit">
<input type="submit" name="update_analytics" class="button-primary" value="<?php _e('Update options'); ?> &raquo;" />
</div>
</div>
</form>
</div>
</div>