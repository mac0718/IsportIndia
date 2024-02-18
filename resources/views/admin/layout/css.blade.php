<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
<link rel="manifest" href="{{ asset('admin/img/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('admin/img/safari-pinned-tab.svg" color="#5bbad5') }}">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="Core – Dashboard Builder">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@ui8">
<meta name="twitter:title" content="Core – Dashboard Builder">
<meta name="twitter:description" content="Core – Dashboard Builder">
<meta name="twitter:creator" content="@ui8">
<meta name="twitter:image" content="https://images.ui8.net/uploads/thumbnail_1636636019240.png">
<meta property="og:title" content="Core – Dashboard Builder">
<meta property="og:type"
  content="Core is a clean and minimal dashboard UI Kit targeting a wide variety of use cases for desktop, tablet, and mobile applications in awesome light or dark mode 🔥">
<meta property="og:url" content="https://ui8.net/ui8/products/core-dashboard-builder">
<meta property="og:image" content="https://images.ui8.net/uploads/thumbnail_1636636019240.png">
<meta property="og:description" content="Core – Dashboard Builder">
<meta property="og:site_name" content="Core – Dashboard Builder">
<meta property="fb:admins" content="132951670226590">
<link rel="stylesheet" media="all" href="{{ asset('admin/css/app.min.css') }}">
<!-- include libraries(jQuery, bootstrap) -->

<script>
  var viewportmeta = document.querySelector('meta[name="viewport"]');
  if (viewportmeta) {
    if (screen.width < 375) {
      var newScale = screen.width / 375;
      viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
    } else {
      viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
    }
  }
</script>