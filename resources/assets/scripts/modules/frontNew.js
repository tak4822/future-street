export default {
  scroll() {
    const newHeight = $('section.new').height();
    const pickedHeight = $('section.picked').height();

    $(window).on('scroll', function () {
      const scrollTop = $(this).scrollTop();
      const endPoint = 150 + newHeight - pickedHeight - 100;
      if (scrollTop < 30) {
        $('section.picked').css({
          position: 'static',
        })

        $('section.new').css({
          marginLeft: 0,
        })
      } else if (scrollTop >= 30 && scrollTop < endPoint) {
        $('section.picked').css({
          position: 'fixed',
          top: '100px',
        })
        $('section.new').css({
          marginLeft: '556px',
        })
      } else if (scrollTop >= endPoint) {
        $('section.picked').css({
          position: 'absolute',
          top: newHeight - pickedHeight + 'px',
        })
      }
    })
  },
}
