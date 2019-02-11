import birdSpeak from '../modules/birdSpeak';

export default {
  fixedClass: 'fixed',
  scrollBreakPoint: 20,
  fixed: false,
  birdSaid: false,

  clearFix() {
    $('.header').removeClass(this.fixedClass);
  },

  fix() {
    $('.header').addClass(this.fixedClass);
    if (!this.birdSaid) {
      this.birdSaid = true;
      setTimeout(function () {
        birdSpeak();
      }, 200);
    }
  },

  scroll() {
    const _this = this
    $(window).on('load scroll', function () {
      const value = $(this).scrollTop();
      if (value > _this.scrollBreakPoint && !_this.fixed) {
        _this.fixed = true;
        _this.fix();
      } else if (value <= _this.scrollBreakPoint && _this.fixed) {
        _this.fixed = false;
        _this.clearFix();
      }
    });
  },

  clearScroll() {
    $(window).off('load scroll');
  },

  toggleHamburger() {
    $('.hamburger').on('click', function () {
      if ($(this).hasClass('is-active')) {
        $(this).removeClass('is-active');
        $('.nav-primary').removeClass('active');

        $('.nav-desc-wrapper').removeClass('active');
      } else {
        $(this).addClass('is-active');
        $('.nav-primary').addClass('active');

        $('.nav-desc-wrapper').addClass('active');
        $('.nav-primary')
          .addClass('active');

        $('.fun-text').click(function () {
          $(this).addClass('clicked');
        })
      }
    })
    $('.nav-primary a').click(function () {
      $('.hamburger').removeClass('is-active');
      $('.nav-primary').removeClass('active');
    })
  },
}
