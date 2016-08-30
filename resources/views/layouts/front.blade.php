
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

@include('layouts.front.partial.head')

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page transparent-header  ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    @include('layouts.front.partial.header')
    @yield('content')



    <!-- section start -->
    <!-- ================ -->
    <!-- section end -->
    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    @include('layouts.front.partial.footer')
    <!-- footer end -->

</div>
<!-- page-wrapper end -->
@include('layouts.front.partial.scripts')

<div class="style-switcher closed">
    <div class="header">
        <a class="trigger" href="#"><i class="icon-cog-1"></i></a>
        <h2>Style Switcher</h2>
    </div>
    <div class="clearfix body">
        <h3>Predifined Colors</h3>
        <ul class="styleChange">
            <li class="light-blue selected" data-style="light_blue" title="light_blue"></li>
            <li class="blue" data-style="blue" title="blue"></li>
            <li class="green" data-style="green" title="green"></li>
            <li class="dark-cyan" data-style="dark_cyan" title="dark_cyan"></li>
            <li class="brown" data-style="brown" title="brown"></li>
            <li class="dark-red" data-style="dark_red" title="dark_red"></li>
            <li class="gold" data-style="gold" title="gold"></li>
            <li class="gray" data-style="gray" title="gray"></li>
            <li class="cool-green" data-style="cool_green" title="cool_green"></li>
            <li class="pink" data-style="pink" title="pink"></li>
            <li class="purple" data-style="purple" title="purple"></li>
            <li class="orange" data-style="orange" title="orange"></li>
            <li class="red" data-style="red" title="red"></li>
            <li class="vivid-red" data-style="vivid_red" title="vivid_red"></li>
        </ul>
        <hr>
        <h3>Layout Mode</h3>
        <ul class="layoutChange">
            <li class="wide selected" data-style="wide" title="wide"><i class="fa fa-arrow-left pr-10"></i>Wide<i class="fa fa-arrow-right pl-10"></i></li>
            <li class="boxed" data-style="boxed" title="boxed"><i class="fa fa-arrow-right pr-5"></i>Boxed<i class="fa fa-arrow-left pl-5"></i></li>
        </ul>
        <h3>Patterns</h3>
        <ul class="patternChange">
            <li class="pattern-0" data-style="pattern-0" title="white background"></li>
            <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
            <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
            <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
            <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
            <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
            <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
            <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
            <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
            <li class="pattern-9" data-style="pattern-9" title="pattern-9"></li>
        </ul>
        <ul class="resetAll">
            <li class="btn btn-default btn-sm" title="Reset"><a href="../index.html">Demos</a></li>
            <li class="btn btn-dark btn-sm" title="Reset">Reset All</li>
        </ul>
    </div>
</div>
<!-- Color Switcher End -->
<!-- Color Switcher (Remove these lines) -->

</body>
</html>
