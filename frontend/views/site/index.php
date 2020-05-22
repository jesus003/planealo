<?php

/* @var $this yii\web\View */ 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
$form = ActiveForm::begin();
$this->title = 'Inicio';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
</head>

<body>
   <div class="body-inner">

      <section class="hero-area hero-speakers">
         <div class="banner-item overlay" style="background-image:url(images/header.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="banner-content-wrap">

                       
                        <h4 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">Encuentra lo que necesitas para tu evento.</h4>


                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                           <a href="#" class="btn">Busca Ahora</a>
                           
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2><font color="black">Registrate</font></h2>
                        <p>
                           Encuentra las mejores ofertas para planear tu evento
                        </p>
                        <form action="#" method="POST" class="hero-form">
                           
                           <?= Html::textInput("nombre", null,["class"=>"form-control","placeholder"=>'Nombre y Apellido']) ?>
                           <?= Html::textInput("email", null,["class"=>"form-control","placeholder"=>'Correo Electronico']) ?>
                           <?= Html::textInput("telefono", null,["class"=>"form-control","placeholder"=>'Telefono']) ?>
                           <?= Html::textInput("password", null,["class"=>"form-control","placeholder"=>'Contraseña','type'=>'password']) ?>

                          
                           <button class="btn" type="submit"> Registrate Ahora</button>

                        </form><!-- form end-->
                     </div><!-- hero content end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div>
      </section>
      <!-- banner end-->
      <!-- ts intro start -->
      <section class="ts-event-outcome event-intro">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="">
                     <div class="outcome-content ts-exp-content">
                        <h2 class="column-title">
                           <span></span>
                           Planealo.mx
                        </h2>
                        <p>
                          Con planealo.mx podras planear todos tus eventos, encontrar proveedores o anunciarte con nosotros!!
                        </p>
                        <a href="#" class="btn">Comencemos</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img" >
                        <img class="" src="images/about/learn_img.jpg" alt="">
                     </div>
                     
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img ">
                        <img class="" src="images/about/connect_img.jpg" alt="">
                     </div>
                    
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- ts intro end-->
      <!-- ts funfact start-->
      <section class="ts-funfact" style="background-image: url(images/funfact_bg_c.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="43">43</span>+</h3>
                     <h4 class="funfact-title">Eventos<br>con exito</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="62">62</span></h3>
                     <h4 class="funfact-title">Clientes <br> satisfechos</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="28">28</span>+</h3>
                     <h4 class="funfact-title">Servicios</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="950">950</span>+</h3>
                     <h4 class="funfact-title">Proveedores</h4>
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts funfact end-->
      <!-- ts speaker start-->
      <section id="ts-speakers" class="ts-speakers" style="background-image:url(images/speakers/speaker_bg.png)">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Lista de</span>
                    Proveedores destacados
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker1.jpg" alt="">
                        <a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Fredric Martinsson</a></h3>
                        <p>
                           Founder, Edilta
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker1.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                   10.30 - 11.30 am
                                             </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                      10.30 - 11.30 am
                                                </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker2.jpg" alt="">
                        <a href="#popup_2"  class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Melisa Lundryn</a></h3>
                        <p>
                           Lead Designer, Payol
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker2.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker3.jpg" alt="">
                        <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Agaton Johnsson</a></h3>
                        <p>
                           Developer Expert
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker3.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker4.jpg" alt="">
                        <a href="#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Rebecca Henrikon</a></h3>
                        <p>
                           Founder, Cards
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker4.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker5.jpg" alt="">
                        <a href="#popup_5" class="view-speaker  ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Fredric Martinsson</a></h3>
                        <p>
                           Founder, Edilta
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker5.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker6.jpg" alt="">
                        <a href="#popup_6" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Lundryn Melisa </a></h3>
                        <p>
                           Lead Designer, Payol
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_6" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker1.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1000ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker7.jpg" alt="">
                        <a href="#popup_7" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
									<i class="icon icon-plus"></i>
								</a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Johnsson Agaton </a></h3>
                        <p>
                           Developer Expert
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_7" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker7.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->

               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1100ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker8.jpg" alt="">
                        <a href="#popup_8" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Henrikon Rebecca </a></h3>
                        <p>
                           Founder, Cards
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_8" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker8.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->

         <!-- shap img-->
         <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_speaker_memphis1.png" alt="">
            <img class="shap2" src="images/shap/home_speaker_memphis2.png" alt="">
            <img class="shap3" src="images/shap/home_speaker_memphis3.png" alt="">
         </div>
         <!-- shap img end-->
      </section>
      <!-- ts speaker end-->

      <!-- ts experience start-->
      <section id="ts-experiences" class="ts-experiences">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 no-padding">
                  <div class="exp-img" style="background-image:url(images/cta_img.jpg)">
                     <!-- <img class="img-fluid" src="images/cta_img.jpg" alt=""> -->
                  </div>
               </div><!-- col end-->
               <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-exp-wrap">
                     <div class="ts-exp-content">
                        <h2 class="column-title">
                           <span></span>
                           Dejanos contribuir en tu evento.
                        </h2>
                        <p>
                        Encuentra más inspiración en nuestros artículos y sigue los consejos de nuestros expertos en eventos.
                        </p>
                     </div>
                  </div>

               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container fluid end-->
      </section>
      <!-- ts experience end-->

      <!-- 
      <section class="ts-schedule">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">
                     <span>Schedule Details</span>
                     Event Schedules
                  </h2>
                  <div class="ts-schedule-nav">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                                 <h3>5th June</h3>
                                 <span>Friday</span>
                               </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">        <h3>6th June</h3>
                                  <span>Saturday</span>
                              </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                                 <h3>7th June</h3>
                                 <span>Sunday</span>
                              </a>
                        </li>
                     </ul>
                   
                  </div>
               </div>

            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs schedule-tabs-item">
                     <div role="tabpanel" class="tab-pane active" id="date1">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Johnsson Agaton</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">12.30 - 01.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Lundryn Melisa</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>

                     <div role="tabpanel" class="tab-pane" id="date2">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker5.jpg" alt="">
                                 <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker6.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker7.jpg" alt="">
                                 <span class="schedule-slot-time">04.30 - 05.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Melisa Lundryn</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker8.jpg" alt="">
                                 <span class="schedule-slot-time">05.30 - 06.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Agaton Johnsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="date3">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
      ts experience end-->

      <!-- ts pricing start-->
      <section class="ts-pricing gradient" style="background-image: url(images/pricing/pricing_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     <span>Precios</span>
                     Obten tu membresia
                  </h2>
               </div><!-- section title end-->
            </div><!-- col end-->
            <!-- row end-->
            <div class="row">
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Early Bird</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>219
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 100%"></div>
                           </div>
                           <p class="ts-pricing-value">500/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <a href="#" class="btn pricing-btn">Buy Ticket</a>
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Regular</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>399
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 75%"></div>
                           </div>
                           <p class="ts-pricing-value">350/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <a href="#" class="btn pricing-btn">Buy Ticket</a>
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Platinum</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>699
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 50%"></div>
                           </div>
                           <p class="ts-pricing-value">250/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <a href="#" class="btn pricing-btn">Buy Ticket</a>
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
         <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
            <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
         </div>
      </section>
      <!-- ts pricing end-->
      <!-- ts blog start-->
      <section class="ts-blog section-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title">
                     <span></span>
                     Ultimos Eventos
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="images/blog/blog1.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                             <a href="#">BY Admin</a>
                           </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">   XS´s de Valeria</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Ver evento <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="images/blog/blog2.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                <a href="#">BY ADMIN</a>
                              </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Boda de Ricardo y Alma</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Ver Evento <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="images/blog/blog3.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                   <a href="#">BY Admin</a>
                                 </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Boda de Felipe y Karen</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Ver evento <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
         <!-- shap image-->
         <div class="speaker-shap">
            <img class="shap2" src="images/shap/news_memphis2.png" alt="">
            <img class="shap1" src="images/shap/news_memphis1.png" alt="">
         </div>
      </section>
      <!-- ts blog end-->

      <!-- 
      <section class="ts-intro-sponsors" style="background-image: url(images/sponsors/sponsor_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     <span>Who helps us</span>
                     Our Sponsors
                  </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="sponsors-logo text-center">
                     <a href="#"><img src="images/sponsors/sponsor1.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor2.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor3.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor4.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor5.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor6.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor7.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor8.png" alt=""></a>
                     <a href="#"><img src="images/sponsors/sponsor9.png" alt=""></a>
                     <div class="sponsor-btn text-center">
                        <a href="#" class="btn">Become a Sponsor</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   -->

      <!-- 
      <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <h2 class="column-title">
                     <span>Reach us</span>
                     Get Direction to the
                     Event Hall
                  </h2>

                  <div class="ts-map-tabs">
                     <ul class="nav" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Time</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                        </li>
                     </ul>

                     
                     <div class="tab-content direction-tabs">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                    United States
                              </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                          United States
                                    </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="references">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                          United States
                                    </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div>
                           </div><
                        </div>
                     </div>

                  </div>

               </div>
               <div class="col-lg-6 offset-lg-1">
                  <div class="ts-map">
                     <div class="mapouter">
                        <div class="gmap_canvas">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9028133968723!2d-73.99208268505396!3d40.74216397932861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a4119ce269%3A0x9dec0c979b575972!2sEataly+NYC+Flatiron!5e0!3m2!1sen!2sbd!4v1541577288827"></iframe>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="speaker-shap">
            <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="images/shap/Direction_memphis3.png"
               alt="">
            <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="images/shap/Direction_memphis2.png"
               alt="">
            <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="images/shap/Direction_memphis4.png"
               alt="">
            <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="images/shap/Direction_memphis1.png"
               alt="">
         </div>
      </section>
      -->

      <!-- ts footer area start-->
      <div class="footer-area">

         <!-- ts-book-seat start-->
         <section class="ts-book-seat" style="background-image: url(images/book_seat_img.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="book-seat-content text-center mb-100">
                        <h2 class="section-title white">
                           <span>planealo.mx</span>
                           Tu mejor opcion
                        </h2>
                        <a href="#" class="btn">Comencemos</a>
                     </div><!-- book seat end-->
                  </div><!-- col end-->

               </div><!-- row end-->
               <div class="ts-footer-newsletter">
                  <div class="ts-newsletter" style="background-image: url(images/shap/subscribe_pattern.png)">
                     <div class="row">
                        <div class="col-lg-6 mx-auto">
                           <div class="ts-newsletter-content">
                              <h2 class="section-title">
                                 <span>Recibe nuestras noticias</span>
                              
                              </h2>
                           </div>
                           <div class="newsletter-form">
                              <form action="#" method="post" class="media align-items-end">
                                 <div class="email-form-group media-body">
                                    <input type="email" name="email" id="newsletter-form-email" class="form-control"
                                       placeholder="Your Email" autocomplete="off" required="">
                                 </div>
                                 <div class="d-flex ts-submit-btn">
                                    <button class="btn">Suscribete</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- container end-->
         </section>
         <!-- book seat  end-->

         <!-- footer start-->
        
         <!-- footer end-->
         <div class="BackTo">
            <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
         </div>

      </div>
      <!-- ts footer area end-->
   </div>
   <!-- Body inner end -->
</body>


<!-- index-515:53-->
</html>
<?php  ActiveForm::end(); ?>