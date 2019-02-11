<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <div class="searchform-container">
    <input class="input" type="text" value="" placeholder="バンクーバー, カフェ, 英語..." autocomplete="off" name="s" id="s" />
    <button class="button" type="submit" id="searchsubmit" value="">
      <img src="@asset('images/ico_search.svg')" alt="">
    </button>
  </div>
</form>
