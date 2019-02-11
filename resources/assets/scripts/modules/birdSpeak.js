export default function () {
  let count = 0;
  let timer;
  const txt = $('#birdSpeak').data('text');

  function printText() {
    if (count <= txt.length) {
      count++;
      $('#birdSpeak').html(txt.substr(0, count))
        .queue(function (next) {
          timer = setTimeout(function () {
            printText();
          }, 50);
          next();
        });

    } else {
      clearTimeout(timer);
      return;
    }
  }

  setTimeout(function () {
    printText();
  }, 1000);
}
