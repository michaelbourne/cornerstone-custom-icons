jQuery( function() {
		var $ = jQuery;

		/* For Upload */
		var drop = $( "#cc-icons-files" );
		drop.on( 'dragenter', function( e ) {
			$( ".cc-icons-drop" ).css( {
				"border": "4px dashed #09f",
				"background": "rgba(0, 153, 255, .05)"
			} );
			$( ".cc-icons-cont" ).css( {
				"color": "#09f"
			} );
		} ).on( 'dragleave dragend mouseout drop', function( e ) {
			$( ".cc-icons-drop" ).css( {
				"border": "3px dashed #DADFE3",
				"background": "transparent"
			} );
			$( ".cc-icons-cont" ).css( {
				"color": "#8E99A5"
			} );
		} );

		var timeout;

		function progress_bar( max, time ) {

			var value = 0;

			function loading( time ) {
				value += 1;
				$( '.cc-icons-progress .bar' ).css( 'width', value + '%' );

				if ( value < max ) {
					run( time )
				}

				if ( value === 100 ) {
					$( '.cc-icons-tit,.cc-icons-desc,.cc-icons-browse' ).show();
					$( '.cc-icons-progress' ).removeClass( 'show' );
				}
			}

			function run( time ) {
				setTimeout( function() {
					loading();
				}, time );
			}

			run( time );

		}

		function reloadCss() {
			$( '#icon-fonts-css' ).each( function() {
				this.href = this.href.replace( /\?.*|$/, '?ver=' + Math.random( 0, 1000 ) );
			} );
		}

		function ajaxSend( request, callback, context ) {

			$.ajax( {
				url: CC_ICONS.ajaxurl,
				data: request,
				cache: false,
				contentType: false,
				dataType: 'json',
				context: context,
				processData: false,
				type: 'POST',
				success: function( response, textStatus ) {
					callback( response, this );
				}
			} );
		}

		/* New Font */
		$( '#cc-icons-files' ).on( 'change', function( evt ) {

			var reader = new FileReader(),
				files = evt.target.files,
				files_one = files[ 0 ];

			// Closure to capture the file information.
			reader.onload = (function( theFile ) {
				return function( e ) {

					progress_bar( 100, 800 );

					var file_name = escape( theFile.name );

					$( '.cc-icons-tit,.cc-icons-desc,.cc-icons-browse' ).hide();
					$( '.cc-icons-progress' ).addClass( 'show' );
					$( '#cc-icons-progress' ).after( file_name );

					var request = new FormData();

					request.append( "file_name", file_name );
					request.append( "source_file", theFile, file_name );
					request.append( "action", "cc_icons_save_font" );
					request.append( "_wpnonce", $( '.cc-icons-drop' ).find( '#_wpnonce' ).val() );

					ajaxSend( request, function( response ) {

						if ( response.status_save === 'updated' ) {

							var $el = $( '.cc-icons-clone' ).clone();
							$el.find( '.cci-extension-title' ).text( response.name );
							$el.find( '.cci-extension-info-details .value' ).text( response.count_icons );
							$el.find( '.cs-fa' ).addClass( response.first_icon );
							$el.find( '.iconlist' ).html( response.iconlist );

							$( '.wrapper-list-fonts' )
								.removeClass( 'hidden' )
								.find( '.cci-extensions' ).append( $el[ 0 ] );

							$el.show().find( '.delete-font' ).attr( 'data-font', JSON.stringify( response.data ) );

							reloadCss();
						}

						if ( response.status_save === 'exist' ) {
							alert( 'File already exists' );
						}

					} );

				}
			})( files_one );

			reader.readAsDataURL( files_one );
		} );

		/* Delete Font */
		$( '.wrapper-list-fonts' ).on( 'click', '.delete-font', function( e ) {
			e.preventDefault();

			if ( !confirm( "Are you sure you want to delete this font?" ) ) {
				return false;
			}

			var request = new FormData(),
				$this = $( this ),
				data = $this.data( 'font' );

			request.append( "file_name", data.name );
			request.append( "action", "cc_icons_delete_font" );
			request.append( "_wpnonce", $( '.cc-icons-drop' ).find( '#_wpnonce' ).val() );

			ajaxSend( request, function( response, context ) {

				if ( response.status_save === 'remove' ) {

					var $item = $( context ).closest( '.cci-extension' );
					$item.css( {
						'transition': 'all 0.5s',
						'transform': 'scale(0)'
					} );

					setTimeout( function() {

						$item.remove( 0 );
						if ( !$( '.cci-extension:visible' ).length ) {
							$( '.wrapper-list-fonts' ).addClass( 'hidden' );
						}

						reloadCss();

					}, 1500 );

				}

			}, this );

		} );

		/* Change Status */
		$( '.wrapper-list-fonts' ).on( 'click', '.cci-extension-status-icon', function( e ) {

			e.preventDefault();

			var request = new FormData(),
				$this = $( this ),
				data = $this.closest( '.font-item' ).find( '.delete-font' ).data( 'font' );

			request.append( "file_name", data.name );
			request.append( "action", "cc_icons_change_status" );
			request.append( "_wpnonce", $( '.cc-icons-drop' ).find( '#_wpnonce' ).val() );

			if ( $this.hasClass( 'enabled' ) ) {
				request.append( "sub_action", "enabled" );
			} else {
				request.append( "sub_action", "disabled" );
			}

			ajaxSend( request, function() {

			} );

		} );

		$('.cci-main').on('click', '.cci-extension-info-details', function(){
			$(this).next( $('.iconlist') ).slideToggle('slow');
		});
	}
);