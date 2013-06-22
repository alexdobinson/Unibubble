<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ $page->title }}</title>
        <meta name="description" content={{ $page->description }}>
        <meta name="viewport" content="width=device-width">

        {{ HTML::style('css/site.css') }}

        {{ HTML::script('//use.typekit.net/lhy5yig.js') }}

        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    </head>

    <body>

        <header class="main">

            <nav class="clearfix">

                <ul class="site-nav clearfix">
                    {{ HTML::linkRoute('marketplace', 'Explore Marketplace', null, array('title' => 'Explore Marketplace', 'class' => 'current')) }}
                </ul>

                <ul class="auth-nav clearfix">

                    @if (Auth::check())
                        Logged in
                    @else
                        {{ HTML::linkRoute('login/show', 'Login', null, array('title' => 'Login', 'class' => 'login'))}}
                    @endif



                </ul>
            </nav>
        </header>

    	@yield('content')
    </body>


 </html>