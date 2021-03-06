/* global jssor_options */

jQuery( document ).ready(function ($) {

	$.fn.productImgPreload = function() {
		this.each(function(){
			(new Image()).src = this;
		});
	};

	var jssor_1_options = {
		$Loop: 0,
		$DragOrientation: 1,
		$ThumbnailNavigatorOptions: {
			$AutoCenter: 0,
			$Class: $JssorThumbnailNavigator$,
			$Cols: parseInt(jssor_options.cols),
			$SpacingX: parseInt(jssor_options.spaceX),
			$SpacingY: parseInt(jssor_options.spaceY),
			$Orientation: parseInt(jssor_options.orientation),
			$Loop: 0,
			$ArrowNavigatorOptions: {
				$Class: $JssorArrowNavigator$
			}
		}
	};

	var jssor_1_slider = new $JssorSlider$( "jssor_1", jssor_1_options );

	var $easyzoom = $( '.single-product-main_image:last > div.easyzoom' ).easyZoom();

	var easyZoomApi = $easyzoom.data('easyZoom');

	//responsive code begin
	//you can remove responsive code if you don't want the slider scales while window resizing
	function ScaleSlider() {
			var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			if (refSize) {
					refSize = Math.min( refSize, 960 );
					refSize = Math.max( refSize, 290 );
					jssor_1_slider.$ScaleWidth( refSize );
			}
			else {
					window.setTimeout(ScaleSlider, 30 );
			}
			if ( $( window ).width() > 767 ) {
				easyZoomApi._init();
			} else {
				easyZoomApi.teardown();
			}
	}
	ScaleSlider();
	$( window ).bind( "load", ScaleSlider );
	$( window ).bind( "resize", ScaleSlider );
	$( window ).bind( "orientationchange", ScaleSlider );
	//responsive code end

	var items = [];
	$( '.single-product-main_image:last' ).find( '.easyzoom' ).each(function() {
		items.push( {
			src: $ (this ).find( '> a' ).attr( 'href' )
		} );
	});

	jssor_1_slider.$On( $JssorSlider$.$EVT_STATE_CHANGE, function( slideIndex, progress ){

		var preloadHref = [];
		preloadHref[0] = items[slideIndex].src;
		if( items[slideIndex+1] ){
			preloadHref[1] = items[slideIndex+1].src;
		} else if( items[slideIndex-1] ) {
			preloadHref[1] = items[slideIndex-1].src;
		}
		$( preloadHref ).productImgPreload();

		$( '.single-product-images .enlarge' ).click( function() {

			$.magnificPopup.open({
				items:items,
				gallery: {
					enabled: true,
					preload: [1,1]
				},
				type: 'image'
			}, slideIndex );
		});
	});


});