import $ from 'jquery';

export class Accessibility {
    constructor() {
		this.events();
	}

    events() {
        $('.u-header').on('mouseenter focusin', '.u-header__cta', function (e) {
            $(this)
                .parent('.u-header__li')
                .addClass('u-header__li--active')
                .siblings('.u-header__li')
                .removeClass('u-header__li--active')
        });

        $('.u-header__sub__ul').on('mouseleave', function() {
            $('.u-header__li').removeClass('u-header__li--active')
        })
    }
}