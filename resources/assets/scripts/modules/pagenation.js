import Barba from 'barba.js/dist/barba.min';

export default function () {
  if ($('select.select').length) {
    $('select.select').change(function () {
      const newUrl = $(this).val();
      Barba.Pjax.goTo(newUrl)
    })
  }
}
