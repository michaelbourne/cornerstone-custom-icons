<?php
/**
* Class for saving font uploads
*
* @package   Cornerstone Custom icons
* @author    Michael Bourne
* @license   GPL3
* @link      https://ursa6.com
* @since     0.0.1
*/

class SaveFont_CCIcons extends CCIcons {


	public function init() {

		$action = cc_icons_manager()->getRequest( 'action', 'cc_icons_save_font' );

		// ajax events
		add_action( 'wp_ajax_' . $action, array( &$this, $action ) );

	}


	/**
	 * Upload ZIP file
	 *
	 */
	public function cc_icons_save_font() {

		if ( wp_verify_nonce( $this->getRequest( '_wpnonce' ), 'cc_icons_nonce' ) ) {

			$file_name = $this->getRequest( 'file_name', 'font' );

			$result = array();

			if ( ! empty( $_FILES ) && ! empty( $_FILES['source_file'] ) ) {

				$zip = new ZipArchive;
				$res = $zip->open( $_FILES['source_file']['tmp_name'] );
				if ( $res === true ) {
					$zip->extractTo( $this->upload_dir . '/' . $file_name );
					$zip->close();
				}

				$font_data = $this->get_config_font( $file_name );
				$icons     = $this->parse_css( $font_data['css_root'], $font_data['name'] );

				if ( ! empty( $icons ) && is_array( $icons ) ) {
					$result['count_icons'] = count( $icons );
					$first_icon = ! empty( $icons ) ? 'cs-fa-' . key( $icons ) : '';
					$result['first_icon']  = $first_icon;
					$iconlist = '';
					foreach($icons as $iconkey => $iconcode){
						$iconlist .= '<div><i class="cs-fa cs-fa-' . $iconkey . '" style="font-size: 16px;"></i><span>' . $iconkey . '</span></div>';
					}
					$result['iconlist'] = $iconlist;
				}

				if ( ! empty( $font_data['name'] ) ) {
					$result['name'] = $font_data['name'];
				}

				$result['status_save'] = $this->update_options( $font_data, '1' /* enabled */ );
				$result['data'] = $font_data;

				new MergeCss_CCIcons();

			}

			echo json_encode( $result );
		}

		die();

	}

	private function update_options( $font_data, $status ) {

		if ( empty( $font_data['name'] ) ) {
			return null;
		}

		$options = get_option( 'cc_icons_fonts', array() );
		if ( ! empty( $options[ $font_data['name'] ] ) ) {
			return 'exist';
		}

		if ( empty( $options ) || ! is_array( $options ) ) {
			$options = array();
		}

		$options[ $font_data['name'] ] = array(
			'status' => $status,
			'data'   => json_encode( $font_data ),
		);

		if ( update_option( 'cc_icons_fonts', $options ) ) {
			return 'updated';
		} else {
			return 'none';
		}

	}

	/**
	 * Delete ZIP file
	 */
	public function cc_icons_delete_font() {

		//if ( wp_verify_nonce( $this->getRequest( '_wpnonce' ), 'cc_icons_nonce' ) ) {

			$file_name = $this->getRequest( 'file_name', 'font' );

			$options = get_option( 'cc_icons_fonts' );

			if ( empty( $options[ $file_name ] ) ) {
				return false;
			}

			$data = json_decode( $options[ $file_name ]['data'], true );

			// remove option
			unset( $options[ $file_name ] );

			// remove file
			$this->rrmdir( $this->upload_dir . '/' . $data['file_name'] );

			$result = array(
				'name'   => $file_name,
				'status_save' => 'none',
			);

			if ( update_option( 'cc_icons_fonts', $options ) ) {
				$result['status_save'] = 'remove';

				new MergeCss_CCIcons();
			}

			echo json_encode( $result );

		//}

		die();
	}


}