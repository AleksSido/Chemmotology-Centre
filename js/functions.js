/**********************
** Theme functions file
** contains functions for font size responsiveness, front page logo and language icons situation and animation,
** adding classes to nav menu tags, text indentation 
**********************/

function fontSizeResponsive() {
	var baseFontSize = jQuery( 'body' ).css( 'font-size' );
	var bFS = parseFloat( baseFontSize );
	jQuery( '#lang-uk, #lang-ru, #lang-en' ).css( 'font-size', 1.3*bFS );
	jQuery( '#lang-uk-header, #lang-ru-header, #lang-en-header, .glyphicon-search' ).css( 'font-size', 1.1*bFS );
	jQuery( 'h1' ).css( 'font-size', 2.8*bFS );
	jQuery( 'h5.site-description' ).css( 'font-size', 1.3*bFS );
	jQuery( 'h1.conference-h1' ).css( 'font-size', 2*bFS );	
	if ( jQuery( 'html').attr( 'lang') === 'ru-RU' ) {
		jQuery( 'h1' ).css( 'font-size', 2.3*bFS );
		jQuery( 'h5.site-description' ).css( 'font-size', 1.05*bFS );
		jQuery( 'h1.conference-h1' ).css( 'font-size', 1.9*bFS );	
	}
	if ( jQuery( 'html').attr( 'lang') === 'en-US' ) {
		jQuery( 'h1' ).css( 'font-size', 2.3*bFS );
		jQuery( 'h5.site-description' ).css( 'font-size', 1.2*bFS );
	}	
	jQuery( 'div.menu > ul > li.page_item > ul > li.page_item > a' ).css( 'font-size', 1.15*bFS );
	jQuery( 'div.menu > ul > li.page_item > ul > li.page_item > a' ).hover(function(){
		jQuery( 'div.menu > ul > li.page_item > ul > li.page_item > a:hover' ).css( 'font-size', 1.3*bFS );
	},
	function(){
		jQuery( 'div.menu > ul > li.page_item > ul > li.page_item > a' ).css( 'font-size', 1.15*bFS );
	}
	);	
	jQuery( 'div.menu > ul > li.page_item > a' ).css( 'font-size', 1.2*bFS );
	jQuery( 'div.for-footer > p, div.for-footer > a' ).css( 'font-size', 1*bFS );
	jQuery( 'h2.parent-page-title' ).css( 'font-size', 2*bFS );
	jQuery( 'h3.page-title, h3.news-title' ).css( 'font-size', 1.5*bFS );
	jQuery( 'div.page_content p' ).css( 'font-size', 1*bFS );
	jQuery( 'div.link-read-news > p' ).css( 'font-size', 0.9*bFS );
	jQuery( 'p.post-date' ).css( 'font-size', 0.9*bFS );
}

function languageIconsFrontPage() {	
	if ( document.getElementById( 'front-page-logo' ) ) {	
		document.getElementById( 'front-page-logo' ).addEventListener( 'load', languageIcons );
		var opacityLogo = 0;
		var langUKrotateX = 90;  
		var langRUrotateX = 90; 
		var langENrotateX = 90;
		var intervalAnimationOfPageFrontLoad = setInterval( animationOfPageFrontLoad, 30 );
		function animationOfPageFrontLoad() {
			if ( opacityLogo >= 1 ) {
				clearInterval(intervalAnimationOfPageFrontLoad);
				//callback function for lang-uk icon
				var intervalAnimationOflangUK = setInterval( animationOflangUK, 50 );
				function animationOflangUK() {
					if ( langUKrotateX === 0 ) {
						clearInterval(intervalAnimationOflangUK);
						//callback function for lang-ru icon
						var intervalAnimationOflangRU = setInterval( animationOflangRU, 50 );
						function animationOflangRU() {
							if ( langRUrotateX === 0 ) {
							clearInterval(intervalAnimationOflangRU);
							//callback function for lang-en icon
							var intervalAnimationOflangEN = setInterval( animationOflangEN, 50 );
							function animationOflangEN() {
								if ( langENrotateX === 0 ) {
									clearInterval(intervalAnimationOflangEN);
								} else {
									langENrotateX -= 5;
									document.getElementById( 'lang-en' ).style.transform = "rotateX(" + langENrotateX + "deg)";
								}
							}
							//end of callback function for lang-en icon
							} else {
								langRUrotateX -= 5;
								document.getElementById( 'lang-ru' ).style.transform = "rotateX(" + langRUrotateX + "deg)";
							}
						}
						//end of callback function for lang-ru icon
					} else {
						langUKrotateX -= 5;
						document.getElementById( 'lang-uk' ).style.transform = "rotateX(" + langUKrotateX + "deg)";
					}
				}
				//end of callback function for lang-uk icon
			} else {
			opacityLogo += 0.01;	
			document.getElementById( 'front-page-logo' ).style.opacity = opacityLogo;
			} /* end of if ( opacityLogo >= 1 ) */
		}/* end of function animationOfPageFrontLoad */
	} /*end of if ( document.getElementById( 'front-page-logo' ) ) */
}/*end of function */

/*function for language icons positioning on front page*/
function languageIcons() {
	if ( document.getElementById( 'front-page-logo' ) ) {	
		var windowWidth = window.innerWidth;	
		var windowHeight = window.innerHeight;		
		document.getElementsByClassName( 'container-fluid' )[0].style.paddingLeft = windowWidth/10 + 'px';
		document.getElementsByClassName( 'container-fluid' )[0].style.paddingRight = windowWidth/10 + 'px';				
		var logoWidth = document.getElementById( 'front-page-logo' ).clientWidth;
		var iconUKleftPosition = ( windowWidth - logoWidth ) / 2 - windowWidth/15;
		var iconUKtopPosition = windowHeight/20 + logoWidth/6;		
		document.getElementById( 'lang-uk' ).style.left = iconUKleftPosition + 'px';
		document.getElementById( 'lang-uk' ).style.top = iconUKtopPosition + 'px';		
		var iconRUrightPosition = iconUKleftPosition;
		var iconRUtopPosition = iconUKtopPosition;
		document.getElementById( 'lang-ru' ).style.right = iconRUrightPosition + 'px';
		document.getElementById( 'lang-ru' ).style.top = iconRUtopPosition + 'px';		
		var iconENwidth = document.getElementById( 'lang-en' ).clientWidth;		
		var iconENleftPosition = ( windowWidth - iconENwidth )/2;
		if ( windowHeight < 440 ) {
			var iconENtopPositioin = windowHeight/15 + logoWidth;
		} else {
			var iconENtopPositioin = windowHeight/10 + logoWidth;
		}		
		document.getElementById( 'lang-en' ).style.left = iconENleftPosition + 'px';
		document.getElementById( 'lang-en' ).style.top = iconENtopPositioin + 'px';
	}	
}

/* function adds classes to standard WP nav menu to styling it as bootstrap standard nav menu with collapsed menu on narrow screen devices.
* It also renames menu items with long names of conferences and adds additional menu item in conference menu to return back on Centre page.   
*/
function addClassToNav() {
	jQuery( 'div.menu' ).addClass( 'collapse navbar-collapse' );
	jQuery( 'div.menu' ).attr( 'id', 'bs-navbar-collapse-1' );
	jQuery( 'div.menu > ul' ).addClass( 'nav nav-pills nav-stacked' ); 
	jQuery( 'div.menu > ul.nav > li.page_item_has_children' ).addClass( 'dropdown' );
	jQuery( 'div.menu > ul.nav > li.dropdown > a' ).addClass( 'dropdown-toggle' );
	jQuery( 'div.menu > ul.nav > li.dropdown > a.dropdown-toggle' ).attr( 'data-toggle', 'dropdown' )
		.attr( 'href', '' )
		.attr( 'role', 'button' )
		.attr( 'aria-haspopup', 'true' )
		.attr( 'aria-expanded', 'false');  	
	jQuery( 'div.menu > ul.nav > li.dropdown > a.dropdown-toggle' ).append( '<span class="caret"></span>' ); 
	jQuery( 'ul.children' ).addClass( 'dropdown-menu' );
	/* short title for menu items*/
	jQuery( 'li.page-item-68 > a' ).html( 'VI МНТК &lsaquo;&lsaquo;Проблеми хіммотології&rsaquo;&rsaquo;' );
	jQuery( 'li.page-item-25 > ul.children > li.page-item-27 > a' ).html( 'VI МНТК &lsaquo;&lsaquo;Проблемы химмотологии&rsaquo;&rsaquo;' );
	jQuery( 'li.page-item-32 > a' ).html( 'The VIth ICST &lsaquo;&lsaquo;Problems of Chemmotology&rsaquo;&rsaquo;' );	
	jQuery( 'li.page-item-937 > a' ).html( 'МНТК &lsaquo;&lsaquo;Високоякісні бітуми для будівництва українських доріг&rsaquo;&rsaquo;' );	
	jQuery( 'li.page-item-25 > ul.children > li.page-item-44 > a' ).html( 'МНТК &lsaquo;&lsaquo;Высококачественные битумы для строительства украинских дорог&rsaquo;&rsaquo;' );	
	jQuery( 'ul.children > li.page-item-46 > a' ).html( 'ICST &lsaquo;&lsaquo;High-Quality Bitumens for Ukrainian Roads Construction&rsaquo;&rsaquo;' );	
	/* add menu item to conference menu for return to main menu */
	if ( jQuery( 'html').attr( 'lang') === 'uk' ) {
		jQuery( 'li.page-item-1124' ).after( '<li class="page_item"><a href="/centr/diy/">Перейти на сторінку Центру</a></li>' );
	}
	if ( jQuery( 'html').attr( 'lang') === 'ru-RU' ) {
		jQuery( 'li.page-item-42' ).after( '<li class="page_item"><a href="/ru/centr/diy/">Перейти на страницу Центра</a></li>' );
	}
	if ( jQuery( 'html').attr( 'lang') === 'en-US' ) {
		jQuery( 'li.page-item-44' ).after( '<li class="page_item"><a href="/en/centr/diy/">Go to Centre page</a></li>' );
	}
}

/* function sets 5 vw text indent for standard paragraphs and null text indent for paragraphs with images and for contact form for better centre alignment*/
function textIndentParagraphs() {
	jQuery( 'div.page-content > p' ).css( 'text-indent', '5vw' );
	jQuery( 'div.page-content > p > img' ).parent().css( 'text-indent', '0vw' );	
	jQuery( 'div.page-content > form.contact-form' ).parent().addClass( 'no-text-indent' );	
	jQuery( 'div.no-text-indent > p' ).css( 'text-indent', '0vw' );	
}

/* function replaces strings with actual page parameters to share content in social networks*/
function SocialLinks() {
	var bsi = document.getElementsByClassName( 'btn-social-icon' );	
	for ( i = 0; i < bsi.length; i ++ ) {
		bsi[i].href = bsi[i].href.replace( 'YOUR-URL', window.location.href );
		bsi[i].href = bsi[i].href.replace( 'YOUR-TITLE', document.title );
		if ( document.getElementsByClassName( 'page-content' )[0].getElementsByTagName( 'p' )[0] ) {
			bsi[i].href = bsi[i].href.replace( 'YOUR-DESCRIPTION', document.getElementsByClassName( 'page-content' )[0].getElementsByTagName( 'p' )[0].textContent );
		}	
		bsi[i].href = bsi[i].href.replace( 'YOUR-IMAGE-SRC', 'http://chemmotology.nau.edu.ua' + document.getElementsByTagName( 'img' )[0].getAttribute( 'src' ) );	
		bsi[i].target = "_blank";	
	}
}

/* function displays input search field in result of hovering */
function customizingSearchForm() {
	jQuery( '.search-form > button.search-button' ).mouseenter( function() {
		jQuery( '.search-form > label > input.search-field' ).css( 'display', 'inline-block' );
	} );
	
}
/* function for hide background logo for blank pages */
function noBackgroundLogo() {
if ( !jQuery( '.page-content > p' ).html() ) {
jQuery( '.page-content').css( 'background', 'none' );
}

}

jQuery( document ).ready( function() {	
	addClassToNav();
	fontSizeResponsive();	
	languageIconsFrontPage();
	textIndentParagraphs();
	SocialLinks();
	customizingSearchForm(); 
noBackgroundLogo();
});
jQuery( window ).resize( function() {	
	fontSizeResponsive();	
	languageIcons();	
});			