export default {
  toggleRecomend() {
    $('.searchform-container > input')
      .focus(function () {
        $('.recommend-kw-wrapper').addClass('active');
      });
    $('.close-button').click(function () {
      $('.recommend-kw-wrapper').removeClass('active');
    })
  },
  clickKW() {
    // when click recommended kw
    $('.kw').click(function () {
      const kw = $(this).text();
      $('.searchform-container > input').val(kw);
      $('#searchform').submit();
      $('.recommend-kw-wrapper').removeClass('active');
      $('.mobile-search-container').removeClass('active');
    })

    // when click submit button
    $('#searchsubmit').click(function () {
      $('.recommend-kw-wrapper').removeClass('active');
      $('.mobile-search-container').removeClass('active');
    });
  },
  toggleMobileSearch() {
    // when click mobile search button located in header
    $('.header-search').click(function () {
      $('.mobile-search-container').addClass('active');
    })
    // when click overlay to close
    $('.mobile-search-container > .overlay').click(function () {
      $('.mobile-search-container').removeClass('active');
    });

    // when click close button to close
    $('.search-close-button').click(function () {
      $('.mobile-search-container').removeClass('active');
    });
  },
}
