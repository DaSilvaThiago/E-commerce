<!DOCTYPE html>
<html class="no-js" lang="en">

<x-headHtml/>

<body class="config">
    <x-preloader/>

    <!--====== Main App ======-->
    <div id="app">

{{$slot}}


        <!--====== Main Footer ======-->
        <x-mainFooter/>
    </div>
    <!--====== End - Main App ======-->


<x-someScripts/>
</body>
</html>