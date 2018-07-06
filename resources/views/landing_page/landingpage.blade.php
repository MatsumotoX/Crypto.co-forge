<!DOCTYPE html>
<html lang="en">

<head>
  <!--

 ██████╗██████╗ ██╗   ██╗██████╗ ████████╗ ██████╗ ██╗   ██╗ █████╗ ████████╗██╗ ██████╗ ███╗   ██╗    ██████╗ ██████╗
██╔════╝██╔══██╗╚██╗ ██╔╝██╔══██╗╚══██╔══╝██╔═══██╗██║   ██║██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║   ██╔════╝██╔═══██╗
██║     ██████╔╝ ╚████╔╝ ██████╔╝   ██║   ██║   ██║██║   ██║███████║   ██║   ██║██║   ██║██╔██╗ ██║   ██║     ██║   ██║
██║     ██╔══██╗  ╚██╔╝  ██╔═══╝    ██║   ██║   ██║╚██╗ ██╔╝██╔══██║   ██║   ██║██║   ██║██║╚██╗██║   ██║     ██║   ██║
╚██████╗██║  ██║   ██║   ██║        ██║   ╚██████╔╝ ╚████╔╝ ██║  ██║   ██║   ██║╚██████╔╝██║ ╚████║██╗╚██████╗╚██████╔╝
 ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚═╝        ╚═╝    ╚═════╝   ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝ ╚═════╝ ╚═════╝

    If you're reading, we're hiring.
    Please send your profile to pd.ananchai @ gmail . com

  -->

    @include('landing_page._meta')

    @include('landing_page._script')
    
</head>

<body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70">
    <div id="royal_preloader"></div>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHQLFJM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




    @include('landing_page._navbar')

    @include('landing_page._top')

    @include('landing_page._arbot')
    
    @include('landing_page._features')

    @include('landing_page._product')

    @include('landing_page._pricing')

    @include('landing_page._team')

    @include('landing_page._contact')

    @include('landing_page._footer')

</body>

</html>
