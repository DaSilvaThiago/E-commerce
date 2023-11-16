<!DOCTYPE html>
<html class="no-js" lang="en">

<x-headHtml/>

<body class="config">
    <x-preloader/>

    <!--====== Main App ======-->
    <div id="app">
        <a id="topScroll" href="#top" style="position: fixed; z-index: 100;"><i class="fa-solid fa-arrow-up" style="color: #000000;"></i></a>
{{$slot}}


        <!--====== Main Footer ======-->
        <x-mainFooter/>
    </div>
    <!--====== End - Main App ======-->


<x-someScripts/>
</body>
</html>