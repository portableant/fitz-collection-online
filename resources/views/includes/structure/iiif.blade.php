@section('iiif')
@if(array_key_exists('zoom', $record["_source"]["multimedia"][0]["processed"]))
<script type="text/javascript" src="/js/mootools-core-1.6.0-compressed.js"></script>
<script type="text/javascript" src="/js/iipmooviewer-2.0-min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="/css/iip.css" />
<script type="text/javascript">

// IIPMooViewer options: See documentation at http://iipimage.sourceforge.net for more details

// The *full* image path on the server. This path does *not* need to be in the web
// server root directory. On Windows, use Unix style forward slash paths without
// the "c:" prefix
var image = '/{{ $record["_source"]["multimedia"][0]["processed"]["zoom"]["location"] }}';

// Copyright or information message
var credit = 'The Fitzwilliam Museum, University of Cambridge';

// Create our iipmooviewer object
new IIPMooViewer( "viewer", {
  image: image,
  credit: credit,
  server: '/iipsrv/iipsrv.fcgi',
  showNavWindow: false,
  prefix: "/images/",
  enableFullscreen: true
});

</script>
@endif
@endsection
<h3>Deep zooming IIIF image</h3>
<div class="col-md-12 mb-3">
<div class="p-2">
  <div id="viewer" class="shadow-sm p-3 mx-auto mb-3 mt-3 rounded"></div>
</div>
</div>
