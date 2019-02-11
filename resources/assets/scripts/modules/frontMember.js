export default function () {
  // eslint-disable-next-line no-undef
  const data = members_data;

  const maxCount = data.length - 1;
  let count = 0;
  let slidable = true;


  let slideAnimation = $(window).width() - 140 + 'px';
  if (window.matchMedia('(min-width:1000px)').matches) {
    slideAnimation = '340px';
  } else if (window.matchMedia('(min-width:768px)').matches) {
    slideAnimation = '350px';
  } else if (window.matchMedia('(min-width:430px)').matches) {
    slideAnimation = '300px';
  }

  $('.navigation.left').on('click', prevAction);
  $('.navigation.right').on('click', nextAction);

  function prevAction() {
    $('.navigation.right').addClass('active');
    if (count > 0 && slidable) {
      slidable = false;
      count -= 1;
      sliderAction('prev');
    }

    if (count === 0) {
      $('.navigation.left').removeClass('active');
    }
  }

  function nextAction() {
    $('.navigation.left').addClass('active');
    if (count < maxCount && slidable) {
      slidable = false;
      count += 1;
      sliderAction('next');
    }

    if (count === maxCount) {
      $('.navigation.right').removeClass('active');
    }
  }

  function animateContents(el, index) {
    $('#slider-' + el)
      .addClass('slider-contents-animation')
      .delay(400)
      .text(data[index][el])
      .delay(400)
      .queue(function (next) {
        $(this).removeClass('slider-contents-animation');
        next();
      });
  }

  function changeContents(index) {
    animateContents('name', index);
    animateContents('role', index);
    animateContents('words', index);
    animateContents('desc', index);
    $('#color').attr('style', `background: ${data[index]['color']}`);

    setTimeout(function () {
      slidable = true;
    }, 800);
  }

  function sliderAction(direction) {
    changeContents(count);

    if (direction === 'prev') {
      $('.avator-list').animate({
        left: `+=${slideAnimation}`,
      }, 400);

    } else if (direction === 'next') {
      $('.avator-list').animate({
        left: `-=${slideAnimation}`,
      }, 400);
    }
    setTimeout(function () {
      slidable = true;
    }, 400);
  }
}
