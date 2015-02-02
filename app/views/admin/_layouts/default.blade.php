<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="layout" content="main"/>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>
<body>
        @include('admin._partials.navigation_main')

        <div id="body-container">
            <div id="body-content">
                @if(Sentry::check())
                    @include('admin._partials.navigation')
                @endif
                @yield('page container')
            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Application Footer</p>
                <div class="disclaimer">
                    <p>This is an example disclaimer. All right reserved.</p>
                    <p>Copyright © keaplogik 2011-2012</p>
                </div>
            </div>
        </footer>

        <script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="/js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <script type="text/javascript">
        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });
    </script>

    </body>
</html>