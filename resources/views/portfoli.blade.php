@extends('components.layouts.app')
@section('content')
 <aside class="menu" id="menu">
    <div class="logo">
      <!-- Logo image-->
      <img src="images/LOGO1.jpeg" width="140" height="140" alt=""/>
      <!-- Logo name-->
      <span>Andrew Smith</span></div>
    <!-- Mobile Navigation-->
    <a href="index.html%3Fpage=portfolio.html#menu1" class="menu-link"></a>
    <!-- Left Navigation-->
    <nav id="menu1" role="navigation"> <a href="{{route('home')}}"><span id="link_introduction" class="active">Home</span></a>
        <a href="{{route('about')}}"><span id="link_about">About</span></a>
        <a href="{{route('skills')}}"><span id="link_skills">Skills</span></a>
        <a href="{{route('experience')}}"><span id="link_experience">Experience</span></a>
        <a href="{{route('education')}}"><span id="link_education">Education</span></a>
        <a href="i{{route('portfoli')}}"><span id="link_portfolio">Portfolio</span></a>
        <a href="{{route('contact')}}"><span id="link_contact">Contact</span></a>
        <a href="{{route('blog')}}"><span id="link_blog">Blog</span></a></nav>
    <div class="social"> <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> <a href="https://plus.google.com" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a> </div>
    <div class="copyright"> © Chelsea Nicole Mukhanyi
.<br>
      All Rights Reserved. </div>
  </aside>
  <!-- Go to top link for mobile device -->
  <a href="index.html%3Fpage=portfolio.html#menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper">

      <!-- Pportfolio -->
      <article class="content portfolio white-bg" id="chapterportfolio">
        <div class="inner">
          <h2>Portfolio</h2>
          <div class="title-divider"></div>
          <h3>Our portfolio features a variety of projects and services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="portfolio-con">
            <div class="container-sub margin-top50">
              <div class="row">
                <div id="grid-gallery" class="grid-gallery">
                  <section class="grid-wrap">
                    <ul class="grid">
                      <li>
                        <figure> <img src="images/work1.jpg" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
                              <h3>The Flavour Restaurant</h3>
                              <span>Website Design & Development</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="images/work2.jpg" alt="" />
                          <figcaption>
                            <div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
                              <h3>Herbal Beauty Salon</h3>
                              <span>Photography</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="images/work3.jpg" alt="" />
                          <figcaption>
                            <div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
                              <h3>Kayra Modelleri</h3>
                              <span>Branding and Identity</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="images/work4.jpg" alt="" />
                          <figcaption>
                            <div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
                              <h3>Fashion and You</h3>
                              <span>APPS and Web Design</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="images/work5.jpg" alt="" />
                          <figcaption>
                            <div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
                              <h3>Whole Food Flour</h3>
                              <span>Branding and Identity</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                    </ul>
                  </section>

                  <!-- Lightbox Popup -->
                  <section class="slideshow">
                    <ul>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>The Flavour Restaurant</h3>
                            <span>Website Design & Development</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, 						ullamco craft beer.</p>
                          </figcaption>
                          <div id="owl-demo1" class="owl-carousel">
                            <div class="item"><img src="images/work-details1.jpg" alt="" /></div>
                            <div class="item"><img src="images/work-details2.jpg" alt="" /></div>
                            <div class="item"><img src="images/work-details3.jpg" alt="" /></div>
                            <div class="item"><img src="images/work-details4.jpg" alt="" /></div>
                            <div class="item"><img src="images/work-details5.jpg" alt="" /></div>
                          </div>
                        </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Herbal Beauty Salon</h3>
                            <span>Photography</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <img src="images/work2.jpg" alt="" /></figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Kayra Modelleri</h3>
                            <span>Branding and Identity</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <div id="owl-demo2" class="owl-carousel">
                            <div class="item"><img src="images/work3.jpg" alt="" /></div>
                            <div class="item"><img src="images/work1.jpg" alt="" /></div>
                            <div class="item"><img src="images/work2.jpg" alt="" /></div>
                            <div class="item"><img src="images/work4.jpg" alt="" /></div>
                            <div class="item"><img src="images/work5.jpg" alt="" /></div>
                          </div>
                        </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Fashion and You</h3>
                            <span>APPS and Web Design</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <iframe width="854" height="480" src="https://www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen></iframe> </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Whole Food Flour</h3>
                            <span>Branding and Identity</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <img src="images/work5.jpg" alt="" /> </figure>
                      </li>
                    </ul>
                    <nav> <span class="fa nav-prev"></span> <span class="fa nav-next"></span> <span class="fa nav-close"></span> </nav>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Contact -->
      <article class="content contact gray-bg" id="chaptercontact">
        <div class="inner">
          <h2>Contact</h2>
          <div class="title-divider"></div>
          <h3>Let's Keep In Touch</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="full-divider"></div>
          <div class="contact-con margin-top50">
            <div class="container-sub">
              <div class="row">
                <div class="contact-details">
                  <div class="col-6">
                    <div class="contact-text">
                      <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i></div>
                      <div class="flot-left"> <strong>Andrew Smith</strong><br>
                        PO Box 16122 Collins Street West,<br>
                        Victoria 8007, United States. </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                      <div class="flot-left"> <strong>Phone</strong><br>
                        +123-456-7890 </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                      <div class="flot-left"> <strong>Email</strong><br>
                        <a href="mailto:no-reply@domain.com">no-reply@domain.com</a> </div>
                    </div>
                  </div>
                  <div class="col-6 m-margin-top30">
                    <h3>I'm also on Social Networks</h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
                  <h3>Drop Me a Line</h3>
                  <form id="form1" name="form1" method="post" >
                    <input name="name" type="text" id="name" placeholder="Your Name..." />
                    <input name="email" type="text" id="email" placeholder="Your Email..." />
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."></textarea>
                    <input type="submit" name="button" id="button" value="say hello!" >
                    <div id="successmsg" ></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Introduction -->
      <article class="content introduction-end" id="chapterthankyou">
        <div class="inner">
          <div class="introduction-end-con margin-top50">
            <h3><strong>Andrew Smith</strong></h3>
            <div id="rotate" class="rotate">
              <div><span>awesome.</span></div>
              <div><span>invincible.</span></div>
              <div><span>unbeatable.</span></div>
              <div><span>indestructible.</span></div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <!-- content-wrapper -->
  </div>
  <!-- content-scroller -->
</div>
@endsection
