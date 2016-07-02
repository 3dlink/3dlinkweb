<section class="combanner" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $this->webroot;?>img/3dlink-banner.png">
        <div class="home-text-back">
            <img class="logo-home-img" src="<?php echo $this->webroot;?>img/Logo-Home.png">
        </div>
</section>

<section id="aboutus" class="about-us">
    <div class="about-text-back">
        <img class="back-about-img" src="<?php echo $this->webroot;?>img/About-Us.png">
    </div>
    <div class="about-descrip">
        <p>
          The 3D Link team is made up of young professionals, each and every one complementing an effective team for the development of technologies. We are keeping our minds open for challenges in order to generate new ideas in this digital era with its growing potentiality. All members have formed their skills at prestigious universities with recognitions throughout their studies and research projects.
        </p>
    </div>

    <div class="resp-label" style="text-align: center;margin-top: 40px;">
      <button id="mtt">MEET THE TEAM</button>
    </div>

    <div id="meet_the_team" class="animated">
      <div id="nav_team" class="slider-nav">
        <?php foreach ($teams as $key => $value) { ?>
              <div class="team-img" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Team']['photo']?>');">
                  <div class="mask"></div>
              </div>
        <?php } ?>
      </div>
      <div class="slider-for">
        <?php foreach ($teams as $key => $value) { ?>
          <div id="bio_<?php echo ($key+1); ?>" class="bio">
              <div class="biography">
                  <p><strong><?php echo $value['Team']['name']?></strong><br><i><?php echo $value['Team']['job']?></i></p>
                  <img style="display: initial;" src="<?php echo $this->webroot;?>img/bluebar.png">
                  <p><?php echo $value['Team']['bio']?></p>
              </div>
          </div>
        <?php } ?>
      </div> 
    </div>

</section>

<section id="o-work" class="separator1">
    <div class="img-separator"></div>
</section>

<section class="our-work">
    <div class="ourwork-text-back">
        <img src="<?php echo $this->webroot;?>img/Our-Work.png">
    </div>
    <div class="work-selector">
        <div class="development-sel">DEVELOPMENT</div>
        <div class="design-sel">DESIGN</div>
        <div class="vert-separator"></div>
        <div class="clear"></div>    
    </div>

    <div id="design_cont" class="carousel-container3 animated">
      <div class="product-carousel">

        <div class="design_slider">
        <?php foreach ($works as $key => $value) { 
              if($value['Work']['type']=='Design'){ ?>
          <div class="item">
            <p class="sel-title"><strong><?php echo $value['Work']['name']?> -</strong><?php echo $value['Work']['description']?></p>
            <hr class="bluebar"></hr>
            <div class="img-square" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img1']?>');">
            </div>
            <div class="img-square" style="float:right;background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img2']?>');">
            </div>
            <div class="img-square" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img3']?>');">
            </div>
            <div class="img-square" style="float:right;background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img4']?>');">
            </div>
          </div>
        <?php } 
      } ?>
      </div> 
      </div>
    </div>

    <div id="development_cont" class="carousel-container3 animated">
      <div class="product-carousel">

        <div class="develop_slider">
        <?php foreach ($works as $key => $value) { 
              if($value['Work']['type']=='Development'){ ?>
          <div class="item">
            <p class="sel-title"><strong><a href="<?php echo $value['Work']['url']?>" target="_blank"><?php echo $value['Work']['name']?></a></p></strong>
            <hr class="bluebar"></hr>
            <div class="img-square" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img1']?>');">
            </div>
            <div class="img-square" style="float:right;background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img2']?>');">
            </div>
            <div class="img-square" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img3']?>');">
            </div>
            <div class="img-square" style="float:right;background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Work']['img4']?>');">
            </div>
          </div>
        <?php } 
      } ?>
      </div> 
      </div>
    </div>
    
</section>

<section id="w-offer" class="separator2">

</section>

<section class="offer">
    <div class="offer-text-back">
        <img src="<?php echo $this->webroot;?>img/Offer.png">
    </div>
    <div class="clear"></div>

    <div class="offer-table">
        <div class="clear"></div>
        <div class="offer-title">DEVELOPMENT</div>
        <div class="row-fluid show-grid resp-pad">
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Web & Mobile development</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="dev1 box front">
                        </div>
                        <div class="box back dev1">
                          <div class="mask_flip">
                            <p>We aim to build sites that stay true to our clients’ needs and visions, focusing on how the sites can not only benefit but also help develop our customers’ businesses. We use a range of programming languages and development frameworks.</p>
                            <hr class="flip_linea"></hr>

                          </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">E-commerce</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="dev2 box front">
                        </div>
                        <div class="box back dev2">
                          <div class="mask_flip">It is the modern business system on line, where it opens the possibility for creating a business and making payments through the App. Fortunately in 3D Link we are experienced to meet various challenges of electronic commerce.
                            <hr class="flip_linea"></hr>

                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Hosting</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="dev3 box front">
                        </div>
                        <div class="box back dev3">
                          <div class="mask_flip">We offer the hosting service and server management with specific characteristics depending on the project requirements. As a support and additional service from 3D link depending on customers’ requirements and needs.
                            <hr class="flip_linea"></hr>

                          </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="offer-title">DESIGN</div>
        <div class="row-fluid show-grid resp-pad">
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Branding</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="des1 box front">
                        </div>
                        <div class="box back des1">
                          <div class="mask_flip">If you’re starting a brand, or have one, but you just want to give it a fresh and clean makeover, 3D Link has the best design team to bring your ideas to life.
                            <hr class="flip_linea"></hr>

                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Web design</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="des2 box front">
                        </div>
                        <div class="box back des2">
                          <div class="mask_flip">Nowadays, the web design is almost as important as the brand itself, we offer you a memorable and unique design to give your clients the most comfortable experience.
                            <hr class="flip_linea"></hr>

                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Packaging</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="des3 box front">
                        </div>
                        <div class="box back des3">
                          <div class="mask_flip">A great product like yours, needs a great packaging design, like ours. We will make your brand stand out of the rest with a powerful and vibrant design.
                            <hr class="flip_linea"></hr>

                          </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="offer-title">EXTRAS</div>
        <div class="row-fluid show-grid resp-pad">
            <div class="col-md-4 left tab-fix">
                <p class="services-square">SEO</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="ext1 box front">
                        </div>
                        <div class="ext1 box back">
                          <div class="mask_flip">3D Link knows how to optimise the search engine rankings to improve the visibility of a website in organic results (results not paid for). This will attract more visits to your site and makes it more useful for your business.
                            <hr class="flip_linea"></hr>
                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Social media</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="ext2 box front">
                        </div>
                        <div class="ext2 box back">
                          <div class="mask_flip">We integrate apps and social networks accounts. As a result, your connections can increase as you improve your popularity. Into the 3D Link we have an expert team who generates and post the content necessary with a guaranteed success.
                            <hr class="flip_linea"></hr>
                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 left tab-fix">
                <p class="services-square">Marketing</p>
                <div class="flip">
                    <div class="flip_items">
                        <div id="" class="ext3 box front">
                        </div>
                        <div class="ext3 box back">
                          <div class="mask_flip">We will set you up an account with your choice of email marketing providers and create and send out your marketing emails for you. Also, get better your experience and position your brand as expert in its field.
                            <hr class="flip_linea"></hr>
                          </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    

    <div class="carousel-container2">

        <div class="insp-quotes-carousel">
            <div id="quotes-carousel" class="owl-carousel">
                <?php 
                    foreach ($quotes as $quote) {
                ?>
                <div class="item">
                    <div class="quote-complete">
                        <p class="insp-quote"><?php echo $quote['Quote']['text']; ?></p>
                        <hr class="quote-separator"></hr>
                        <p class="insp-author"><strong><?php echo $quote['Quote']['author']; ?></strong></p>
                    </div>    
                </div>
                
                <?php  
                    }
                ?>

            </div>
        </div>

    </div>

</section>

<section class="contact-us">
    <div id="contactus" class="contact-text-back">
        <img src="<?php echo $this->webroot;?>img/Contact.png">
    </div>
    <div class="contact-punch">
        <img src="<?php echo $this->webroot;?>img/punch-line.png">
    </div>
    <div class="formulario">
        <div class="left rep-form">
          <div class="form-group">
            <input id="name" type="text" class="form-control" placeholder="Name*">
          </div>
          <div class="form-group">
            <input id="email" type="email" name="email" class="form-control" placeholder="Email*">
          </div>
          <div class="form-group">
            <input id="phone" type="phone" class="form-control" placeholder="Phone Number">
          </div>
          <button id="submit1" class="btn btn-default right">SUBMIT</button>
        </div>
        <div class="left rep-form">
            <textarea id="question" class="form-control text-comment" placeholder="Write your questions here.*" rows="10"></textarea>
            <button id="submit2" class="btn btn-default right" style="margin: 20px 0 50px; float: left; width: 100%;
            ">SUBMIT</button>
        </div>
        <form role="form" class="contact-meth left">
            <img  class="imageicons" src="<?php echo $this->webroot;?>img/mail-ico.png"><p class="contact-icons" style="margin-top: 9px;">info@3dlinkweb.com</p>
            <div class="clear"></div>
            <img  class="imageicons" src="<?php echo $this->webroot;?>img/phone-ico.png"><p class="contact-icons" style=" margin-top: 26px;">+58 (0) 212 232-5991</p>
            <div class="clear"></div>
            <img  class="imageicons" src="<?php echo $this->webroot;?>img/map-ico.png" style="margin-top: 18px;"><p class="contact-icons resp-text-la" style="text-align:justify;margin-top: 17px;">Avenida Francisco de Miranda, C.C. Lido, Torre D, piso 4, Oficina 41-D. Caracas-Venezuela. 1060. </p>
        </form>
    </div>
</section>

<section class="footer">
    <div class="social-net" style="float:left;">
        <div class="right resp-opt">
            <img onclick="window.open('https://www.facebook.com/3dlinkVzla');" src="<?php echo $this->webroot;?>img/facebook-ico.png">
            <img onclick="window.open('https://www.instagram.com/3dlinkvzla/');" src="<?php echo $this->webroot;?>img/instagram-ico.png" style="padding-left: 10px;">
        </div>
    </div>
    <div class="copyright" style="float:left;">
        <p class="right">All rights reserved, 3D Link. 2016</p>
    </div>

</section>

<script type="text/javascript">

    $('.design_slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow:"<img class='arrow-black-left' src='<?php echo $this->webroot; ?>img/flechaizq.png'>",
      nextArrow:"<img class='arrow-black-right' src='<?php echo $this->webroot; ?>img/flechader.png'>"
    });

    $('.develop_slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow:"<img class='arrow-black-left' src='<?php echo $this->webroot; ?>img/flechaizq.png'>",
      nextArrow:"<img class='arrow-black-right' src='<?php echo $this->webroot; ?>img/flechader.png'>"
    });


    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 5,
      arrows: false,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
    });

  $('#quotes-carousel').owlCarousel({
   center: true,
  items:1,
  nav:false,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:true,
  merge:true,
  responsive:{
    600:{
      items:1
    }
  }
  });
  

// $('#design').owlCarousel({
//    loop:false,
//    center: true,
//    items:1,
//    URLhashListener:true,
//    navText: [
//     "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/flechaizq.png'>",
//     "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/flechader.png'>"
//    ],
//    nav:true
//  });
  
$('#development').owlCarousel({
   loop:false,
   center: true,
   items:1,
   URLhashListener:true,
   navText: [
    "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/flechaizq.png'>",
    "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/flechader.png'>"
   ],
   nav:true
 });

$(document).ready(function(){
  $('.combanner').css('height',$(window).height());

  $('#mtt').click(function(event) {
    if($('#meet_the_team').hasClass('meet_active')){
      $('#meet_the_team').removeClass('slideInDown');
      $('#meet_the_team').addClass('bounceOutUp');
      setTimeout(function(){ $('#meet_the_team').removeClass('meet_active'); }, 800);
    }else{
      $('body').scrollTo('#mtt',1000);
      $('#meet_the_team').addClass('meet_active');
      $('#meet_the_team').addClass('slideInDown');
      $('#meet_the_team').removeClass('bounceOutUp');
    }
  });

$('.development-sel').click(function(){
  $('body').scrollTo('.work-selector',1000);
  $('.development-sel').addClass('letter_active');
  $('.design-sel').removeClass('letter_active');
  $('#development_cont').addClass('meet_active');
  $('#development_cont').addClass('slideInDown'); 
  $('#design_cont').removeClass('meet_active'); 
});
$('.design-sel').click(function(){
  $('body').scrollTo('.work-selector',1000);
  $('.design-sel').addClass('letter_active');
  $('.development-sel').removeClass('letter_active');
  $('#design_cont').addClass('meet_active');
  $('#design_cont').addClass('slideInDown');
  $('#development_cont').removeClass('meet_active');   
});

});

$('#submit1').click(function(){

    if($('#email').val() == "" || $('#question').val() == "" || $('#name').val() == "" ){
      alert('Please write your name, email and your question.');
    }
    else{
        $('#submit1').html("Wait...");
        $('#submit1').prop('disabled', true);
        var data = {
        name : $('#name').val(),
        email : $('#email').val(),
        phone : $('#phone').val(),
        question : $('#question').val(),
      };

      $.post(WEBROOT+'start/sendMail',{data:data},function(data){
        if(data == 1){
            alert('Thanks for your contact, we will contact you soon.');
            $('#submit1').html("SUBMIT");
            $('#name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#question').val('');
            $('#submit1').prop('disabled', false);
        }
      },'json');
    }


});

$('#submit2').click(function(){

    if($('#email').val() == "" || $('#question').val() == "" || $('#name').val() == "" ){
      alert('Please write your name, email and your question.');
    }
    else{
        $('#submit2').html("Wait...");
        $('#submit2').prop('disabled', true);
        var data = {
        name : $('#name').val(),
        email : $('#email').val(),
        phone : $('#phone').val(),
        question : $('#question').val(),
      };

      $.post(WEBROOT+'start/sendMail',{data:data},function(data){
        if(data == 1){
            alert('Thanks for your contact, we will contact you soon.');
            $('#submit2').html("SUBMIT");
            $('#name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#question').val('');
            $('#submit2').prop('disabled', false);
        }
      },'json');
    }


});


</script>