<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PolyShift</title>
    <!-- Place favicon.ico in the `app/` directory -->

    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#2E3AA1">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Tile color for Win8 -->
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PSK">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Polymer Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild-->

    <!-- build:js bower_components/webcomponentsjs/webcomponents-lite.min.js -->
    <script src="../bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    <!-- endbuild -->

    <!-- will be replaced with elements/elements.vulcanized.html -->
    <link rel="import" href="elements/elements.html">
    <!-- endreplace-->
    <!--Bower Imports-->
    <!--PUT NEW COMPONENTS HERE-->
    <link rel="import" href="../bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="../bower_components/paper-header-panel/paper-header-panel.html">
    <link rel="import" href="../bower_components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="../bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="../bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="../bower_components/paper-tabs/paper-tab.html">
    <link rel="import" href="../bower_components/iron-pages/iron-pages.html">
    <!--End of Components-->
    <!--Iron-Icons-->
    <link href="../bower_components/iron-icons/iron-icons.html" rel="import">
    <!-- For shared styles, shared-styles.html import in elements.html -->
    <style is="custom-style" include="shared-styles">
        #papertab {
            @apply(--layout-horizontal);
            @apply(--layout-center-center);
            alignment: center;
        }
    </style>


</head>
<body>
<?php include 'Header.html';?>

</body>
</html>
