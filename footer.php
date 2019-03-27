<footer id="footer" class="clearfix">
    <div class="container-fluid kontakti-wrapper no-padding">
            <div class="row">

                    <div class="col-md-4">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38094.689198160864!2d13.958886755066738!3d44.79294009379744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9544cb64a3fa26f9!2sRent+a+Bike+Centar!5e0!3m2!1sen!2shr!4v1522863383452" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-4">
                            <h4 class="text-center ">Pošaljite nam upit!</h4>
                            
                            <form role="form" method="post" id="reused_form" >
                                <div class="form-group">
                                    <input placeholder="Ime" type="text" class="form-control" id="name" name="name" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email" class="form-control" id="email" name="email" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Poruka ovdje" maxlength="6000" rows="7"></textarea>
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
                                    <button type="submit" class="btn btn-lg btn-info" id="btnContactUs">POŠALJI</button>
                                </div>
                                
                            </form>
                            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3 class="bg-success">Poruka uspješno poslana</h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3 class="bg-danger">Greška</h3>Pkušajte ponovno, ili refrešajte stranicu i formu. </div>
                    </div>
                    <div class="col-md-4 contact-info">
                        <h4 class="text-center">
                            KONTAKT
                        </h4>
                        <ul class="list-unstyled"> 
                                    <li><h5>R.T.O. - Boris Ivančić </h5></li>   
                                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+385 (0)91 512 36 46"> +385 (0)91 512 36 46</a></li>
                                     <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>  
                                        <script TYPE="text/javascript">
                                        emailE=('bivancic@' + 'yahoo.com')
                                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')            
                                            </script>

                                            <noscript>
                                                     <em>Email address protected by JavaScript.<BR>
                                                         Please enable JavaScript to contact me.</em>
                                            </noscript>
                                     </li>
                                  <li>Zoranićeva 17, Pula</li>
                                  <li> OIB: 46116579192  </li>
                                  <li>MB Obrta: 90645405 </li>   
                        </ul>                              
                    </div>
            </div>
    </div>

    <div class="container-fluid" id="footer-bottom">
                   
                    
                            <div class="footer-bottom-left"><a href="index.php" target="_self"> 
                                    <img src="img/ws-logo-big-white-font.png" class="img-responsive" alt="ws-logo"></a>
                            </div>
                             <div class="footer-bottom-center">
                                    <p class="text-center"><?php echo "$the_sitetitle"; ?>  &copy;  <span class="hidden-sm"> <?php echo date("Y"); ?> </span> </p>
                             </div>
                              <div class="footer-bottom-right">   
                                 <a href="https://www.cro-webdesign.com/" target="_blank" > <p class="text-left hidden-xs izradio">Cro Web Design</p></a>
                             </div>
                </div>
            </div> <!-- end of container -->
        
    </footer>
        