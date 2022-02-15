    <div class="header-shop-products-div">
        <p class="header-shop-products-div__p">GET 24/7 SUPPORT</p>
        <h1 class="header-shop-products-div__h1">Contact Us</h1>
    </div>
</header>
<article class="article-contact">
    <div class="article-contact__div-container">
        <div class="contact-div-contaier-h2-form">
            <div class="contact-div-container-h2-p">
                <h2 class="contact-div-container-h2-p__h2">Have you any question?</h2>
                <p class="contact-div-container-h2-p__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ad quasi porro magnam excepturi, consectetur neque facilis temporibus.</p>
            </div>
            <?php
            include "Class/FormContact.php";
            (new FormContact("", "POST", array("form-contact", "form-contact__div-input-text",  "form-contact__input-text", "form-contact__text-area", "form-contact__button")))->formContactView();
            ?>
        </div>
        <div class="contact-div-container-information">
            <div class="contact-div-information__div-i-h3-p">
                <i class="fas fa-map"></i>
                <div>
                    <h3 class="contact-div-container-information__h3">Shop Address</h3>
                    <p class="contact-div-container-information__p">Lorem, ipsum dolor.</p>
                    <p class="contact-div-container-information__p">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="contact-div-information__div-i-h3-p">
                <i class="fas fa-clock"></i>
                <div>
                    <h3 class="contact-div-container-information__h3">Shop Hours</h3>
                    <p class="contact-div-container-information__p">MON - FRIDAY: 8 to 9 PM</p>
                    <p class="contact-div-container-information__p">SAT - SUN: 10 to 8 PM</p>
                </div>
            </div>
            <div class="contact-div-information__div-i-h3-p">
                <i class="fas fa-address-book"></i>
                <div>
                    <h3 class="contact-div-container-information__h3">Contact</h3>
                    <p class="contact-div-container-information__p">Phone: +00 111 222 3333</p>
                    <p class="contact-div-container-information__p">Email: support@domain.com</p>
                </div>
            </div>
        </div>
    </div>
</article>