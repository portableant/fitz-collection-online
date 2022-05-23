<meta charset="utf-8">
<meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">

<title>The Fitzwilliam Museum - @yield('title')</title>
<meta name="description" content="@yield('description')"/>
@hasSection('keywords')
    <meta name="keywords" content="@yield('keywords')"/>
@endif
<!-- Canonical link -->
<link rel="canonical" href="{{ URL::current() }}"/>

<!-- Open graph -->
<meta property="og:locale" content="{{ app()->getLocale() }}"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="@yield('title')"/>
<meta property="og:description" content="@yield('description')"/>
<meta property="og:url" content="{{ URL::current() }}"/>
<meta property="og:site_name" content="The Fitzwilliam Museum"/>

@hasSection('hero_image')
    <meta property="og:image" content="@yield('hero_image')"/>
    <meta name="twitter:image" content="@yield('hero_image')"/>
@else
    <meta property="og:image"
          content="https://fitz-cms-images.s3.eu-west-2.amazonaws.com/fitzwilliam-museum-main-entrance-2018_3.jpg"/>
    <meta name="twitter:image"
          content="https://fitz-cms-images.s3.eu-west-2.amazonaws.com/fitzwilliam-museum-main-entrance-2018_3.jpg"/>
@endif

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Twitter card -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="@yield('description')"/>
<meta name="twitter:title" content="@yield('title')"/>
<meta name="twitter:site" content="@yield('twitter_id', '@fitzmuseum_uk')"/>
<meta name="twitter:creator" content="@yield('twitter_id', '@fitzmuseum_uk')"/>

<!-- DNS prefetches -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="dns-prefetch" href="//s3.amazonaws.com">
<link rel="dns-prefetch" href="//use.fontawesome.com">

<link type="text/plain" rel="author" href="{{ URL::to('/humans.txt') }}"/>
<!-- end of humans.txt -->
<link href="{{ URL::to('/news/feed') }}" rel="alternate"
      type="application/atom+xml" title="Latest news from the museum"/>

<script type="application/ld+json">
    {"publisher":{"@type":"Organization",
    "logo":{"@type":"ImageObject",
    "url":"{{ URL::to('/images/logos/FV.png') }}"}},
    "headline":"The Fitzwilliam Museum","@type":"WebSite","url":"{{ URL::to('/')}}",
    "name":"The Fitzwilliam Museum",
    "description":"The Fitzwilliam Museum is the principal museum of the University of Cambridge",
    "@context":"https://schema.org"}

</script>

{{-- <script type="text/javascript">

  var BugHerdConfig = {
    reporter: {required: "true"},
    feedback: {
      "tab_position":"bottom-left",
 			tab_text: "Report a problem/ give feedback"
 		}
  };

  (function (d, t) {
    var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
    bh.type = 'text/javascript';
    bh.src = '//www.bugherd.com/sidebarv2.js?apikey=akxmjgmostfy0dnzbyr92g';
    s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script> --}}
