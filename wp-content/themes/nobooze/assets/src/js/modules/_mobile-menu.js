import $ from 'jquery';
export class Menu {
    constructor() {
        this.html = $('html');
        this.header = $('.u-header');
        this.buttonToggle = $('#menu-toggle');
        this.button = $('.menu-toggle__wrapper');
        this.menu = $('.m-menu');
        this.link = $('.m-menu__has-children .m-menu__link');
        this.events();
    }
    events() {
        this.button.on('click', this.toggleMobileMenu.bind(this));
        this.link.on('click', this.openDropdown);
    }
    toggleMobileMenu() {
        this.html.toggleClass('no-scroll');
        this.header.toggleClass('u-header--scroll');
        this.buttonToggle.toggleClass('menu-toggle--active');
        this.menu.slideToggle({
            duration: 200 
        });
    }
    openDropdown() {
        $(this).toggleClass('m-menu__link--active');
        const dropdown = $(this).siblings('.m-submenu__ul');
        dropdown.slideToggle({
            duration: 200
        });
    }
}
