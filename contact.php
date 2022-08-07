<?php include('assets/header.php'); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="contact">
        <div class="row">
            <div class="col-md-6 offset-1">
                <div class="contact-text">
                    <h1>Start the <br> <b>Conversation</b></h1>
                    <p>For project inquiries please fill out the form below.</p>
                    <p>For general inquiries: <a href="#">info@apadecor.com</a></p>
                    <p>For career opportunities: <a href="#">career@apadecor.com</a></p>
                    <p>Call us anytime: <a href="#">1(810 210 2348)</a></p>
                </div>
            </div>
        </div>
        <div class="form">
            
                <div class="input-group">
                    <input type="text" aria-label="First name" class="form-control col-md-5 offset-1" placeholder="First name">
                    <input type="text" aria-label="Last name" class="form-control col-md-5" placeholder="Last name">
                    <div class="col-md-1"></div>
                </div>

                <div class="input-group">
                    <input type="text" aria-label="E-mail" class="form-control col-md-5 offset-1" placeholder="E-mail address">
                    <input type="text" class="form-control phone" placeholder="Phone" aria-label="Username" aria-describedby="addon-wrapping">
                    <div class="col-md-1"></div>
                </div>
                <div class="input-group">
                    <input type="text" aria-label="Name" class="form-control col-md-10 offset-1" placeholder="Company Name">
                    <div class="col-md-1"></div>
                </div>
                <div class="input-group details">
                    <select class="form-select col-md-5 offset-1" aria-label="Default select example">
                        <option selected>Type of Project</option>
                        <option value="1">Retail + Showrooms</option>
                        <option value="2">Office + Workplace</option>
                        <option value="3">Fitness + Gym</option>
                        <option value="4">Restaurants + Bar</option>
                        <option value="5">Health + Wellness</option>
                        <option value="6">Commercial + Light Industrial</option>
                        <option value="7">Other</option>
                    </select>
                    <input type="text" aria-label="Last name" class="form-control col-md-5" placeholder="Project Location">
                    <div class="col-md-1"></div>
                </div>
                <div class="input-group">
                    <textarea class="form-control col-md-10 offset-1" id="exampleFormControlTextarea1" placeholder="Tell us about your project" rows="7"></textarea>
                    <div class="col-md-1"></div>
                </div>
                
                    <div>
                        <div class="form-group file-area col-md-10 offset-1">
                            <label for="formFileLg" class="form-label">Have any file to attach?</label>
                        <input type="file" name="images" id="images" required="required" multiple="multiple"/>
                        <div class="file-dummy">
                          <div class="success">Great, your files are selected. Keep on.</div>
                          <div class="default">Drop files here or select files</div>
                        </div>
                        <label for="formFileLg" class="form-label">Max file size: 50 MB</label>
                      </div>
                      
                    </div>
                

                <form action="https://api.form-data.com/f/bqtxth46icif4r4ot1p5qn" class="offset-1 pt-5" method="post">
                    <label for="formFileLg" class="form-label">CAPTCHA</label>
                <div class="g-recaptcha"
       data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    </form>
                
                <h3 class="offset-1 pt-5"><a href="#">Submit</a></h3>

        </div>
</div>
<?php include('assets/footer.php'); ?>