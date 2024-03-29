<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chextout - Text message purchasing</title>
    <meta name="description" content="Chextout allows you to sell your products through text messaging.">
    <meta name="viewport" content="width=device-width">

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js') }}
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    
    {{ HTML::style('css/app.css') }}
    {{ HTML::script('js/foundation/modernizr.foundation.js') }}
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-touch-icon-57-precomposed.png') }}">
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    
    {{ render('layouts._header'); }}

    @yield('content')
    
    {{ render('layouts._footer'); }}
                
    <!-- begin javascript -->
    <!-- Included JS Files (Uncompressed) -->
    {{ HTML::script('js/foundation/jquery.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.tabs.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.reveal.js') }}
    {{ HTML::script('js/foundation/jquery.placeholder.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.tooltips.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.topbar.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.accordion.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.navigation.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.mediaQueryToggle.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.buttons.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.orbit.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.alerts.js') }}
    {{ HTML::script('js/foundation/jquery.foundation.forms.js') }}
    
  	<!-- Application Javascript, safe to override -->
    {{ HTML::script('js/foundation/app.js') }}
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/main.js') }}
	<!-- end javascript -->

</body>
</html>
