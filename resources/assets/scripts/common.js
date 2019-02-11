import instagram from './modules/instagram';
import search from './modules/search';
import header from './modules/header';

// only once when loaded
export default function () {
  //instagram
  instagram.fetch();

  // search
  //recommend only desktop
  search.toggleRecomend();

  //show search only mobile
  search.toggleMobileSearch()

  // clikc recomend kw
  search.clickKW();

  //hamburger
  header.toggleHamburger()
}
