<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php(body_class())>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNCLD8M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="transition-overlay"></div>
  <div id="site-wrap" style="opacity: 0;">
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.mobile-search')
    <div class="wrap container" role="document">
      <div class="content">
        <div id="barba-wrapper" class="wrap container" role="document">
          <div class="barba-container" data-namespace="{{ $current_template }}">
            @include('partials.share-buttons')
            <main class="main">
              @yield('content')
            </main>
          </div>
        </div>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
  </div>
  @php wp_footer() @endphp
</body>

</html>
