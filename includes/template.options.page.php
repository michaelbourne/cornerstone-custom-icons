<?php
/**
* Options Page
*
* @package   Cornerstone Custom icons
* @author    Michael Bourne
* @license   GPL3
* @link      https://ursa6.com
* @since     0.0.1
*/

$options = get_option( 'cc_icons_fonts' );

?>
<div class="cci-reset cci-wrap cci-wrap-about">
	<div class="cci-content">
		<div class="cci-main">
			<div class="cci-row">
				<div class="cci-column">
					<div class="cci-box">

						<header class="cci-box-header">
							<h2 class="cci-box-title"><?php esc_html_e( 'Cornerstone Custom Icons', 'cc-icons' ); ?></h2>
						</header>


						<div class="cci-box-content">
							<ul class="cci-box-features">
								<li>
									<div class="cci-box-feature-icon">
										<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIwLjU0NiAyMC41NDYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIwLjU0NiAyMC41NDY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTguNzc4LDBIMS43NjdDMC43OTMsMCwwLDAuNzkzLDAsMS43Njh2MTcuMDFjMCwwLjk3NSwwLjc5MiwxLjc2OCwxLjc2NywxLjc2OGgxNy4wMTEgICAgYzAuOTczLDAsMS43NjctMC43OTMsMS43NjctMS43NjhWMS43NjdDMjAuNTQ0LDAuNzkzLDE5Ljc1MSwwLDE4Ljc3OCwweiBNMTkuMDMsMTguNzc3YzAsMC4xMzktMC4xMTMsMC4yNTItMC4yNTIsMC4yNTJIMS43NjcgICAgYy0wLjEzOSwwLTAuMjUyLTAuMTEzLTAuMjUyLTAuMjUyVjEuNzY3YzAtMC4xNCwwLjExMy0wLjI1MywwLjI1Mi0wLjI1M2gxNy4wMTFjMC4xMzksMCwwLjI1MiwwLjExMywwLjI1MiwwLjI1MyAgICBDMTkuMDMxLDEuNzY3LDE5LjAzMSwxOC43NzcsMTkuMDMsMTguNzc3eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwb2x5Z29uIHBvaW50cz0iNi42Miw1Ljg5IDcuMTA5LDguMTIxIDkuNTM1LDYuOTY1IDkuNTc1LDYuOTY1IDkuNTc1LDE3LjA0MyAxMi40NTMsMTcuMDQzIDEyLjQ1Myw0LjMyNCAgICAgOS45ODQsNC4zMjQgICAiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
									</div>
									<div class="cci-box-feature-info">
										<h4 class="cci-box-content-title"><?php esc_html_e( 'Create a new Icon Font', 'cc-icons' ); ?></h4>
										<span class="cci-box-content-text">
										<?php
											/* translators: Options page step 1. KSES set to a, br, and i.  */
											echo sprintf( 
												wp_kses( 
													__( 'Visit <a href="%s" target="_blank">Fontello</a> and select the icons you would like to use. You can even upload custom SVG icons of your own, whether they be custom made or from a source like <a href="%s" target="_blank">Flaticon!</a><br><i>Remember to edit the individual codes in the Fontello "Customize Codes" tab if you are uploading more than one font file here. By default, Fontello starts all new icon codes at e800, which will cause display errors with multiple fonts packs. I recommend manually setting these codes to be unique on all your font packs so they can be used on multiple websites without issue. (ex: pack 1; e800, e801, e802. pack 2; e900, e901, e902. etc)</i>', 'cc-icons' ), 
													array(  
														'a' => array( 
															'href' => array(),
															'target' => array(),
															'title' => array()
															),
														'br' => array(),
														'i' => array()
													) 
												), 
												esc_url( 'http://fontello.com/' ),
												esc_url( 'https://www.flaticon.com/' ) 
											);
										?>
										</span>
									</div>
								</li>
								<li>
									<div class="cci-box-feature-icon">
										<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIwLjM2OCAyMC4zNjgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIwLjM2OCAyMC4zNjg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTguNjE4LDBIMS43NTJDMC43ODcsMCwwLjAwMSwwLjc4NiwwLjAwMSwxLjc1MXYxNi44NjVjMCwwLjk2NiwwLjc4NiwxLjc1MiwxLjc1MSwxLjc1MmgxNi44NjUgICAgYzAuOTY1LDAsMS43NS0wLjc4NiwxLjc1LTEuNzUyVjEuNzUxQzIwLjM2OCwwLjc4NiwxOS41ODIsMCwxOC42MTgsMHogTTE4Ljg2OCwxOC42MTdjMCwwLjEzOS0wLjExMywwLjI1MS0wLjI1LDAuMjUxSDEuNzUyICAgIGMtMC4xMzgsMC0wLjI1LTAuMTEyLTAuMjUtMC4yNTFWMS43NTFjMC0wLjEzNywwLjExMi0wLjI1LDAuMjUtMC4yNWgxNi44NjVjMC4xMzcsMCwwLjI1LDAuMTEyLDAuMjUsMC4yNXYxNi44NjZIMTguODY4eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0xMC4yNzYsMTMuODlsMS4wOTItMC45MWMxLjcxMS0xLjUzLDMuMTUtMy4xMTQsMy4xNS01LjFjMC0yLjE0OS0xLjQ3Ny0zLjcxNS00LjE1Mi0zLjcxNSAgICBjLTEuNjA0LDAtMi45ODcsMC41NDYtMy44OCwxLjIxOUw3LjI2OCw3LjM3QzcuODg5LDYuODk3LDguNzgyLDYuMzg3LDkuOCw2LjM4N2MxLjM2NiwwLDEuOTUsMC43NjUsMS45NSwxLjcyOSAgICBjLTAuMDM3LDEuMzg2LTEuMjk0LDIuNzE0LTMuODgsNS4wMjlsLTEuNTMsMS4zODR2MS42NzdoOC4zOTZ2LTIuMjc4aC00LjQ2MVYxMy44OUgxMC4yNzZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
									</div>
									<div class="cci-box-feature-info">
										<h4 class="cci-box-content-title"><?php esc_html_e( 'Upload your ZIP file here', 'cc-icons' ); ?></h4>
										<span class="cci-box-content-text">
											<?php 
												/* translators: Options page step 2.  */
												esc_html_e( 'After selecting your icons, give your font a name and hit download. Then, upload that ZIP file here.', 'cc-icons' ); 
											?>
										</span>
									</div>
								</li>
								<li>
									<div class="cci-box-feature-icon">
										<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDE0LjM0MSAxNC4zNDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE0LjM0MSAxNC4zNDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTMuMTA4LDBIMS4yMzNDMC41NTMsMCwwLDAuNTUzLDAsMS4yMzR2MTEuODc0YzAsMC42ODEsMC41NTMsMS4yMzMsMS4yMzMsMS4yMzNoMTEuODc1ICAgIGMwLjY4MSwwLDEuMjMzLTAuNTUzLDEuMjMzLTEuMjMzVjEuMjM1QzE0LjM0MSwwLjU1MywxMy43ODgsMCwxMy4xMDgsMHogTTEzLjI4NCwxMy4xMDljMCwwLjA5OC0wLjA3OSwwLjE3Ny0wLjE3NywwLjE3N0gxLjIzMyAgICBjLTAuMDk3LDAtMC4xNzYtMC4wNzktMC4xNzYtMC4xNzdWMS4yMzVjMC0wLjA5NywwLjA3OS0wLjE3NiwwLjE3Ni0wLjE3NmgxMS44NzVjMC4wOTgsMCwwLjE3NywwLjA4LDAuMTc3LDAuMTc2TDEzLjI4NCwxMy4xMDkgICAgTDEzLjI4NCwxMy4xMDl6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTguMjczLDYuODRWNi44MTZDOS4yNTksNi40NzEsOS43NCw1LjgwNiw5Ljc0LDQuOTU1YzAtMS4wOTgtMC45NDktMS45OTctMi42NjItMS45OTcgICAgYy0xLjAzNiwwLTEuOTk3LDAuMjk2LTIuNDc4LDAuNjA0bDAuMzgyLDEuMzU2YzAuMzMzLTAuMTk3LDEuMDIzLTAuNDgxLDEuNjc2LTAuNDgxYzAuNzg5LDAsMS4xODMsMC4zNTcsMS4xODMsMC44MzggICAgYzAsMC42NzgtMC44MDEsMC45MTItMS40MjksMC45MjRINS42ODR2MS4zNDNoMC43NjRjMC44MjYsMCwxLjYxNCwwLjM1OCwxLjYxNCwxLjE0NmMwLDAuNjA0LTAuNDkzLDEuMDczLTEuNDY3LDEuMDczICAgIGMtMC43NjQsMC0xLjUyOC0wLjMyMS0xLjg2MS0wLjQ5M2wtMC4zODIsMS40MDRjMC40NjgsMC4yOTYsMS4zNDQsMC41NjcsMi4zNzksMC41NjdjMi4wMzMsMCwzLjI3Ny0xLjAzNSwzLjI3Ny0yLjQ1MiAgICBDMTAuMDEsNy43NCw5LjIzNCw3LjAxNCw4LjI3Myw2Ljg0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
									</div>
									<div class="cci-box-feature-info">
										<h4 class="cci-box-content-title"><?php esc_html_e( 'Use Your Icons', 'cc-icons' ); ?></h4>
										<span class="cci-box-content-text">
										<?php
											/* translators: Options page step 3. KSES set to a, br, and i.  */
											echo sprintf( 
												wp_kses( 
													__( 'You will now see your custom icons in all Cornerstone or Pro elements that have icon selectors in them.<br><br>Looking for more help? You can watch an instructional video by WPBuilders <a href="%s" target="_blank">here.</a>', 'cc-icons' ), 
													array(  
														'a' => array( 
															'href' => array(),
															'target' => array(),
															'title' => array()
															),
														'br' => array(),
														'i' => array()
													) 
												), 
												esc_url( 'https://www.youtube.com/watch?v=OxCU4T82DKo' )
											);
										?>
										</span>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>          
			</div>			
			<div class="cci-row">
				<div class="cci-column">
					<div class="cci-box cci-box-min-height">

						<header class="cci-box-header">
							<h2 class="cci-box-title"><?php esc_html_e( 'Upload Fontello Zip', 'cc-icons' ); ?></h2>
						</header>

						<div class="cci-box-content">
							<div class="cc-icons-wrapper">
								<div class="cc-icons-drop">
									<div class="cc-icons-cont">
										<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwNy4yIDMwNy4yIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDcuMiAzMDcuMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNjUuNjYzLDUuMDAxYy02LjY2Ni02LjY2Ni0xNy40OC02LjY2Ni0yNC4xMzEsMEw2OS4xMTUsNzcuNDAzbDI0LjE1MSwyNC4xMzFsNDMuMjY5LTQzLjI2NHYxODAuNjY0aDM0LjEzVjU4LjI2OSAgICBsNDMuMjg0LDQzLjI2NGwyNC4xMzYtMjQuMTMxTDE2NS42NjMsNS4wMDF6IiBmaWxsPSIjOGU5OWE1Ii8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjczLjA2NSwyMDQuNzk5djY4LjI3SDM0LjEzNXYtNjguMjdIMHY2OC4yN2MwLDE4Ljc2NSwxNS4zNjUsMzQuMTMsMzQuMTM1LDM0LjEzaDIzOC45MyAgICBjMTguNzcsMCwzNC4xMzUtMTUuMzY1LDM0LjEzNS0zNC4xM3YtNjguMjdIMjczLjA2NXoiIGZpbGw9IiM4ZTk5YTUiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
										<div class="cc-icons-tit">
											<?php esc_html_e( 'Drag & Drop', 'cc-icons' ); ?>
										</div>
										<div class="cc-icons-desc">
											<?php esc_html_e( 'your Fontello .zip download here, or', 'cc-icons' ); ?>
										</div>
										<div class="cc-icons-browse">
											<?php esc_html_e( 'click here to browse', 'cc-icons' ); ?>
										</div>
									</div>
									<output id="cc-icons-list">
										<div class="cc-icons-progress">
											<div class="bar"></div>
										</div>
									</output>
									<input id="cc-icons-files" multiple="true" name="files[]" type="file" />
									<?php wp_nonce_field( 'cc_icons_nonce' ); ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<?php
			$class_wrap = '';
			if ( empty( $options ) ) {
				$class_wrap = 'hidden';
			} ?>

			<div class="cci-row">
				<div class="cci-column">
				<div class="cci-box-content cci-pan cci-ta-center wrapper-list-fonts <?php echo esc_attr($class_wrap); ?>">
					<p class="cci-extensions-info"><b><?php esc_html_e( 'Uploaded Fonts', 'cc-icons' ); ?></b></p>
					<div class="cci-extensions">

						<style>
						.cci-extension-content .cs-fa:before {
							font-family: 'FontAwesome';
							font-style: normal;
							font-weight: normal;
							speak: none;
							display: inline-block;
							text-decoration: inherit;
							width: 1em;
							margin-right: .2em;
							text-align: center;
							font-variant: normal;
							text-transform: none;
							line-height: 1em;
							margin-left: .2em;
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
						}
					</style>
					<?php if ( ! empty( $options ) && is_array( $options ) ) : ?>
						<?php foreach ( $options as $key => $font ) :

						if ( empty( $font['data'] ) ) {
							continue;
						}

						$font_data  = json_decode( $font['data'], true );
						$icons      = $this->parse_css( $font_data['css_root'], $key );
						$first_icon = ! empty( $icons ) ? key( $icons ) : '';

						?>
						<div class="cci-extension cci-extension-installed font-item " id="<?php echo esc_attr( $key ); ?>" data-cci-module="x-extension" data-x-extension="">
							<div class="cci-extension-content">
								<i class="cs-fa cs-fa-<?php echo esc_attr( $first_icon ); ?>" style="font-size: 80px;"></i>
								<h4 class="cci-extension-title"><?php echo esc_html( $key ); ?></h4>
								<div class="cci-extension-info">
									<span class="cci-extension-info-details">
										<span class="value"><?php echo esc_html( count( $font_data['icons'] ) ) ?></span> icons</span>

										<div class="iconlist hide">
											<?php
											foreach($icons as $iconkey => $iconcode){
												echo '<div><i class="cs-fa cs-fa-' . $iconkey . '" style="font-size: 16px; margin-right: 10px;"></i><span>' . $iconkey . '</span></div>';
											}
											?>
										</div>
								</div>
								<a class="cci-btn delete-font" data-font="<?php echo esc_attr( $font['data'] ); ?>" href="#">Delete</a>
								</div>

								<footer class="cci-extension-footer">

									<?php $status = ($font['status'] == '1') ? 'yes' : 'no'; ?>
									<a class="cci-extension-status-icon " href="#">
										<svg>
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo esc_url(CCICONS_URI . 'assets'); ?>/icons.svg#<?php echo esc_attr($status); ?>"></use>
										</svg>
									</a>

								</footer>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		</div>
		<div class="cci-row">
			<div class="cci-column">
				<div class="cci-box cci-box-min-height">

						<header class="cci-box-header">
							<h2 class="cci-box-title"><?php esc_html_e( 'Regenerate CSS', 'cc-icons' ); ?></h2>
						</header>

						<div class="cci-box-content">
							<p><?php esc_html_e( 'Sometimes you may need to regenerate the CSS file for your custom icons, such as wehn you change your WordPress domain or update this plugin.', 'cc-icons' ); ?></p>
										<div class="cc-icons-regen">
											<?php esc_html_e( 'Regenerate', 'cc-icons' ); ?>
										</div>

						</div>

				</div>
			</div>
		</div>

	</div>


	<div class="cci-sidebar">
		<div class="cci-cta">
			<a href="https://ursa6.com/" target="_blank">
				<svg id="b33f915c-dbb2-49a6-938e-3b1cd7a9f797" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 338.06 478.86"><defs><style>.a838b416-9a9e-4fdb-8b0b-1ef8f173e35b{fill:#fbde12;}</style></defs><path class="a838b416-9a9e-4fdb-8b0b-1ef8f173e35b" d="M830.68,406C920.5,350.29,903,240.9,880.93,198c-12.68-24.63-26.56-55-20.77-84.93,2-10,4.39-20.44,2.19-30-2.62-11.37-11.12-18.81-16.72-28.31-4.6-7.78-10.56-20.58-5.43-30.29,0,0,3.42-6.48,2.55-8.32-2.45-5.19-16-9.34-21.56-7-4.65,1.93-9.3,13-13.75,15.47-8.74,4.84-28.73-3-38.11-.11-6.52,2-15.17,15-21.06,18.71-11.63,7.41-43.89,2.71-51.81,14.22-5.43,7.88,1,29.45,7.38,35.36,6.62,6.15,27.85,6.15,34.07,12.73,37.65,39.82-14,98-53,104-17.19,2.64-47.49-23.19-63.4-14.92-9.19,4.78-21.92,33.34-16.42,35.16,44,14.56,81,53.43,90.92,45.4,53.57-43.26,110.81,5.28,28.83,92.6-11.51,12.26,15.44,58.91,3.78,71-4.33,4.5-18.1-3.14-23.43-.06-7.59,4.38-16,25.67-12.43,33.1,10.64,22.19,80.93,19.07,99.71.29C806,458.58,793.7,429,830.68,406Z" transform="translate(-603.8 -8.43)"/><path class="a838b416-9a9e-4fdb-8b0b-1ef8f173e35b" d="M666.72,174.23c20.92,7.81,20.82,2.46,33.25,14.18,15.84-8.24,36.09-33.27,35-55.85-75.29-7.47-81.8-65.5-100.89-63.55-14.19,1.44-20.2,50.53-15.48,51.68C653.15,129.09,649.07,167.63,666.72,174.23Z" transform="translate(-603.8 -8.43)"/><path class="a838b416-9a9e-4fdb-8b0b-1ef8f173e35b" d="M901.05,337.27c-11.29,40.1-31.91,59.28-55.68,74.89,0,0,27,6.63,29.59,12.92,1.44,3.52-4.83,12.28-8.42,14.05-8.18,4-27-4.68-34.9-.1-7.59,4.38-16,25.69-12.43,33.1,10.13,20.93,75.8,17.28,94.21.28,3.84-3.55,2.07-8.06,5.87-19.89,7.64-23.82,20.29-26,22.34-32l0-.06C945,398.54,901.05,337.27,901.05,337.27Z" transform="translate(-603.8 -8.43)"/></svg>
			</a>
			<hr class="cci-cta-spacing">
			<a href="https://ursa6.com/" target="_blank">
				<svg id="a681b75e-a836-4b27-a8fe-eaaf45b5525e" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 748.9 154.54"><defs><style>.\34 d796d4f-b091-45bc-941b-d60ede9debbe{fill:#333;}.fd894280-7ab4-4a26-84e7-c559953ee0b7{fill:#fbde12;}</style></defs><path class="4d796d4f-b091-45bc-941b-d60ede9debbe" d="M517,264.3c0,40.31-26.73,61.95-59.4,61.95-32.45,0-59.18-21.64-59.18-61.95v-88H425V266c0,24.18,14.64,35.85,32.67,35.85,18.25,0,32.89-11.67,32.89-35.85V176.26H517Z" transform="translate(-398.46 -172.77)"/><path class="4d796d4f-b091-45bc-941b-d60ede9debbe" d="M631.81,324.76l-42.42-60.67H575v60.67H548.44V176.26H597c28.64,0,50.49,15.06,50.49,44.34,0,22.06-12.3,35.43-30.33,40.73l47.3,63.43ZM596,200.44H575V239.9h21c16.76,0,25.25-7,25.25-19.51C621.21,208.08,612.72,200.44,596,200.44Z" transform="translate(-398.46 -172.77)"/><path class="4d796d4f-b091-45bc-941b-d60ede9debbe" d="M720.07,327.31c-26.73,0-46.46-17.61-51.55-23.34l19.72-16.76c6.79,7.64,18.46,16.12,31.83,16.12,14.63,0,23.33-8.48,23.33-19.3,0-27.58-69.79-22.49-69.79-68.95,0-24.82,19.73-42,48.79-42,25.46,0,43.49,17.39,43.49,17.39l-19.31,17s-10.18-10-24.18-10c-13.58,0-20.79,6.58-20.79,16.76,0,26.1,68.95,21.43,68.95,69.16C770.56,313.09,745.1,327.31,720.07,327.31Z" transform="translate(-398.46 -172.77)"/><path class="4d796d4f-b091-45bc-941b-d60ede9debbe" d="M887,324.76l-11.24-32.67h-54.1l-11,32.67H782.86l52.4-148.5H862l51.34,148.5ZM851.38,216.57c-1.27-3.82-2.54-10.19-2.54-10.19s-1.49,6.37-2.76,10.19l-16.55,52h38.4Z" transform="translate(-398.46 -172.77)"/><path class="4d796d4f-b091-45bc-941b-d60ede9debbe" d="M1097.09,327.31c-37.53,0-56.51-24.16-56.51-58.89,0-33.87,18.55-71.62,45.29-93.4H1129c-25.46,10.57-47.46,33.86-56.52,59.1,5-3.67,16-5.82,23.3-5.82,30.63,0,51.55,20.06,51.55,50C1147.35,304.66,1125.56,327.31,1097.09,327.31Zm-2.59-75.5c-10.35,0-18.33,2.16-26.74,7.76a63.18,63.18,0,0,0-1.08,11c0,17,8,32.57,27.82,32.57,15.32,0,26.75-9.71,26.75-25C1121.25,263.24,1110,251.81,1094.5,251.81Z" transform="translate(-398.46 -172.77)"/><path class="fd894280-7ab4-4a26-84e7-c559953ee0b7" d="M988.11,299.69c28.67-17.8,23.09-52.71,16-66.41-4-7.87-8.48-17.56-6.63-27.11.62-3.21,1.4-6.53.7-9.59-.83-3.63-3.55-6-5.34-9-1.46-2.49-3.37-6.57-1.73-9.67,0,0,1.09-2.07.81-2.66-.78-1.65-5.1-3-6.88-2.24-1.48.61-3,4.15-4.39,4.94-2.79,1.54-9.17-1-12.16,0-2.08.64-4.84,4.78-6.72,6-3.72,2.37-14,.87-16.54,4.54-1.73,2.52.33,9.4,2.35,11.29s8.89,2,10.88,4.06c12,12.71-4.47,31.29-16.91,33.2-5.48.84-15.16-7.4-20.23-4.76-2.94,1.52-7,10.64-5.24,11.22,14,4.65,25.84,17.06,29,14.49,17.1-13.81,35.37,1.69,9.2,29.56-3.67,3.91,4.93,18.81,1.21,22.67-1.39,1.44-5.78-1-7.48,0-2.43,1.4-5.11,8.2-4,10.57,3.4,7.08,25.83,6.09,31.83.09C980.23,316.46,976.31,307,988.11,299.69Z" transform="translate(-398.46 -172.77)"/><path class="fd894280-7ab4-4a26-84e7-c559953ee0b7" d="M935.78,225.69c6.67,2.5,6.64.79,10.61,4.53,5.05-2.63,11.52-10.62,11.16-17.83-24-2.38-26.11-20.9-32.2-20.28-4.53.46-6.45,16.13-4.94,16.49C931.44,211.29,930.14,223.59,935.78,225.69Z" transform="translate(-398.46 -172.77)"/><path class="fd894280-7ab4-4a26-84e7-c559953ee0b7" d="M1010.57,277.74c-3.6,12.8-10.18,18.92-17.77,23.9,0,0,8.62,2.12,9.44,4.13.47,1.12-1.53,3.92-2.68,4.48-2.61,1.28-8.61-1.49-11.14,0s-5.11,8.2-4,10.57c3.23,6.68,24.2,5.51,30.07.08,1.23-1.13.66-2.57,1.88-6.34,2.44-7.61,6.47-8.3,7.13-10.23a0,0,0,0,0,0,0C1024.61,297.3,1010.57,277.74,1010.57,277.74Z" transform="translate(-398.46 -172.77)"/></svg>
			</a>
			<hr class="cci-cta-spacing">
			<p class="cci-cta-note">Plugin created by Michael Bourne of URSA6. <br><br><strong>Donate Link:</strong></p>
			<a href="https://www.paypal.me/yycpro" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGoAAABECAIAAADm5TeGAAAFSmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTIgMS4xNDk2MDIsIDIwMTIvMTAvMTAtMTg6MTA6MjQgICAgICAgICI+CiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICB4bWxuczpkYW09Imh0dHA6Ly93d3cuZGF5LmNvbS9kYW0vMS4wIgogICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICB4bWxuczpQYXlQYWw9Ind3dy5wYXlwYWwuY29tL2Jhc2UvdjEiCiAgIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIgogICBkYzptb2RpZmllZD0iMjAxNC0wNS0xM1QxMTo1OToyNi4wMzgtMDc6MDAiCiAgIGRhbTpzaXplPSIzMDQ1IgogICBkYW06UGh5c2ljYWx3aWR0aGluaW5jaGVzPSItMS4wIgogICBkYW06ZXh0cmFjdGVkPSIyMDE0LTA1LTEzVDExOjU5OjIzLjUzMy0wNzowMCIKICAgZGFtOnNoYTE9ImQwYjIwZDZiOTU3MzhmNmY5M2NhYmY3ZDk0YTQxM2U2MjkxYzZmYTYiCiAgIGRhbTpOdW1iZXJvZnRleHR1YWxjb21tZW50cz0iMCIKICAgZGFtOkZpbGVmb3JtYXQ9IlBORyIKICAgZGFtOlByb2dyZXNzaXZlPSJubyIKICAgZGFtOlBoeXNpY2FsaGVpZ2h0aW5kcGk9Ii0xIgogICBkYW06TUlNRXR5cGU9ImltYWdlL3BuZyIKICAgZGFtOk51bWJlcm9maW1hZ2Vz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" alt="PayPal Donate"></a>
			<hr class="cci-cta-spacing">
			<p class="cci-cta-note">Just like my plugin Global Blocks, this plugin is provided for free to the Cornerstone, X and Pro Theme community. It is in no way endorsed by, or a product of, Themeco.<br><br>Check out my other Cornerstone plugin: <a href="https://wordpress.org/plugins/cornerstone-placeholder-images/" target="_blank">Cornerstone Placeholder Images</a></p>
		</div>
	</div>



</div>
</div>

<div class="cci-extension cci-extension-installed font-item cc-icons-clone" id="" data-cci-module="x-extension" data-x-extension="">
	<div class="cci-extension-content">
		<i class="cs-fa" style="font-size: 80px;"></i>
		<h4 class="cci-extension-title"></h4>
		<div class="cci-extension-info">
			<span class="cci-extension-info-details">
				<span class="value">0</span> icons</span>
				<div class="iconlist hide">
				</div>
			</div>
			<a class="cci-btn delete-font" data-font="" href="#"><?php esc_html_e( 'Delete', 'cc-icons' ); ?></a>
		</div>

		<footer class="cci-extension-footer">

			<a class="cci-extension-status-icon" href="#">
				<svg>
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href=""></use>
				</svg>
			</a>

		</footer>
	</div>