<footer id="footer" class="clearfix">
    <div class="container-fluid kontakti-wrapper no-padding">
            <div class="row">

                    <div class="col-md-4">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38094.689198160864!2d13.958886755066738!3d44.79294009379744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9544cb64a3fa26f9!2sRent+a+Bike+Centar!5e0!3m2!1sen!2shr!4v1522863383452" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-4">
                            <h4 class="text-center ">Send us an Message!</h4>
                            
                            <form role="form" method="post" id="reused_form" >
                                <div class="form-group">
                                    <input placeholder="Name" type="text" class="form-control" id="name" name="name" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email" class="form-control" id="email" name="email" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="6000" rows="5"></textarea>
                                </div>
                                <div class="row" style="margin-bottom:30px;">
                                    <div class="col-sm-5">
                                        <img src="captcha.php" id="captcha_image"/>
                                        <br/>
                                        <a id="captcha_reload" href="#">reload</a> 
                                    </div>
                                    <div class="col-sm-6">
                                        <input placeholder="Unesite kod s slike ovdje" type="text" class="form-control" required id="captcha" name="captcha" >
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn  btn-default" id="btnContactUs">SEND</button>
                                </div>
                                
                            </form>
                            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3 class="bg-success">Your message has been sent! </h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3 class="bg-danger">Error</h3>Try again or refresh the page! </div>
                    </div>
                    <div class="col-md-4 contact-info">
                        <h4 class="text-center">
                            Contact
                        </h4>

                        <ul class="list-unstyled contact-list text-left"> 
                                    <li><h5> <span class="fa fa-map-marker"></span> BOARDING POINT</h5></li>  
                                    <li>Parking Vladibora - Rovinj North</li> 
                                    <hr>
                                    <li><h5><span class="fa fa-phone"></span> TEL /  <span class="fa fa-whatsapp"></span> WHATSAPP</h5> </li>
                                    <li class="text-muted"> <a href="tel:+385 (0)98441140"> +385 (0)98 441 140</a></li>
                                    <hr>
                                    <li><h5><span class="fa fa-envelope-o"></span> EMAIL</h5></li>
                                     <li>
                                        <script TYPE="text/javascript">
                                        emailE=('boatexcursionstonka@' + 'gmail.com')
                                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')            
                                            </script>

                                            <noscript>
                                                     <em>Email address protected by JavaScript.<BR>
                                                         Please enable JavaScript to contact me.</em>
                                            </noscript>
                                     </li>
                                     <hr>
                                     <li><h5>FOLLOW US</h5></li>
                                     <li class="social-media-bottom"> 
                                         <a  class="facebook" href="https://www.facebook.com/boatexcursionsTonka/" target="_blank"></a> 
                                         
                                          <a class="instagram" href="https://www.instagram.com/boatexcursionstonka/?hl=en" target="_blank"></a> 
                                        
                                        </li>

                        </ul>                              
                    </div>
            </div>
    </div>

    <div class="container-fluid" id="footer-bottom">
                   
                    
                            <div class="footer-bottom-left"><a href="index.php" target="_self"> 
                                    <img src="img/logo-no-bg.png" class="img-responsive" alt="Boat Excursions Tonka logo"></a>
                            </div>
                             <div class="footer-bottom-center">
                                    <p class="text-center"><?php echo "$the_sitetitle"; ?>  &copy;  <span class="hidden-sm"> <?php echo date("Y"); ?> </span> </p>
                             </div>
                              <div class="footer-bottom-right">   
                                 <a href="https://www.cro-webdesign.com/" target="_blank" > <p class="text-center hidden-xs izradio">POWERED BY:<br>
                                    <span class="cw-logo"></span>
                                </p></a>
                             </div>
                </div>
            </div> <!-- end of container -->
    </footer>
        