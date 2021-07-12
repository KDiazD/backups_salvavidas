          <!-- Info Content - Section Title-->
          <div class="content_info">
              <!-- Info Section title-->
              <div class="section-title-01 section-title-01-small">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-7">
                              <h3>!Berlitz Cyber Tachers Classic .</h3>
                              <h5>COOPBANK LAST EVENTS</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Info Section Title-->
              <!-- Info Content - News Items-->
              <div class="content_info">
                  <div class="paddings">
                      <!-- events Container-->
                      <div class="container">
                          <div class="row">
                              <?php foreach ($ElPrductos as $ElPrducto) { ?>
                                  <div class="col-md-12 blog-post-section">
                                      <!--Item Blog Post-->
                                      <div class="item-blog-post">
                                          <!--Head Blog Post-->
                                          <center>
                                              <div style="color: #273746 ">
                                                  <h1><?php echo $ElPrducto->NombrePro ?></h1>
                                              </div>
                                          </center>
                                          <!--End Head Blog Post-->

                                          <!--Img Blog Post-->
                                          <div class=" img-item-blog-post">
                                              <img src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $ElPrducto->FotoPro ?>" alt="">
                                          </div>
                                          <!--End Img Blog Post-->

                                          <!--Ingo Blog Post-->
                                          <div class="info-item-blog-post">
                                              <center>
                                                  <h2><b>Descripcion:</b></h2>
                                                  <p><?php echo $ElPrducto->DescripcionPro ?></p>
                                              </center>
                                              <center>
                                                  <h2><b>Precio: $<?php echo $ElPrducto->PreAsociadoPro ?><?php echo $ElPrducto->PrecioPro ?></b></h2>
                                              </center>
                                              <center>
                                                  <h2><b> <s>Precio para Asociado : <?php echo $ElPrducto->PreAsociadoPro ?></s> </b></h2>
                                              </center>
                                              <?php $auth = $this->session->userdata('authenticated') ?>
                                              <?php if ($auth == TRUE) { ?>
                                                      <form action="<?php echo base_url(); ?>Tienda/Agregar" method="post">
                                                            <center><input class="form-group col-md-1" type="number" value="1" name="Cantidad" id=""></center>
                                                            <br>
                                                            <br>
                                                            <input type="hidden" value="<?php echo $ElPrducto->Id_Producto ?>" name="Id_producto">
                                                            <input type="hidden" value="<?php echo $ElPrducto->PrecioPro ?>" name="precio">
                                                            <?php $Numero = $this->session->userdata('Numero');
                                                                $Letra = $this->session->userdata('Letra');
                                                                $Id_user = $this->session->userdata('Id_user');
                                                            ?>
                                                            <input type="hidden" value="<?php echo $Id_user?>" name="Id_user">
                                                            <input type="hidden" value="<?php echo $Numero?><?php echo $Letra?>" name="Codigo">
                                                            <input type="submit" class="btn btn-info btn-lg btn-block" type="submit" value="Agregar al Carrito">
                                                      </form>
                                              <?php } else {
                                                ?>
                                                  <li class="dropdown">
                                                      <a class="btn btn-info btn-lg btn-block" href="<?php echo base_url(); ?>Login">
                                                          Agregar al Carrito
                                                      </a>
                                                  </li>
                                              <? } ?>
                                          </div>
                                          <!--End Ingo Blog Post-->
                                      </div>
                                      <!--End Item Blog Post-->
                                  </div>
                          </div>
                      <?php } ?>
                      </div>
                      <!-- End events Container-->
                  </div>
              </div>
              <!-- End Info Content - News Items-->
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
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/2.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/3.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/4.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/5.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/6.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/7.png" alt="Image"></a>
                          </li>
                          <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                              <a href="#" class="tooltip_hover" title="Name Sponsor"><img src="<?php echo base_url();?>Assets/img/sponsors/8.png" alt="Image"></a>
                          </li>
                      </ul>
                      <!-- End Sponsors Zone-->
                  </div>
              </div>
          </div>
          <!-- End Sponsors Container-->

          <!-- footer-->
          <footer id="footer">
              <!-- Services-lines Items Container -->
              <div class="container">
                  <div class="row">
                      <!-- Services-lines Items -->
                      <div class="col-md-12 services-lines-container">
                          <ul class="services-lines">
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-credit-card"></i>
                                      <h5>Your Payments</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-industry"></i>
                                      <h5>District Tax Payment</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-university"></i>
                                      <h5>Paying Taxes - CoopBank</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                          </ul>

                          <ul class="services-lines no-margin">
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-balance-scale"></i>
                                      <h5>Payment of contributions</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-cc"></i>
                                      <h5>Settlement and severance pay.</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="item-service-line">
                                      <i class="fa fa-line-chart"></i>
                                      <h5>Workers pay contributions</h5>
                                      <a href="#">Go To</a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- End Services-lines Items -->
                  </div>
              </div>
              <!-- Services-lines Items Container -->

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