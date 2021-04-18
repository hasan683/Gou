<?php include 'header.php';?>
<section class="pt-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-7 col-md76 col-sm-12">
                    <div class="otp-wrap">
                        <h4>OTP</h4>
						    <div class="login-form">
                            <div class="otp-content">
                                <p>আপনার XXXXXXXXXXX নম্বরে চার ডিজিট এর <br>কোড পাঠানো হয়েছে</p>
								                                
                            </div>
                           
                                <div class="form-group otp-input">
                                    <div class="otp-box">
                                        <input name="otp0" type="number" id="otp0"
                                               class="form-control inputBox" maxlength="1" autocomplete="off" autofocus
                                               data-next="1" required />
                                    </div>
                                    <div class="otp-box">
                                        <input name="otp1" type="number" id="otp1"
                                               class="form-control inputBox" maxlength="1" autocomplete="off"
                                               data-next="2" required />
                                    </div>
                                    <div class="otp-box">
                                        <input name="otp2" type="number" id="otp2"
                                               class="form-control inputBox" maxlength="1" autocomplete="off"
                                               data-next="3" required />
                                    </div>
                                    <div class="otp-box">
                                        <input name="otp3" type="number" id="otp3"
                                               class="form-control inputBox" maxlength="1" autocomplete="off"
                                               data-next="4" required />
                                    </div>
                                </div>
                                <div class="otp-link">
                                    <a class="btn btn-theme-2" href="javascript:resendOTP()">রিসেন্ড কোড</a>
                                    </div>
								<input type="hidden" name="_token" value="dVqyhxOHXmQFR92Lahw2opUMk9bPJPS945RKzsof">
                                <button type="submit" class="btn btn-theme  submit-btn">সাবমিট</button>
                                
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <?php include 'footer.php';?>