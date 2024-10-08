<?php include 'header.php' ?>

<section class="banner-img">
    <div class="container">
        <div class="row justify-content-between text-white">
            <div class="col-md-6">
                <h1 class="fw-bold red-section">
                    Contact Us
                </h1>
            </div>
            <div class="col-md-6">
                <h1 class="red-section">
                    Send in your feedback & views
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 red-section">
                <h4 class="fw-semibold">
                    CONTACT DETAILS:
                </h4>
                <br>

                <h5 class="fw-bold">Address: <a href="#" class="h6 text-dark"> Dhyriam Towers, 73, M - Block, 6th Avenue,<br> Anna Nagar East, Chennai, Tamil Nadu 600102</a></h5>
                <h5 class="fw-bold">Mail ID: <a href=" info@nambikkaitv.com" class="h6 text-dark"> info@nambikkaitv.com </a></h5>
                <h5 class="fw-bold">Phone no: <a href="#" class="h6 text-dark">044 2621 7511</a></h5><br>
                <div class="contact-socialmedia">
                    <a href="https://www.youtube.com/@NambikkaiTVDigital "><img loading="lazy" src="assets/img/Layer 15-2.png" alt="shuba" style="height: 40px;">&nbsp;&nbsp;</a>
                    <a href="https://www.instagram.com/nambikkaitv/ " class="mx-2"><img loading="lazy" src="assets/img/Layer 16.png" alt="shuba" style="height: 40px;">&nbsp;&nbsp;</a>
                    <a href="https://www.facebook.com/NambikkaiTV/ " class="mx-2 "><img loading="lazy" src="assets/img/Vector Smart Object.png" alt="shuba" style="height: 40px;">&nbsp;&nbsp;</a>
                </div>

            </div>
            <div class="col-md-6 red-section">
                <div class="contact-form">
                    <form action="contact-mail.php" method="post">
                        <div class="mb-3">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Name :</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <label for="email" class="form-label mt-1">Email :</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <label for="telephone" class="form-label mt-1">Mobile :</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="row d-flex">
                                <div class="col-md-4">
                                    <label for="message" class="form-label mt-1">Message :</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your message here" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="login_form">
                                <div id="captcha" class="form_div">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Enter Captcha :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="preview"></div>
                                            <div class="captcha_form">
                                                <input type="text" id="captcha_input" name="captcha_input" class="form_input_captcha" placeholder=" " required>
                                                <button type="button" class="captcha_refersh rounded bg-black">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                            </div>
                                            <div id="captcha_error" style="color:red;"></div> <!-- Error message container -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="text-end">
                                <button type="submit" class="bg-primary text-white px-4 py-2 rounded-pill red-section">Send</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div style="width: 100%" class="contact-inframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.780986424903!2d80.19836969136459!3d13.08680908747738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5264296aaaaaab%3A0xb20dd65feac94a51!2sNAMBIKKAI%20TELEVISION!5e0!3m2!1sen!2sin!4v1721984658834!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>



<script>
    (function() {
        const fonts = ["cursive"];
        let captchaValue = "";

        function gencaptcha() {
            let value = btoa(Math.random() * 1000000000);
            value = value.substr(0, 5 + Math.random() * 5);
            captchaValue = value;

            // Store the captcha value in session using AJAX
            fetch('store_captcha.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    captchaValue: captchaValue
                }),
            });
        }

        function setcaptcha() {
            let html = captchaValue.split("").map((char) => {
                const rotate = -20 + Math.trunc(Math.random() * 30);
                const font = Math.trunc(Math.random() * fonts.length);
                return `<span
                style="
                transform:rotate(${rotate}deg);
                font-family:${font[font]};
                "
            >${char} </span>`;
            }).join("");
            document.querySelector(".login_form #captcha .preview").innerHTML = html;
        }

        function initCaptcha() {
            document.querySelector(".login_form #captcha .captcha_refersh").addEventListener("click", function() {
                gencaptcha();
                setcaptcha();
            });

            gencaptcha();
            setcaptcha();
        }
        initCaptcha();

        document.querySelector("form").addEventListener("submit", function(event) {
            let inputcaptchavalue = document.querySelector("#captcha_input").value;

            if (inputcaptchavalue !== captchaValue) {
                event.preventDefault(); // Prevent form submission
                document.getElementById("captcha_error").innerText = "Captcha is incorrect. Please try again.";
            }
        });
    })();
</script>

<?php include 'footer.php' ?>