

<!-- contact -->
<div class="contact py-5" id="contact">
    <div class="container pb-xl-5 pb-lg-3">
        <div class="row">
            <div class="col-lg-6">
                <img src="/images/b2.png" alt="image" class="img-fluid" />
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <form action="#" method="post" class="contact-wthree-do">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        First name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Anderson" name="name" required="">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-4">
                                    <label>
                                        Last name
                                    </label>
                                    <input class="form-control" type="text" placeholder="John" name="name" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        Mobile
                                    </label>
                                    <input class="form-control" type="text" id="mobile" placeholder="xx xxx xx xx" name="mobile" required="">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-4">
                                    <label>
                                        Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="example@mail.com" name="email" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Your message
                                    </label>
                                    <textarea placeholder="Add your Description here" name="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="mc">
                            <p>Please draw the shape in the box to submit the form:</p>
                            <canvas id="mc-canvas"></canvas>
                        </div>
                        <input type="hidden" id="fairly-unique-id" value="submitform.php" />
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-cont-w3 btn-block mt-4">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- //contact form grid ends here -->
            </div>
        </div>
    </div>
</div>
<!-- //contact-->

<!-- map -->
<div class="w3l-map p-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848295.9861393345!2d150.37152490226384!3d-33.846975938661174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1515557909959"></iframe>
</div>

<?php
$js=<<<JS
$('#mobile').mask('00 000 00 00');
JS;
$captcha=<<<JS
$('#form-id').motioncaptcha({
     action: '#fairly-unique-id'
 });
JS;


$this->registerJs($js);
?>