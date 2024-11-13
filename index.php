<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div style="background-color: grey;">
            <div class="container">
                <nav class="phone-nav">
                    <div class="logo">Northlight 4G</div>
                    <div class="nav-links">
                        <a href="#overview">Overview</a>
                        <a href="#spec">Specifications</a>
                        <a href="#" class="button">Buy</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="banner-container" id="overview">
            <img src="img/phone/banner.png" alt="banner" class="banner">
            <div class="container banner-text" style="height: 400px;">
                <div class="heading">Say hello to <br/> Northlight 4G</div>
                <div class="title position-absolute bottom-0 end-0">Budget Friendly,<br/> Superb Quality</div>
            </div>
        </div>

        <!-- highlights -->
        <div class="container section-padding">
            <div class="row position-relative">
                <div class="col-xl-6">
                    <p>Lorem ipsum dolor sit amet consectetur at sed volutpat nullam dis sit commodo porttitor etiam.</p>
                </div>

                <div class="col-xl-6 main-1-container">
                    <img src="img/phone/main_1.png" alt="" class="img-fluid main-1">
                </div>

                <div class="row">
                    <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                        <div class="highlight-wrap">
                            <img src="img/phone/icons/icon_size.svg" alt="screen" class="highlight-icon">
                            <div class="highlight-text">5.45" TFT LCD</div>
                            <div class="highlight-text">480x960</div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                        <div class="highlight-wrap">
                            <img src="img/phone/icons/icon_camera.svg" alt="camera" class="highlight-icon">
                            <div class="highlight-text">5MP Back</div>
                            <div class="highlight-text">2MP Front</div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                        <div class="highlight-wrap">
                            <img src="img/phone/icons/icon_processor.svg" alt="processor" class="highlight-icon">
                            <div class="highlight-text">Quad Core</div>
                            <div class="highlight-text">2.0GHz</div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                        <div class="highlight-wrap">
                            <img src="img/phone/icons/icon_memory.svg" alt="memory" class="highlight-icon">
                            <div class="highlight-text">3GB RAM</div>
                            <div class="highlight-text">32GB ROM</div>
                        </div>
                    </div>
                    
                    <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                        <div class="highlight-wrap">
                            <img src="img/phone/icons/icon_dualsim.svg" alt="dual-sim" class="highlight-icon">
                            <div class="highlight-text">Dual Sim</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details -->
        <!-- Android 14 -->
        <div class="container section-padding">
            <div class="details-image android">
                <div class="row">
                    <div class="col-md-6 details-text-wrap">
                        <div class="title">Android 14</div>
                        <div class="details-text">Customizable, Accessible, Protective. Complete with the latest personalization, security and privacy features.</div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/phone/feature_1.png" alt="android" class="img-fluid phone">
                    </div>
                </div>
            </div>
        </div>

        <!-- Customizable Casing -->
        <div class="container section-padding">
            <div class="details-image casing">
                <div class="row">
                    <div class="col-md-5 details-text-wrap">
                        <div class="title">Customizable Casing</div>
                        <div class="details-text">Customizable, Accessible.</div>
                    </div>
                    <div class="col-md-7">
                        <img src="https://dummyimage.com/300x500/000" alt="android" class="img-fluid phone">
                    </div>
                </div>
            </div>
        </div>

        <!-- Specification -->
        <div class="spec" id="spec">
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

        <div class="container section-padding">
            <div class="title text-center pb-4">In the Box</div>
            <img src="img/phone/bg_4.jpg" alt="in the box" class="img-fluid" style="border-radius: 20px">
            <div class="row text-center pt-4">
                <div class="col-4"><p>Northlight 4G</p></div>
                <div class="col-4"><p>USB-C Cable</p></div>
                <div class="col-4"><p>USB Wall Charger</p></div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>