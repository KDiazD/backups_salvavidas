  <!-- Info Content - Section Title-->
  <div class="content_info">
      <!-- Info Section title-->
      <div class="section-title-01 section-title-01-small">
          <div class="container">
              <div class="row">
                  <div class="col-md-7">
                      <h3>Tienda Salvavidas</h3>
                      <h5>Three COLUMNS</h5>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Info Section Title-->
  </div>
  <!-- End Info Content - Section Title-->
  <!-- Info Content - Gallery Items-->
  <div class="content_info">
      <div class="paddings">
          <div class="container">
              <?php foreach ($Productos as $Producto) { ?>
                  <a href="<?php echo base_url(); ?>Tienda/Producto/<?php echo $Producto->Id_Producto?>">
                      <div class="col-md-4 kamilo">
                          <!-- Item Work -->
                          <div class="item-gallery">
                              <div class="head-gallery">
                                  <h4><?php echo $Producto->NombrePro ?></h4>
                              </div>
                              <div class="hover">
                                  <img src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $Producto->FotoPro ?>" alt="Image" />
                                  <a href="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $Producto->FotoPro ?>" rel="gallery_group" class="fancybox" title="Image">
                                      <div class="overlay"></div>
                                  </a>
                              </div>
                              <div class="info-gallery">
                                  <p><?php echo $Producto->DescripcionPro ?><br>
                                      <center>
                                          <h6><b>$<?php echo $Producto->PrecioPro ?></b></h6>
                                      </center>
                                      <center>
                                          <h6><b><s>$<?php echo $Producto->PreAsociadoPro ?></s> </b></h6>
                                      </center>
                                  </p>

                              </div>
                          </div>
                          <!-- Item Work -->

                      </div>
                  </a>
              <?php } ?>
          </div>
      </div>
  </div>
  <!-- End Info Content - Gallery Items-->
  </div>
  <!-- End content-central-->
  <!-- Sponsors Container-->
  <div class="container wow fadeInUp">
      <div class="row">
          <div class="col-md-12">
              <!-- Sponsors Zone-->
              <ul class="owl-carousel carousel-sponsors tooltip-hover" id="carousel-sponsors">
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/1.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/2.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/3.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/4.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/5.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/6.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/7.png" alt="Image"></a>
                  </li>
                  <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                      <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="Assets/img/sponsors/8.png" alt="Image"></a>
                  </li>
              </ul>
              <!-- End Sponsors Zone-->
          </div>
      </div>
  </div>
  <!-- footer-->
  <footer id="footer">
      <!-- Items Footer -->
      <div class="container">
          <div class="row paddings-mini">
              <!-- contact Items Footer -->
              <div class="col-sm-6 col-md-3">
                  <div class="border-right txt-right">
                      <h4>Contact us</h4>
                      <ul class="contact-footer">
                          <li>
                              <i class="fa fa-envelope"></i> <a href="#">sales@coopbank.com</a>
                          </li>
                          <li>
                              <i class="fa fa-headphones"></i> <a href="#">55-5698-4589</a>
                          </li>
                          <li class="location">
                              <i class="fa fa-home"></i> <a href="#"> Av new stret - New York</a>
                          </li>
                      </ul>
                      <div class="logo-footer">
                          <div class="icon-logo">
                              <i class="fa fa-university"></i>
                          </div>
                          <a href="index.html">
                              Coop Bank
                              <span>Your money is safe.</span>
                          </a>
                      </div>
                  </div>
              </div>
              <!-- End contact items Footer -->

              <!-- Recent Links Items Footer -->
              <div class="col-sm-6 col-md-3">
                  <div class="border-right border-right-none">
                      <h4>Recent Links</h4>
                      <ul class="list-styles">
                          <li><i class="fa fa-check"></i> <a href="#">Corporate Web CoopBank</a></li>
                          <li><i class="fa fa-check"></i> <a href="#">CoopBank Innovation Center</a></li>
                          <li><i class="fa fa-check"></i> <a href="#">Corporate Responsibility</a></li>
                          <li><i class="fa fa-check"></i> <a href="#">Information of interest</a></li>
                      </ul>
                  </div>
              </div>
              <!-- End Recent Links Items Footer -->

              <!-- Recent Newsletter Footer -->
              <div class="col-sm-6 col-md-4">
                  <div class="border-right txt-right">
                      <h4>Newsletter</h4>
                      <p>Please enter your e-mail and subscribe to our newsletter.</p>
                      <form id="newsletterForm" class="newsletterForm" action="http://html.iwthemes.com/coopbank/php/mailchip/newsletter-subscribe.php">
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-envelope"></i>
                              </span>
                              <input class="form-control" placeholder="Email Address" name="email" type="email" required="required">
                              <span class="input-group-btn">
                                  <button class="btn btn-primary" type="submit" name="subscribe">Go!</button>
                              </span>
                          </div>
                      </form>
                      <div id="result-newsletter"></div>
                  </div>
              </div>
              <!-- End Newsletter Footer -->

              <!-- Follow Items Footer -->
              <div class="col-sm-6 col-md-2">
                  <div class="border-right-none">
                      <h4>Follow To CoopBank</h4>
                      <ul class="social">
                          <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                          <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                          <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                          <li class="linkedin"><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                      </ul>
                  </div>
              </div>
              <!-- End Follow Items Footer -->
          </div>
      </div>
      <!-- End Items Footer -->

      <!-- footer Down-->
      <div class="footer-down">
          <div class="container">
              <div class="row">
                  <div class="col-md-7">
                      <!-- Nav Footer-->
                      <ul class="nav-footer">
                          <li><a href="#">HOME</a> </li>
                          <li><a href="#">COMPANY</a></li>
                          <li><a href="#">SERVICES</a></li>
                          <li><a href="#">NEWS</a></li>
                          <li><a href="#">PORTFOLIO</a></li>
                          <li><a href="#">CONTACT</a></li>
                      </ul>
                      <!-- End Nav Footer-->
                  </div>
                  <div class="col-md-5">
                      <p>&copy; 2015 CoopBank. All Rights Reserved. 2010 - 2015</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- footer Down-->
  </footer>
  <!-- End footer-->
  </div>
  <!-- End layout-->