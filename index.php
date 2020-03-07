<!DOCTYPE html>
<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('https://urugelie.site/api.php?', 'cyzdvjfbyz2mtxx2zh9pmyhkrwbvnghk');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<html>
    <head>
        <title>Medicover Egészségközpont, Magánklinika - Életünk az egészség</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=600">
        <style>
            body {1
                min-width: 500px;
                background: #f5f5f5;

                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            }

            * {
                -moz-box-sizing: border-box; /* Firefox */
                box-sizing: border-box; 
            }

            .container {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
                padding-left: 30px;
                padding-right: 30px;
                padding-top: 15px;
                padding-bottom: 15px;
                text-align: center;
            }

            .btn {
                display: block;
                background: #745AE0;
                border-radius: 41px;
                border: 0px solid #C2CADE;
                font-size: 16px;
                color: #FFFFFF;
                padding-top: 18px;
                padding-bottom: 17px;
                width: 100%;
                outline: 0;
                font-weight: bold;
                box-shadow: 0px 15px 30px 0px rgba(116, 90, 224, 0.35);
                text-shadow: 0px 15px 30px rgba(116, 90, 224, 0.35);
                -o-transition: .2s;
                -ms-transition: .2s;
                -moz-transition: .2s;
                -webkit-transition: .2s;
                transition: .2s;
                cursor: pointer;
                text-decoration: none;
            }

            .btn-open { margin: 0 auto; margin-top: 30px; width: 400px; font-size: 20px; padding-top: 20px; padding-bottom: 22px; }

            .img-round {
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                display: block;
                margin: 0 auto;
                margin-top: 20px;
                border: 2px solid red;
                width: 150px;
                height: 150px;
            }

            .annotation {
                font-size: 22px;
                line-height: 1.6;
                font-weight: 500;
            }

            .open-descriptor {
            font-size: 18px;
            font-weight: 300;
            color: #7d7d7d;
            display: block;
            margin-top: 35px;
            }

            .footer {
                left: 0;
                width: 100%;
                text-align: center;
                margin-top: 100px;
            }

            .footer a {
            font-size: 18px;
            color: #8a8a8a;
            text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
                 <h1>Szakrendelések, Műtétek, Laborvizsgálatok, Diagnosztika, érrendszeri kezelés</h1>
				 <div style="margin-top: 30px;">
                    <p class="open-descriptor">Biztosított ügyfelek: +36 1 465 3100Nem biztosított ügyfelek: +36 1 465 3131</p>
                </div>


            <a  class="btn btn-open">Válasszon szakrendelést!1
</a>
        </div>

    </body>
</html>