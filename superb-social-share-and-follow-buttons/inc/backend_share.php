<?php

defined('ABSPATH') || exit;

$spbsm_settings = $this->db->get_settings(1);
$spbsm_positionSettings = $this->db->get_positionSettings(1);
$spbsm_currentsc = 'spbsm-share-buttons';
$spbsm_currentButtons = esc_html__("Share Buttons", 'superb-social-share-and-follow-buttons');
$spbsm_shareOrFollow = esc_html__("Share On Social Media Text", 'superb-social-share-and-follow-buttons');
if ($spbsm_settings) { ?>
	<div class="spbsm-outer-wrapper">

		<form id="spbsm-form" method="post" data-page="share" name="spbsm-form" action="<?php echo esc_url(home_url()) ?>">

			<h1>
				<span>By Superb</span>
				<?php echo esc_html__("Social Share Buttons", "superb-social-share-and-follow-buttons"); ?>
			</h1>
			<?php include_once $this->base_dir . "readmorebuttons.php"; ?>

			<?php wp_nonce_field('spbsm_submit', '_wpnonce'); ?>
			<main class="spbsm-form-tab-wrapper">
				<input class="spbsm-tabs-input" id="tab1" type="radio" name="tabs" checked>
				<label class="spbsm-tabs-label" for="tab1"><?php echo esc_html__("General Settings", "superb-social-share-and-follow-buttons"); ?></label>
				<input class="spbsm-tabs-input" id="tab2" type="radio" name="tabs">
				<label class="spbsm-tabs-label" for="tab2"><?php echo esc_html__("Social Media", "superb-social-share-and-follow-buttons"); ?></label>
				<input class="spbsm-tabs-input" id="tab3" type="radio" name="tabs">
				<label class="spbsm-tabs-label" for="tab3"><?php echo esc_html__("Design", "superb-social-share-and-follow-buttons"); ?> <span class="tab-premiumfeature">Premium Only</span></label>
				<section id="content1">
					<?php include_once $this->base_dir . "/inc/backend-parts/generalform.php"; ?>
					<!-- Section end -->
				</section>
				<section id="content2">
					<div class="spbsm-follow-wrapper">
						<h2><?php echo esc_html(sprintf(/* translators: %s: button type */__('%s: Social Media', 'superb-social-share-and-follow-buttons'), $spbsm_currentButtons)); ?></h2>
						<p class="headline-description"><?php esc_html(sprintf(/* translators: %s: button type */__('Choose which social media networks you want to display %s for.', 'superb-social-share-and-follow-buttons'), strtolower($spbsm_currentButtons))); ?></p>
						<!-- Follow Options -->
						<table id="media-selection-table" class="spbsm-follow-wrapper">
							<thead>
								<tr>
									<th><?php echo esc_html__("Social Media", 'superb-social-share-and-follow-buttons'); ?></th>
									<th><?php echo esc_html__("Activate", 'superb-social-share-and-follow-buttons'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($spbsm_settings as &$spbsm_item) {
									$spbsm_name = isset($spbsm_item['alt-name']) ? $spbsm_item['alt-name'] : $spbsm_item['class'];
									echo '<tr class="spbsm-follow-item">';
									echo '<td><a href="#" class="spbsm-follow ' . esc_attr($spbsm_item['class']) . '"></a>';
									echo esc_html($spbsm_name) . "\n</td>";
									echo '<td><input type="hidden" value="0" name="' . esc_attr($spbsm_item['class']) . '[share]">';
									echo '<input type="checkbox" name="' . esc_attr($spbsm_item['class']) . '[share]" ' . ($spbsm_item['share'] == 1 ? 'checked' : '') . '>';
									echo '<input class="queue-value" type="hidden" value="' . esc_attr($spbsm_item['share_queue']) . '" name="' . esc_attr($spbsm_item['class']) . '[share_queue]" />';
									echo '<input class="spbsm_dragRow" style="cursor: move;" type="button" /></td>';
									echo '</tr>';
								}
								?>
							</tbody>
						</table>
						<!-- -->
					</div>
				</section>
				<section id="content3">
					<?php include_once $this->base_dir . "/inc/backend-parts/designform.php"; ?>
				</section>
				<?php include_once $this->base_dir . "/inc/backend-parts/submitbutton.php"; ?>
			</main>
		</form>


		<div class="spbsm_discount">
			<div>
				Use our limited time offer & get a <strong>discount</strong> on Superb Social Share Buttons Premium
			</div>
			<a target="_blank" href="https://superbthemes.com/plugins/social-media-share-and-follow-buttons/">Get Premium Version</a>
		</div>

	</div>


<?php
}
?>