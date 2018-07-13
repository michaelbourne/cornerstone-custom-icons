<?php
/**
* Class for merging CSS from all uploaded fonts
*
* @package   Cornerstone Custom icons
* @author    Michael Bourne
* @license   GPL3
* @link      https://ursa6.com
* @since     0.0.1
*/


class MergeCss_CCIcons extends CCIcons {

	public function __construct() {
		$this->generate_css();
	}

	/**
	 * Generate new CSS
	 */
	private function generate_css() {

		$options = get_option( 'cc_icons_fonts' );


		$css_content = "";
		if ( !empty( $options ) && is_array($options) ) {
			foreach ( $options as $key => $font ) {

				if ( isset( $font['status'] ) && $font['status'] !== '1' ){
					continue;
				}

				if ( empty( $font['data'] ) ) {
					continue;
				}


				$font_data = json_decode($font['data'],true);

				// the query var on the font files should be randomly generated each time the css file is altered for cache purposes
				// ALL fontello fonts need to be called under FontAwesome in order to work on X and Pro themes. Hacky? Yes.
				$randomver = mt_rand();
				$css_content .= "@font-face {
						 font-family: 'FontAwesome';
						  src: url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".eot?" . $randomver . "');
						  src: url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".eot?" . $randomver . "#iefix') format('embedded-opentype'),
						       url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".woff2?" . $randomver . "') format('woff2'),
						       url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".woff?" . $randomver . "') format('woff'),
						       url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".ttf?" . $randomver . "') format('truetype'),
						       url('" . $font_data['font_url'] . "/" . strtolower( $font_data['name'] ) . ".svg?" . $randomver . "#" . $font_data['name'] . "') format('svg');
						  font-weight: normal;
						  font-style: normal;
						}\n";


				$icons = cc_icons_manager()->parse_css( $font_data['css_root'], $font_data['name'] );

				// extra class added for the icons to appear in cornerstone builder.
				if (!empty($icons) && is_array($icons)){

					foreach ( $icons as $name_icon => $code ) {
						$css_content .= ".x-icon-" . $name_icon . ":before { content: '\\" . $code . "'; font-weight: normal; }\n";
						$css_content .= ".cs-fa-" . $name_icon . ":before { content: '\\" . $code . "'; font-weight: normal; }\n";
						$css_content .= ".cs-icons-inner li[title='" . $name_icon . "'] { font-family: 'FontAwesome'; font-weight: normal; }\n";
						$css_content .= ".cs-icons-inner li[title='" . $name_icon . "'] svg { display: none; }\n";
						$css_content .= ".cs-icons-inner li[title='" . $name_icon . "']::before{ content: '\\" . $code . "'; }\n";
					}
				}

				$css_content .= "\n\n";

			}
		}

		$css_content = preg_replace( '/\t+/', '', $css_content );
		if ( is_dir( cc_icons_manager()->upload_dir  ) ) {
			file_put_contents( cc_icons_manager()->upload_dir . '/merged-icons-font.css', $css_content );
		}
	}

}