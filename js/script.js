document.addEventListener( 'DOMContentLoaded', function() {
	const header = document.getElementById( 'masthead' );

	const links = [
		// `${php_data.base_url}/wp-content/themes/flearning/style-criticle.css`,
		`${php_data.base_url}/wp-content/themes/flearning/style-defer.css`
	];

	if ( header ) {
		links.forEach( l => {
			const link = document.createElement( 'link' );

			link.rel  = 'stylesheet';
			link.href = l

			header.appendChild( link );
		} )
	}

	const scriptTag = document.createElement('script');
    scriptTag.src = `${php_data.base_url}/wp-content/themes/flearning/js/splide.js`;
    document.body.appendChild( scriptTag );

	if ( window.innerWidth > 992 ) {
		const blob = document.querySelector( '.blob-wrapper' )
		
		if ( blob ) {
			blob.innerHTML += `<div class="blob blob-1"></div>
			<div class="blob blob-2"></div>
			<div class="blob blob-3"></div>
			<div class="blob blob-4"></div>
			<div class="blob blob-5"></div>
			<div class="blob blob-6"></div>
			<div class="blob blob-7"></div>
			<div class="blob blob-8"></div>
			<div class="blob blob-9"></div>
			<div class="blob blob-10"></div>
			<div class="blob blob-11"></div>
			<div class="blob blob-12"></div>
			<div class="blob blob-13"></div>
			<div class="blob blob-14"></div>`;
		}

		window.addEventListener( 'scroll', function() {
			if ( window.scrollY > 20 ) {
				header.classList.add( 'fixed' );
			} else {
				header.classList.remove( 'fixed' );
			}
		} )
	}

	const navControl = document.getElementById( 'nav-control' );
	if ( navControl ) {
		navControl.addEventListener( 'click', function() {
			header.classList.contains( 'nav-mobile' ) ? header.classList.remove( 'nav-mobile' ) : header.classList.add( 'nav-mobile' )
		} )
	}

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
	const openPopup  = document.querySelectorAll( '.popup-open' )
	const closePopup = document.querySelector( '.popup-close' )
	const popup      = document.querySelector( '.popup' )
	
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
						panel.style.maxHeight = panel.scrollHeight + 10 + 'px';
					}
				});
			}
			
			acc[0].click();
		} )
	}

	// Search header
	const searchControl = document.getElementById( 'search-control' );
	const searchClose   = document.getElementById( 'btn-search-close' );
	const searchWraper  = document.querySelector( '.header-search__wrapper' );

	if ( searchControl ) {
		searchControl.addEventListener( 'click', () => {
			searchWraper.classList.add( 'search--open' );
		} )
	
		searchClose.addEventListener( 'click', () => {
			searchWraper.classList.remove( 'search--open' );
		} )
	
		document.addEventListener( 'keydown', e => {
			if (e.keyCode == 27) {
				searchWraper.classList.remove( 'search--open' );
			}
		})
	}

	// Select
	const selects = document.querySelectorAll( 'select' );
	if ( selects ) {
		selects.forEach( s => {
			const choice = new Choices( s );
		} )
	}
});