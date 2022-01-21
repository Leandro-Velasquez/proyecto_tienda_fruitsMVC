    <div class="header-div">
        <p class="header-div__p">FRESH & ORGANIC</p>
        <h1 class="header-div__h1">Delicious Seasonal Fruits</h1>
        <div class="header-div__div-container-link">
            <a class="header-div__a" href="#">Fruit Collection</a>
            <a class="header-div__a header-div__a--modified" href="#">Contact Us</a>
        </div>
    </div>
</header>
<!---------->

<section class="section-service">
    <div class="container-service">
        <div class="container-service__div">
            <i class="fas fa-shipping-fast"></i>
            <div>
                <h3 class="container-service__h3">Free Shipping</h3>
                <p class="container-service__p">When order over $75</p>
            </div>
        </div>
        <div class="container-service__div">
            <i class="fas fa-phone-volume"></i>
            <div>
                <h3 class="container-service__h3">24/7 Support</h3>
                <p class="container-service__p">Get support all day</p>
            </div>
        </div>
        <div class="container-service__div">
            <i class="fas fa-sync"></i>
            <div>
                <h3 class="container-service__h3">Refund</h3>
                <p class="container-service__p">Get refund within 3 days!</p>
            </div>
        </div>
    </div>
</section>
<section class="section-our-products">
    <div class="section-our-products__div">
        <h2 class="section-our-products__h2"><span class="section-our-products__span">Our</span> Products</h2>
        <p class="section-our-products__p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, impedit natus nihil. Architecto, tenetur sit!</p>
    </div>
    <div class="section-our-products__div-products">
        <?php
        for($i = 0; $i < 3; $i++)
        {
            ?>
            <div class="section-our-products__producto">
                <img class="producto-img" src="<?php echo $datosVariosArrays[$i]['imagen'];?>" alt="">
                <div>
                    <h3><?php echo $datosVariosArrays[$i]['nombre'];?></h3>
                    <p class="producto-p">Per Kg</p>
                    <span class="producto-precio"><?php echo '$'.$datosVariosArrays[$i]['precio'];?></span>
                </div>
                <a class="producto-button" href=""><i class="fas fa-shopping-cart"></i>Add to Cart</a>
            </div>
            <?php
        }
        ?>
        <!--Para esta parte vamos a usar php-->
    </div>
</section>
<section class="section-deal-month">
    <div class="section-deal-month__container">
        <div class="section-deal-month__div1">
            <img class="section-deal-month__img" src="Img/deal-month.jpg" alt="">
            <div class="offer-poster">
                <span class="offer-poster__span">30%</span>
                <p class="offer-poster__p">off per kg</p>
            </div>
        </div>
        <div class="section-deal-month__div2">
            <h2 class="section-deal-month__h2"><span class="section-deal-month__span-h2">Deal</span> of the month</h2>
            <span class="section-deal-month__subtitle">hikan strwaberry</span>
            <p class="section-deal-month__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse, tempora ut nihil labore recusandae veritatis natus, fuga quis quod consequuntur dolore commodi vitae dolorum id, dicta molestiae eveniet cupiditate!</p>
            <div class="div-accountant-deal">
                <div class="div-accountant-deal__box">
                    <span class="div-accountant-deal__span">8425</span>
                    <p class="div-accountant-deal__p">Days</p>
                </div>
                <div class="div-accountant-deal__box">
                    <span class="div-accountant-deal__span">06</span>
                    <p class="div-accountant-deal__p">Hours</p>
                </div>
                <div class="div-accountant-deal__box">
                    <span class="div-accountant-deal__span">42</span>
                    <p class="div-accountant-deal__p">Mins</p>
                </div>
                <div class="div-accountant-deal__box">
                    <span class="div-accountant-deal__span">20</span>
                    <p class="div-accountant-deal__p">Secs</p>
                </div>
            </div>
            <a class="section-deal-month__button" href=""><i class="fas fa-shopping-cart"></i>Add to Cart</a>
        </div>
    </div>
</section>
<section class="section-testimonials">
    <div>
        <div>
            <h3>Testimonios</h3>
        </div>
    </div>
</section>
<section class="section-we-are">
    <div class="section-we-are__div">
        <span class="section-we-are__span">Since Year 1999</span>
        <h2 class="section-we-are__h2">We are <span class="section-we-are__h2-span">FruitsMVC</span></h2>
        <p class="section-we-are__p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse saepe commodi inventore omnis, porro, architecto accusantium dolorum, quos possimus ducimus magnam. Temporibus rerum aliquam blanditiis soluta id error, quibusdam minus.</p>
        <p class="section-we-are__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tempora impedit amet!</p>
        <a class="section-we-are__button" href="">know more</a>
    </div>
</section>
<section class="section-discount">
    <div class="section-discount__div">
        <h2 class="section-discount__h2">December sale is<br>on!<br>with big <span class="section-discount__h2-span">Discount...</span></h2>
        <p class="section-discount__p"><span class="section-discount__p-span1">Sale!<br>Upto</span><span class="section-discount__p-span2">50%</span><span class="section-discount__p-span3">off</span></p>
        <a class="section-discount__button" href="">Shop Now</a>
    </div>
</section>
<section class="section-our-news">
    <div class="section-our-news__container">
        <div>
            <h3 class="section-our-news__h3"><span class="section-our-news__span">Our</span> News</h3>
            <p class="section-our-news__p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet a, quos aperiam incidunt ut delectus minus sit accusantium!</p>
        </div>
        <div>
            <!--En esta parte van a ir las noticias-->
        </div>
        <div>
            <a class="section-our-news__button" href="">More News</a>
        </div>
    </div>
</section>