<footer id="footer" class="clearfix">
    <div class="container-fluid kontakti-wrapper no-padding">
        <div class="row">

            <div class="col-md-4 col-xs-12 hidden-xs hidden-sm ">
                <h4 class="text-center ">Find Us</h4>
                <div id="mapid" class="map-bg">
                    <div class="row">
                        <div class="col-xs-12 rovinj">
                            <a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank"></a>
                        </div>
                        <div class="col-xs-12 villas">
                            <a href="https://goo.gl/maps/CipgQpZywKz" target="_blank"></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <h4 class="text-center ">Send us a Message!</h4>
                     <form role="form" method="post" id="reused_form">
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message!" maxlength="6000" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label id="captcha-label"></label>
                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter CAPTCHA" required>
                            <input type="hidden" id="captcha-solution">
                        </div>
                        <button type="submit" class="btn btn-lg btn-default">SEND</button>
                    </form>

             
            </div>
            
            <!-- map visible xs only -->
            <div class="col-md-4 col-xs-12 visible-xs visible-sm">
                <h4 class="text-center">Find Us</h4>
                <div id="mapid" class="map-bg">
                    <div class="row">
                        <div class="col-xs-12 rovinj">
                            <a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank"></a>
                        </div>
                        <div class="col-xs-12 villas">
                            <a href="https://goo.gl/maps/CipgQpZywKz" target="_blank"></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-xs-12 contact-info">
                <h4 class="text-center">Contact</h4>

                <ul class="list-unstyled contact-list">
                    <li>
                        <h5><span class="fa fa-map-marker"></span> BOARDING POINT - DIRECTIONS</h5>
                    </li>
                    <li><a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank">Rovinj's northern port "Valdibora"</a></li>
                    <li><a href="https://goo.gl/maps/CipgQpZywKz" target="_blank">The tourist resort "Vilas Rubin"</a></li>
                    <li><b><small class="text-muted">CLICK FOR WAYPOINT</small></b></li>
                    <hr>
                    <li>
                        <h5><span class="fa fa-phone"></span> TEL / <span class="fa fa-whatsapp"></span> WHATSAPP</h5>
                    </li>
                    <li><a href="tel:+385 (0)98441140"> +385 (0)98 441 140</a></li>
                    <hr>
                    <li>
                        <h5><span class="fa fa-envelope-o"></span> EMAIL</h5>
                    </li>
                    <li>
                        <script type="text/javascript">
                            emailE = ('boatexcursiontonka@' + 'gmail.com');
                            document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>');
                        </script>
                        <noscript>
                            <em>Email address protected by JavaScript.<br>Please enable JavaScript to contact me.</em>
                        </noscript>
                    </li>
                    <hr>
                    <li>
                        <h5>FOLLOW US</h5>
                    </li>
                    <li class="social-media-bottom">
                        <a class="facebook" href="https://www.facebook.com/boatexcursionsTonka/" target="_blank"></a>
                        <a class="instagram" href="https://www.instagram.com/boatexcursionstonka/?hl=en" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="footer-bottom">
        <div class="footer-bottom-left"><a href="index.php" target="_self">
            <img src="img/logo-small-3.png" class="img-responsive" alt="Boat Excursions Tonka logo"></a>
        </div>
        <div class="footer-bottom-center">
            <p class="text-center"><?php echo "$the_sitetitle"; ?> &copy; <span class="hidden-sm"><?php echo date("Y"); ?></span></p>
        </div>
        <div class="footer-bottom-right">
            <a href="https://www.webartlab.hr/" target="_blank">
                <p class="text-center hidden-xs izradio">POWERED BY:<br><span class="cw-logo"></span></p>
            </a>
        </div>
    </div>
</footer>


