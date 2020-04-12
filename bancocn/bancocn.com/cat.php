<?php
  require "header.php";

  $pic = Picture::last($_GET["id"]);

?>

<style type="text/css" id="kc-css-general">.kc-off-notice{display: inline-block !important;}.kc-container{max-width:1170px;}</style><style type="text/css" id="kc-css-render">@media only screen and (min-width:1000px) and (max-width:5000px){body.kc-css-system .kc-css-360152{width:50%;}body.kc-css-system .kc-css-750327{width:50%;}body.kc-css-system .kc-css-257349{width:100%;}body.kc-css-system .kc-css-246542{width:100%;}body.kc-css-system .kc-css-370718{width:100%;}body.kc-css-system .kc-css-965197{width:100%;}body.kc-css-system .kc-css-784468{width:100%;}body.kc-css-system .kc-css-152881{width:25%;}body.kc-css-system .kc-css-748533{width:25%;}body.kc-css-system .kc-css-957834{width:25%;}body.kc-css-system .kc-css-909186{width:25%;}body.kc-css-system .kc-css-185496{width:100%;}body.kc-css-system .kc-css-364537{width:33.33%;}body.kc-css-system .kc-css-377886{width:33.33%;}body.kc-css-system .kc-css-117317{width:33.33%;}body.kc-css-system .kc-css-283757{width:33.33%;}body.kc-css-system .kc-css-857149{width:33.33%;}body.kc-css-system .kc-css-590387{width:33.33%;}body.kc-css-system .kc-css-553947{width:100%;}body.kc-css-system .kc-css-750848{width:33.33%;}body.kc-css-system .kc-css-535597{width:33.33%;}body.kc-css-system .kc-css-50269{width:33.33%;}body.kc-css-system .kc-css-624480{width:50%;}body.kc-css-system .kc-css-186182{width:50%;}body.kc-css-system .kc-css-346950{width:100%;}}body.kc-css-system .kc-css-980232{background:linear-gradient(70deg, rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), transparent url("./admin/uploads/<?php echo $pic->img; ?>") center center/cover no-repeat scroll;padding:0px 0px 0px 0px;}body.kc-css-system .kc-css-41{width:100%;}body.kc-css-system .kc-css-388724{padding:0px 0px 0px 0px;}body.kc-css-system .kc-css-360152{padding:0px 0px 0px 0px;}body.kc-css-system .kc-css-105617{padding:0px 0px 0px 0px;}body.kc-css-system .kc-css-750327{padding:0px 0px 0px 0px;}body.kc-css-system .kc-css-410415{background:transparent url(#) center center/cover no-repeat scroll;}body.kc-css-system .kc-css-37956{width:100%;}@media only screen and (max-width:1024px){body.kc-css-system .kc-css-41{width:100%;}body.kc-css-system .kc-css-388724{width:100%;}body.kc-css-system .kc-css-750327{width:100%;}body.kc-css-system .kc-css-336604{width:100%;}body.kc-css-system .kc-css-152881{width:50%;}body.kc-css-system .kc-css-748533{width:50%;}body.kc-css-system .kc-css-957834{width:50%;}body.kc-css-system .kc-css-909186{width:50%;}body.kc-css-system .kc-css-364537{width:50%;}body.kc-css-system .kc-css-377886{width:50%;}body.kc-css-system .kc-css-117317{width:50%;}body.kc-css-system .kc-css-283757{width:50%;}body.kc-css-system .kc-css-857149{width:50%;}body.kc-css-system .kc-css-590387{width:50%;}}@media only screen and (max-width:999px){body.kc-css-system .kc-css-360152{width:100%;}body.kc-css-system .kc-css-750327{width:100%;}body.kc-css-system .kc-css-377886{width:50%;}body.kc-css-system .kc-css-117317{width:50%;}body.kc-css-system .kc-css-283757{width:50%;}}@media only screen and (max-width:767px){body.kc-css-system .kc-css-152881{width:100%;}body.kc-css-system .kc-css-748533{width:100%;}body.kc-css-system .kc-css-957834{width:100%;}body.kc-css-system .kc-css-909186{width:100%;}body.kc-css-system .kc-css-364537{width:100%;}body.kc-css-system .kc-css-377886{width:100%;}body.kc-css-system .kc-css-117317{width:100%;}body.kc-css-system .kc-css-283757{width:100%;}body.kc-css-system .kc-css-857149{width:100%;}body.kc-css-system .kc-css-590387{width:100%;}body.kc-css-system .kc-css-750848{width:100%;}body.kc-css-system .kc-css-535597{width:100%;}body.kc-css-system .kc-css-50269{width:100%;}}</style>

<section data-kc-fullheight="middle-content" id="home" data-kc-parallax="true" class="kc-elm kc-css-980232 kc_row home-section" style="background-position: 50% 0px;">
			<div class="kc-row-container">
				<div class="kc-wrap-columns">
					<div class="kc-elm kc-css-41 kc_col-sm-12 kc_column kc_col-sm-12">
						<div class="kc-col-container">
							<div class="kc-elm kc-css-974155 kc_text_block home-section-background">
								<div class="header-text">
									<p><?php Category::render_text($_GET["id"]); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php
  require "footer.php";
?>

