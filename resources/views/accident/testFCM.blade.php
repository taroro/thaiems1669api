<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase Cloud Messaging Example</title>

    <!-- Material Design Theming -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

    <style>
        html, body {
            font-family: 'Roboto', 'Helvetica', sans-serif;
        }
        a {
            text-decoration: none;
        }
        li a {
            text-decoration: underline;
            color: #0288d1;
        }
        .mdl-grid {
            max-width: 1024px;
            margin: auto;
        }
        .mdl-layout__header-row {
            padding: 0;
        }
        .quickstart-user-details-container {
            margin-top: 20px;
            line-height: 25px;
        }
        #quickstart-sign-in-status {
            font-weight: bold;
        }
        pre {
            overflow-x: scroll;
            line-height: 18px;
        }
        code {
            white-space: pre-wrap;
            word-break: break-all;
        }
        h3 {
            background: url('/firebase-logo.png') no-repeat;
            background-size: 40px;
            padding-left: 50px;
            color: white;
        }
    </style>
    <script rel="manifest" src="{{ asset('js/manifest.js') }}"></script>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <!-- Header section containing title -->
    <header class="mdl-layout__header mdl-color-text--white mdl-color--light-blue-700">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
            <div class="mdl-layout__header-row mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--8-col-desktop">
                <h3>Firebase Cloud Messaging</h3>
            </div>
        </div>
    </header>

    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

            <!-- Container for the Table of content -->
            <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    <!-- div to display the generated Instance ID token -->
                    <div id="token_div" style="display: none;">
                        <h4>Instance ID Token</h4>
                        <p id="token" style="word-break: break-all;"></p>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                onclick="deleteToken()">Delete Token</button>
                    </div>
                    <!-- div to display the UI to allow the request for permission to
                         notify the user. This is shown if the app has not yet been
                         granted permission to notify. -->
                    <div id="permission_div" style="display: none;">
                        <h4>Needs Permission</h4>
                        <p id="token"></p>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                onclick="requestPermission()">Request Permission</button>
                    </div>
                    <!-- div to display messages received by this app. -->
                    <div id="messages"></div>
                </div>
            </div>

        </div>
    </main>
</div>

<!-- Import and configure the Firebase SDK -->
<!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
<!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyDMfs9Kg54U-wcOkqPoErimSLfEXiBBPnY",
        authDomain: "testfirebase-7f0ab.firebaseapp.com",
        databaseURL: "https://testfirebase-7f0ab.firebaseio.com",
        projectId: "testfirebase-7f0ab",
        storageBucket: "testfirebase-7f0ab.appspot.com",
        messagingSenderId: "674578509591"
    };
    firebase.initializeApp(config);
    const messaging = firebase.messaging();
    messaging.requestPermission()
        .then(function() {
            console.log('Notification permission granted.');
            // TODO(developer): Retrieve an Instance ID token for use with FCM.
            // ...
        })
        .catch(function(err) {
            console.log('Unable to get permission to notify.', err);
        });
</script>
</body>
</html>