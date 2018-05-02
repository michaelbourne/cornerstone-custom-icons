<?php
/*
Plugin Name: Cornerstone Custom Icons
Description: Add custom icon fonts and SVGs to the built in Cornerstone and Pro elements controls
Version:     0.1.4
Author:      Michael Bourne
Author URI:  https://ursa6.com
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Text Domain: cc-icons
*/

defined( 'CCICONS_ROOT' ) or define( 'CCICONS_ROOT', dirname( __FILE__ ) );
defined( 'CCICONS_URI' ) or define( 'CCICONS_URI', plugin_dir_url( __FILE__ ) );

if ( ! class_exists( 'CCIcons' ) ) {

	class CCIcons {

		/**
		 * Core singleton class
		 *
		 * @var self - pattern realization
		 */
		private static $_instance;

		/**
		 * Prefix for plugin
		 *
		 * @var $prefix
		 */
		private $prefix;

		/**
		 * Path download folder
		 *
		 * @var $upload_dir
		 */
		public $upload_dir;

		/**
		 * URL download folder
		 *
		 * @var $upload_url
		 */
		private $upload_url;

		/**
		 * Prefix for custom icons
		 *
		 * @var $prefix_icon
		 */
		private $prefix_icon;

		/**
		 * Constructor.
		 */
		private function __construct() {

			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

			// merge css
			include_once( CCICONS_ROOT . '/includes/merge.css.php' );

			// save font class
			include_once( CCICONS_ROOT . '/includes/save.font.php' );

			// add menu item
			add_action( 'admin_menu', array( &$this, 'add_admin_menu' ) );

			add_action( 'admin_init', array( &$this, 'admin_init' ) );

			// add admin styles and scripts
			add_action( 'admin_enqueue_scripts', array( &$this, 'admin_enqueue_scripts' ) );
			add_action( 'admin_enqueue_scripts', array( &$this, 'enqueue_scripts' ) );

			// for front end
			add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_scripts' ), 999999 );
			add_action( 'wp_enqueue_scripts_clean', array( &$this, 'enqueue_scripts' ), 10 );
			
			// doesnt work for now
			//add_action( 'cornerstone_before_boot_app', array( &$this, 'enqueue_scripts' ), 100 );

			// add icon css to footer for builder support
			add_action( 'wp_print_footer_scripts', array( &$this, 'insert_footer_css' ) );

			// load icons
			add_action( 'cornerstone_config_common_font-icons', array( &$this, 'icons_filters' ), 999 );

			$upload = wp_upload_dir();

			// main variables
			$this->prefix_icon = 'fs-';
			$this->upload_dir  = $upload['basedir'] . '/cornerstone_icons_files';
			$this->upload_url  = $upload['baseurl'] . '/cornerstone_icons_files';

			// SSL fix because WordPress core function wp_upload_dir() doesn't check protocol.
			if ( is_ssl() ) $this->upload_url = str_replace( 'http://', 'https://', $this->upload_url );

			// load translations
			add_action( 'plugins_loaded', array( &$this, 'cc_load_textdomain' ) );
		}

		/**
		 * Get the instance of CCIcons Plugins
		 *
		 * @return self
		 */
		public static function getInstance() {

			if ( ! ( self::$_instance instanceof self ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;

		}

		/**
		 * @param mixed $instance
		 */
		public static function setInstance( $instance ) {

			self::$_instance = $instance;

		}

		/**
		 * Init main functions (for hook admin_init)
		 */
		public function admin_init() {

			$this->settings_init();

			$saveFont = new SaveFont_CCIcons();
			$saveFont->init();

		}

		/**
		 * Internationalization
		 */
		public function cci_load_textdomain() {
			load_plugin_textdomain( 'cc-icons', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
		}

		/**
		 * Add new pages to admin
		 */
		public function add_admin_menu() {

			add_menu_page( __( 'Cornerstone Custom Icons', 'cc-icons' ), __( 'Cornerstone Custom Icons', 'cc-icons' ), 'manage_options', 'cornerstone_icons_settings', array(
				&$this,
				'options_page',
			), plugins_url( 'assets/font.png', __FILE__ ) );

		}

		/**
		 * Render all options
		 */
		public function options_page() {

			include_once 'includes/template.options.page.php';

		}


		/**
		 * CCIcons settings init
		 */
		protected function settings_init() {

			register_setting( $this->prefix . 'fontellos_page', $this->prefix . 'cornerstone_icons_settings' );
			add_settings_section( $this->prefix . 'fontellos_pluginPage_section', '', '', $this->prefix . 'fontellos_page' );

		}


		/**
		 * Admin enqueue scripts
		 */
		public function admin_enqueue_scripts() {

			wp_enqueue_style( 'admin_fontellos_css', CCICONS_URI . 'assets/css/cornerstone-custom-icons.css', array(), '0.1.1' );

			wp_enqueue_script( 'cornerstone-custom-icons', CCICONS_URI . 'assets/js/cornerstone-custom-icons.js', array(
				'jquery',
			), '0.1.0', true );

			if ( is_admin() ) {
				$fontellos = array(
					'ajaxurl'    => admin_url( 'admin-ajax.php' ),
					'plugin_url' => CCICONS_URI,
				);
				wp_localize_script( 'cornerstone-custom-icons', 'CC_ICONS', $fontellos );
			}

		}

		/**
		 * Enqueue scripts
		 */
		public function enqueue_scripts() {

			if ( file_exists( $this->upload_dir . '/merged-icons-font.css' ) ) {

				$modtime = @filemtime( $this->upload_dir . '/merged-icons-font.css' );
				if(!$modtime){ $modtime = mt_rand(); }
				wp_enqueue_style( 'icon-fonts', esc_url( $this->upload_url . '/merged-icons-font.css' ), false, $modtime );
			}

		}

		/**
		 * Add custom font CSS to footer so it actually works in the builder
		 * - to do: get this working with the builder boilerplate action
		 */
		public function insert_footer_css() {

			if( current_user_can( 'manage_options' ) ){

				if ( file_exists( $this->upload_dir . '/merged-icons-font.css' ) ) {

					$modtime = @filemtime( $this->upload_dir . '/merged-icons-font.css' );
					if(!$modtime){ $modtime = mt_rand(); }
					echo '<link rel="stylesheet" type="text/css" href="' . $this->upload_url . '/merged-icons-font.css?ver=' . $modtime . '">';
				}
			}
		}


		/**
		 * @param Get font info
		 *
		 * @return array
		 */
		public function get_config_font( $file_name ) {

			$file_config = glob( $this->upload_dir . '/' . $file_name . '/*/*' );
			$data        = array();
			$css_folder  = '';

			foreach ( $file_config as $key => $file ) {

				if ( strpos( $file, 'config.json' ) !== false ) {
					$file_info               = json_decode( file_get_contents( $file ) );
					$data['name']            = $file_info->name;
					$data['icons']           = $file_info->glyphs;
					$data['css_prefix_text'] = $file_info->css_prefix_text;
				}

				if ( is_string( $file ) && strpos( $file, 'css' ) !== false ) {
					$file_part          = explode( 'wp-content', $file );
					$data['css_folder'] = $file;
					$css_folder         = $file_part[1];
				}

				if ( is_string( $file ) && strpos( $file, 'font' ) !== false ) {
					$file_part        = explode( 'wp-content', $file );
					$data['font_url'] = content_url() . $file_part[1];
				}

			}

			if ( empty( $data['name'] ) ) {
				$data['name'] = 'font' . mt_rand();
			}


			$data['file_name'] = $file_name;
			$data['css_root']  = $data['css_folder'] . '/' . $data['name'] . '.css';
			$data['css_url']   = content_url() . $css_folder . '/' . $data['name'] . '.css';

			return $data;

		}

		/**
		 * Add new icons to Cornerstone
		 *
		 * @param $config
		 *
		 * @return array
		 */
		public function icons_filters( $config ) {

			$options = get_option( 'cc_icons_fonts' );

			$icons = array();
			if ( empty( $options ) ) {
				return $config;
			}
			foreach ( $options as $key => $font ) {
				if ( $font['status'] == '1' ) {

					$font_data = json_decode($font['data'],true);

					$new_icons = $this->parse_css( $font_data['css_root'], $font_data['name'] );
					if ( !empty($new_icons) && is_array( $new_icons ) ) {
						$icons = array_merge( $new_icons, $icons );
					}
				}
			}

			$config = array_merge( $icons, $config );

			return $config;
		}


		/**
		 * Parse CSS that to get icons.
		 *
		 * @param $css_file
		 *
		 * @return array
		 */
		protected function parse_css( $css_file, $name ) {

			$icons = array();
			if ( ! file_exists( $css_file ) ) {
				return null;
			}
			$css_source = file_get_contents( $css_file );

			preg_match_all( "/\.\w*?\-(.*?):\w*?\s*?{?\s*?{\s*?\w*?:\s*?\'\\\\?(\w*?)\'.*?}/", $css_source, $matches, PREG_SET_ORDER, 0 );
			foreach ( $matches as $match ) {
				$icons[ $name . '-' . $match[1] ] = $match[2];
			}

			return $icons;

		}


		/**
		 * remove folder (recursive)
		 *
		 * @param $dir
		 */
		protected function rrmdir( $dir ) {

			if ( is_dir( $dir ) ) {
				$objects = scandir( $dir );
				foreach ( $objects as $object ) {
					if ( $object != "." && $object != ".." ) {
						if ( is_dir( $dir . "/" . $object ) ) {
							$this->rrmdir( $dir . "/" . $object );
						} else {
							unlink( $dir . "/" . $object );
						}
					}
				}
				rmdir( $dir );
			}

		}

		/**
		 * @param        $name
		 * @param bool   $default
		 * @param string $type
		 *
		 * @return bool|string
		 */
		protected function getRequest( $name, $default = false, $type = 'POST' ) {

			$TYPE = ( strtolower( $type ) == 'post' ) ? $_POST : $_GET;
			if ( ! empty( $TYPE[ $name ] ) ) {
				return sanitize_text_field( $TYPE[ $name ] );
			}

			return $default;

		}

	}

	CCIcons::getInstance();

	/**
	 * Main manager
	 */
	function cc_icons_manager() {
		return CCIcons::getInstance();
	}

}