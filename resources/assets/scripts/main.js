// import external dependencies
import 'jquery';

import firstTransition from './modules/firstTransition';
firstTransition();

import common from './common';
// Load Events
jQuery(document).ready(() => {
  common();
});


// import local dependencies
import barbaInit from './barba/init';
import frontPage from './views/frontPage';
import articles from './views/articles';
import posts from './views/posts';
import others from './views/others';

const views = [frontPage, articles, posts, others];


// 最初のページローディングのスピードはこっちで調節
// ページ間でのトランジションはBarba.jsで調節
$(window).on('load', function () {
  barbaInit(views);
});
