document.addEventListener( 'DOMContentLoaded', function() {
	const header = document.getElementById( 'masthead' );

	const fixHeader = () => {
		header.classList.add( 'fixed' );
	}

	if ( window.innerWidth > 992 ) {
		window.addEventListener( 'scroll', function() {
			if ( window.scrollY > 20 ) {
				header.classList.add( 'fixed' );
			} else {
				header.classList.remove( 'fixed' );
			}
		} )
	}

	const navControl = document.getElementById( 'nav-control' );
	navControl.addEventListener( 'click', function() {
		header.classList.contains( 'nav-mobile' ) ? header.classList.remove( 'nav-mobile' ) : header.classList.add( 'nav-mobile' )
	} )

	// Tab
	const tabHandler = ( links, panels ) => {
		links.forEach( e => {
			e.addEventListener( 'click', function() {
				links.forEach( l => {
					l.classList.remove( 'active' )
				} )
				e.classList.add( 'active' )

				panels.forEach( p => {
					if ( p.dataset.tab === e.dataset.tab ) {
						p.classList.add( 'active' )
					} else {
						p.classList.remove( 'active' )
					}
				} )
			} )
		});
	}

	const processTab = document.querySelectorAll( '.tab-nav' )
	if ( processTab ) {
		tabHandler( 
			document.querySelectorAll( '.tab-nav button' ),
			document.querySelectorAll( '.tab-panel' ),
		)
	}

	// Popup
	const openPopup = document.querySelectorAll( '.popup-open' )
	const closePopup = document.querySelector( '.popup-close' )
	const popup = document.querySelector( '.popup' )
	
	const dataSrc = 'https://www.youtube.com/embed/'

	if ( popup ) {
		openPopup.forEach( e => {
			e.addEventListener( 'click', function() {
				popup.innerHTML = `<iframe loading="lazy" width="600" height="400"
									src="${dataSrc + this.dataset.popup}"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen>
								</iframe>`;

				popup.classList.add( 'active' )
				closePopup.classList.add( 'active' )
			} )
		});

		closePopup.addEventListener( 'click', function() {
			popup.innerHTML = '';
			popup.classList.remove( 'active' )
			this.classList.remove( 'active' )
		} )
	}

	// Accordion
	const accordions = document.querySelectorAll( '.accordions' );
	if ( accordions ) {
		accordions.forEach( accordion => {
			let acc = accordion.getElementsByClassName( 'control' );
			let i;

			for ( i = 0; i < acc.length; i++ ) {
				const divpanel = acc[i].nextElementSibling;
				if ( divpanel.classList.contains( 'active' ) ) {
					divpanel.style.maxHeight = divpanel.scrollHeight + 'px';
				}
			}

			for ( i = 0; i < acc.length; i++ ) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle( 'active' );
					this.parentElement.classList.toggle( 'active' )

					const panel = this.nextElementSibling;
					panel.classList.toggle( 'active' );
					if ( panel.style.maxHeight ) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + 'px';
					}
				});
			}
		} )
	}

	// if ( document.querySelector( '.splide' ) ) {
	// 	new Splide( '.splide', {
	// 		type      : 'loop',
	// 		pagination: false
	// 	} ).mount();
	// }

	if ( document.querySelector( '.video-slider' ) ) {
		new Splide( '.video-slider', {
			type      : 'loop',
			pagination: false,
			breakpoints: {
				pagination: true
			}
		} ).mount();
	}

	if ( document.querySelector( '.partner-slider' ) ) {
		const partnerSlider = document.querySelector( '.partner-slider' );
		const splide = new Splide( partnerSlider, {
			type      : 'loop',
			pagination: false,
			autoplay  : true,
			interval  : 3000,
			arrows    : false,
			perPage   : 6,
			gap       : '5%',
			breakpoints: {
				991: {
					perPage   : 2,
				},
			}
		} ).mount();
	}

	if ( document.querySelector( '.ebook-slider' ) ) {
		const ebookSlider = document.querySelector( '.ebook-slider' );
		const splide = new Splide( ebookSlider, {
			type      : 'loop',
			pagination: false,
			autoplay  : true,
			interval  : 3000,
		} ).mount();
	}

	// Back to top
	const backToTop = document.querySelector( '#back-to-top' )
	if ( backToTop ) {
		backToTop.addEventListener( 'click', function() {
			window.scroll({top: 0, left: 0, behavior: 'smooth'});
		} )
	}

	// AJAX
	if ( document.querySelector( '.get-more' ) ) {
		const $ = jQuery;
		const getMore = document.querySelector( '.get-more' );
		let offset = 0;

		getMore.addEventListener( 'click', function() {
			$.post( {
				url: php_data.ajax_url,
				data: {
					'action': 'get_rotoi',
					'nonce' : php_data.nonce,
					'offset': offset+=3
				},
				success:function( data ) {
					$( '.rotoi-list' ).append( data )
				},
				error: function( err ){
					console.log( err );
				}
			} );  
		} )
	}
});