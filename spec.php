<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
        <style>
            hr {
                border-top: 2px solid black;
                margin: 10px 0 !important;
            }
        </style>
    </head>
    <body class="overflow-x-hidden">
        <?php include 'header.php'; ?>

        <div style="background-color: grey;">
            <div class="container">
                <nav class="phone-nav">
                    <div class="logo">Northlight 4G</div>
                    <div class="nav-links">
                        <a href="index.php">Overview</a>
                        <a href="spec.php">Specifications</a>
                        <a href="#" class="button">Buy</a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Specification -->
        <div class="spec">
            <div class="container section-padding">
                <div class="row pb-5">
                    <div class="col-6 col-md-4">
                        <div class="title">Specifications</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Display</h3>
                        <hr>
                        <p>Size: 5.45 inch TFT LCD</p>
                        <p>Resolution: 480x960FW+IPS</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Processor</h3>
                        <hr>
                        <p>MT6761 Quad-Core</p>
                        <p>@2GHz</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Camera</h3>
                        <hr>
                        <p>Front Camera: 2MP</p>
                        <p>Rear Camera: 5MP with LED</p>
                    </div>

                    <div class="col-6 col-md-4 spec-wrap">
                        <h3 class="text-nowrap">Memory & Storage</h3>
                        <hr>
                        <p>RAM: 3 GB</p>
                        <p>ROM: 32 GB</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Networks</h3>
                        <hr>
                        <p>2G: B2/B3/B5/B8</p>
                        <p>3G: B1/B2/B4/B5/B8</p>
                        <p style="overflow-wrap: break-word;">4G: B1/<wbr>B2/<wbr>B3/<wbr>B4/<wbr>B5/<wbr>B7/<wbr>B8/<wbr>B12/<wbr>B17/<wbr>B20/<wbr>B25/<wbr>B26/<wbr>B34/<wbr>B38/<wbr>B39/<wbr>B40/<wbr>B41/<wbr>B66/<wbr>B71</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Connectivity</h3>
                        <hr>
                        <p>WiFi: 5 802.11a/b/g/n/ac</p></p>
                        <p>Bluetooth: 5.2</p>
                        <p>Location: GPS/BDS/Glonass/Galileo</p>
                    </div>

                    <div class="col-6 col-md-4 spec-wrap">
                        <h3 class="text-nowrap">Battery & Charging</h3>
                        <hr>
                        <p>Battery: 2500mAh</p>
                        <p>5V/1A charging</p>
                        <p>USB Type-C</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Operating System</h3>
                        <hr>
                        <p>Android™ 14</p>
                    </div>
                    <div class="col-6 col-md-4 spec-wrap">
                        <h3>Others</h3>
                        <hr>
                        <p>3.5mm</p>
                        <p>Rear Camera: 5MP with LED</p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>