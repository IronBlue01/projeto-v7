
@extends('layouts.site.main-layout')


@section('content')

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area bg-white">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span>Pinterest</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i> <span>Behance</span></a>
        </div>
        <!-- Message Box -->
        <div class="message-box">
            <a href="#" data-toggle="modal" data-target=".contact-modal-lg"><img src="./site/img/core-img/envelope.png" alt=""></a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->
    
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="carousel h-100 slide" data-ride="carousel" id="welcomeSlider">
            <!-- Carousel Inner -->
            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 bg-img active" style="background-image: url(./site/img/bg-img/1.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>01.</span>
                            <h2> Você chegou la</h2>
                        </div>
                    </div>
                </div>

                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/2.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>02.</span>
                            <h2> Acredite você pode voar</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/3.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>03.</span>
                            <!-- <h2> </h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/4.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>04.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/5.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>05.</span>
                            <h2> Você chegou la</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/6.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>06.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/7.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>07.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/8.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>08.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/9.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>09.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/10.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>10.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/11.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>11.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/12.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>12.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url(./site/img/bg-img/13.jpg);">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>13.</span>
                            <!-- <h2> Believe you can fly</h2> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#welcomeSlider" data-slide-to="0" class="active bg-img" style="background-image: url(./site/img/bg-img/1.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="1" class="bg-img" style="background-image: url(./site/img/bg-img/2.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="2" class="bg-img" style="background-image: url(./site/img/bg-img/3.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="3" class="bg-img" style="background-image: url(./site/img/bg-img/4.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="4" class="bg-img" style="background-image: url(./site/img/bg-img/5.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="5" class="bg-img" style="background-image: url(./site/img/bg-img/6.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="6" class="bg-img" style="background-image: url(./site/img/bg-img/7.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="7" class="bg-img" style="background-image: url(./site/img/bg-img/8.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="8" class="bg-img" style="background-image: url(./site/img/bg-img/9.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="9" class="bg-img" style="background-image: url(./site/img/bg-img/10.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="10" class="bg-img" style="background-image: url(./site/img/bg-img/11.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="11" class="bg-img" style="background-image: url(./site/img/bg-img/12.jpg);"></li>
                <li data-target="#welcomeSlider" data-slide-to="12" class="bg-img" style="background-image: url(./site/img/bg-img/13.jpg);"></li>
            </ol>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="contact-popup-form" id="contact-modal-lg">
        <div class="modal fade contact-modal-lg" tabindex="-1" role="dialog" aria-labelledby="contact-modal-lg" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-heading-text text-center mb-30">
                                    <span></span>
                                    <h2>Entre em contato</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <div class="container-fluid">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn studio-btn mt-3"><img src="./site/img/core-img/logo-icon.png" alt=""> Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos direitos reservados | V7formaturas </a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="./site/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./site/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./site/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="./site/js/plugins.js"></script>
    <!-- Active js -->
    <script src="./site/js/active.js"></script>

</body>

</html>
@endsection('content')