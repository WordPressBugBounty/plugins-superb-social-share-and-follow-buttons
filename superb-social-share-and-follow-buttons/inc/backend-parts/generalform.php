<?php
defined('ABSPATH') || exit;
?>
<div class="spbsm-follow-wrapper">
	<h2><?php esc_html(sprintf(/* translators: %s: button type */__('%s: Shortcode', 'superb-social-share-and-follow-buttons'), $spbsm_currentButtons)); ?></h2>
	<div class="short-code-container">
		<div class="short-code-container-explanation">
			<p class="headline-description"><?php esc_html(sprintf(/* translators: %s: button type */__('Copy & paste the shortcode below to show the %s.', 'superb-social-share-and-follow-buttons'), strtolower($spbsm_currentButtons))); ?></p>
		</div>
		<div class="short-code-container-inner">
			<span class="short-code-text"><?php echo esc_html__("Shortcode", 'superb-social-share-and-follow-buttons'); ?>:</span>
			<span class="short-code-result">[<?php echo esc_html($spbsm_currentsc); ?>]</span>
		</div>
	</div>

	<hr>



	<h2><?php echo esc_html(sprintf(/* translators: %s: button type */__('%s: Posts & Pages', 'superb-social-share-and-follow-buttons'), $spbsm_currentButtons)); ?></h2>
	<p class="headline-description"><?php echo esc_html(sprintf(/* translators: %s: button type */__('Choose where you want the social media %s to display on posts and pages.', 'superb-social-share-and-follow-buttons'), strtolower($spbsm_currentButtons))); ?></p>
	<table>
		<tr>
			<td>
				<?php echo esc_html__("Start of Posts", 'superb-social-share-and-follow-buttons'); ?>
			</td>
			<td>
				<input type="hidden" value="0" name="general[posts_addAtStart]">
				<input name="general[posts_addAtStart]" type="checkbox" <?php echo ($spbsm_positionSettings['posts_addAtStart'] == 1 ? 'checked' : '') ?>>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo esc_html__("End of Posts", 'superb-social-share-and-follow-buttons'); ?>
			</td>
			<td>
				<input type="hidden" value="0" name="general[posts_addAtEnd]">
				<input name="general[posts_addAtEnd]" type="checkbox" <?php echo ($spbsm_positionSettings['posts_addAtEnd'] == 1 ? 'checked' : '') ?>>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo esc_html__("Start of Pages", 'superb-social-share-and-follow-buttons'); ?>
			</td>
			<td>
				<input type="hidden" value="0" name="general[pages_addAtStart]">
				<input name="general[pages_addAtStart]" type="checkbox" <?php echo ($spbsm_positionSettings['pages_addAtStart'] == 1 ? 'checked' : '') ?>>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo esc_html__("End of Pages", 'superb-social-share-and-follow-buttons'); ?>
			</td>
			<td>
				<input type="hidden" value="0" name="general[pages_addAtEnd]">
				<input name="general[pages_addAtEnd]" type="checkbox" <?php echo ($spbsm_positionSettings['pages_addAtEnd'] == 1 ? 'checked' : '') ?>>
			</td>
		</tr>
	</table>

	<hr>

	<h2><?php echo esc_html(sprintf(/* translators: %s: button type */__('%s: Floating Sidebar', 'superb-social-share-and-follow-buttons'), $spbsm_currentButtons)); ?></h2>
	<p class="headline-description"><?php echo esc_html(sprintf(/* translators: %s: button type */__('Choose settings for the social media %s floating sidebar.', 'superb-social-share-and-follow-buttons'), strtolower($spbsm_currentButtons))); ?></p>
	<table>
		<tr>
			<td>
				<?php echo esc_html__("Floating Sidebar", 'superb-social-share-and-follow-buttons'); ?>
			</td>
			<td>
				<select name="floatingSidebar">
					<option value="0" <?php echo ($spbsm_positionSettings['floatingSidebar'] == 0 ? 'selected' : '') ?>><?php echo esc_html__("Off", 'superb-social-share-and-follow-buttons'); ?></option>
					<option value="1" <?php echo ($spbsm_positionSettings['floatingSidebar'] == 1 ? 'selected' : '') ?>><?php echo esc_html__("Left Center", 'superb-social-share-and-follow-buttons'); ?></option>
					<option value="2" <?php echo ($spbsm_positionSettings['floatingSidebar'] == 2 ? 'selected' : '') ?>><?php echo esc_html__("Right Center", 'superb-social-share-and-follow-buttons'); ?></option>
					<option value="3" <?php echo ($spbsm_positionSettings['floatingSidebar'] == 3 ? 'selected' : '') ?>><?php echo esc_html__("Bottom Right", 'superb-social-share-and-follow-buttons'); ?></option>
					<option value="4" <?php echo ($spbsm_positionSettings['floatingSidebar'] == 4 ? 'selected' : '') ?>><?php echo esc_html__("Bottom Left", 'superb-social-share-and-follow-buttons'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php echo esc_html__("Background color", 'superb-social-share-and-follow-buttons'); ?></td>
			<td><a href="<?php echo esc_url('https://superbthemes.com/plugins/social-media-share-and-follow-buttons/') ?>" target="_blank"><img src="<?php echo esc_url($this->base_url . 'assets/img/po-select.png'); ?>"></a></td>
		</tr>
		<tr>
			<td><?php echo esc_html__("Hide on mobile", 'superb-social-share-and-follow-buttons'); ?></td>
			<input type="hidden" value="0" name="general[floatingSidebar_hideOnMobile]">
			<td><input type="checkbox" name="general[floatingSidebar_hideOnMobile]" <?php echo ($spbsm_positionSettings['floatingSidebar_hideOnMobile'] == 1 ? 'checked' : '') ?>></td>
		</tr>
	</table>
</div>