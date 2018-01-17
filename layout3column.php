<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tracker</title>

    <link rel="stylesheet" href="css/metro.css">
    <link rel="stylesheet" href="css/metro-colors.min.css">
    <link rel="stylesheet" href="css/metro-icons.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc-sw8SR_DBoqIQ1LB27w3cGks1S9EBB4&v=3.exp&libraries=geometry,places"></script>


    <style>
        * {
            padding: 0;
            margin: 0;
        }

        html, body {
            font-family: Arial, sans-serif;
            background: #111;
            height: 100%;
        }

        #layout {
            margin: 0 auto;
            min-width: 600px;
            min-height: 100%;
            height: 100%;
        }

        /* invisible to IE6 */
        #layout[id] {
            height: auto;
            overflow: hidden;
        }

        #content {
            padding: 0 200px
        }

        #header {
            height: 60px;
            background: #222;
        }

        #fix {
            height: 60px;
            clear: both;
        }

        .side {
            width: 200px;
            float: left;
            background: #292929;
            padding-bottom: 32000px;
            margin-bottom: -32000px;
        }

        .other {
            float: right;
        }

        #footer {
            height: 60px;
            background: #222;
            margin-top: -60px;
        }

        /* layer order, invisible to IE6 */
        #footer[id] {
            z-index: 100;
            position: relative;
        }

        p {
            color: #999;
            padding: 20px;
            font-size: 11px;
        }

    </style>
</head>
<body>
<div id="layout">
    <div id="header"></div>
    <div class="side">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </div>
    <div class="other side">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </div>
    <div id="content">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>

    </div>
    <div id="fix"></div>
</div>
<div id="footer"></div>


<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/metro.min.js"></script>
<script src="script/app.js"></script>
</body>
</html>