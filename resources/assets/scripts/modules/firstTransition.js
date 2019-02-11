export default function () {

  const h = $(window).height();
  const w = $(window).width();

  const img = $('<img />')
    .attr('src', require('../../images/first_loading.gif'))
    .css({
      width: '200px',
      position: 'fixed',
      top: h / 2 - 80 + 'px',
      left: w / 2 - 100 + 'px',
    });

  $('.transition-overlay')
    .append(img)
    .height(h)
    .width(w)
    .css({
      top: 0,
    })
    .fadeIn(100);

  $(window).on('load', function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.body.scrollIntoView();

    $('.transition-overlay')
      .delay(1500)
      .fadeOut(300);
    $('#site-wrap').css('opacity', 1);
  });


  // facebook
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
      'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=320108315190662&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
}
