<?php include "header.php"; ?>
<!-- start contact area -->
    <section id="contactArea">
<!--
        <div id="map">
        	<div id="map_canvas"></div>
        </div>
    -->
    	<div class="container">             

            <div class="row text-center">
                <div class="col-md-12">
                
                    <h1>Thank You For Your Message</h1>
					<p class="lead"> We will get back to you as soon as possible!</p>
					<a href="index.html"title="Take Me Home"><i class="fa fa-home fa-5x"></i></a><br><p>(Back to Home)</p>

                </div>
            </div>		

            <div class="row">
            	
                <div class="col-sm-6">
                    <form action="contact.php"method="post">
                        <input type="text" name="name" placeholder="Full Name" class="form-control">
                        <input type="email" name="email" placeholder="Email Address" class="form-control">
                        <textarea cols="10" name="message"rows="5" placeholder="Type your message here..." class="form-control"></textarea>
                        <input type="submit" class="btn" value="submit">
                    </form>
                </div>
                
                <div class="col-sm-6">
					
                    <h4>Our Commitment</h4>
                    
                    <p>JB Photo strives to deliver a level of service that exceeds the expectations of our customers. If you have any questions about our products or services, please do not hesitate to contact us.</p>
                     


                    <p class="lead">J B Photo Inc.</p>
                    
                    <p>Winston Salem<br>North Carolina<br>USA </p>
					<p> Mon to Fri: 8:00am - 5:00pm EST</p>
                    
                    <p>(336)-978-0481<br></p>
					<a class="email_switch_dark dc_social_switch32" title="Click to Email" href="mailto:jbphoto03@mac.com?subject=Web mail">Click to Email</a>
					<a class="facebook_switch_dark dc_social_switch32" title="Facebook" href="https://www.facebook.com/pages/J-B-Photo-Inc/194778647204148">Facebook</a>
					<a class="twitter_switch_dark dc_social_switch32" title="Twitter" href="https://twitter.com/JBPhotoInc">Twitter</a>
					<a class="linkedin_switch_dark dc_social_switch32" title="Linkedin" href="https://www.linkedin.com/pub/john-baucom/4/81a/ba9">Linkedin</a>
					<a class="pinterest_switch_dark dc_social_switch32" title="Pinterest" href="http://www.pinterest.com/jbphotoinc/j-b-photo-inc/">Pinterest</a>
                    
                </div>
            
            </div>		
            
        </div>
                
    </section>
    <!-- end contact area -->
<?php include "footer.php"; ?>