<!DOCTYPE html>
<html lang="pt-br">

<?php include('head.php'); ?>

<body onload="welcome()">
    <?php include('nav.php'); ?>

    <main>

        <section id="sec01" class="container-fluid w-100">

            <div id="main_slider" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#main_slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#main_slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#main_slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="src/img/banner1.jpg" class="banner d-block w-100" alt="banner">
                    </div>

                    <div class="carousel-item">
                        <img src="src/img/depoimento2.jpg" class="banner d-block w-100" alt="banner">
                    </div>

                    <div class="carousel-item">
                        <img src="src/img/depoimento 1.jpg" class="banner d-block w-100" alt="banner">
                    </div>

                </div>

            </div>
            <a id="btn_down_link" href="#sec02"><img id="btn_down" src="src/bootstrap/bootstrap-icons/icons/chevron-double-down-circ.svg" alt=""></a>
        </section>


        <section id="sec02" class="container">
            <div id="sec02_div01">
                <h1>WELCOME TO CLYMENE</h1>
                <h2>MULTIPURPOSE <span class="highlight">HTML5</span> TEMPLATE</h2>
            </div>
            <img id="sec02_div01_img" src="src/img/desktop1.png" alt="">

        </section>

        <section class="container-fluid  top_bottom_padding" id="middle_points">
            <div class="row side">
                <div class="circle middle_point_icon">
                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/gear-fill.svg" alt="">
                </div>

                <div class="col col-xs-4 circle_cont">

                    <a href="#sec02" id="toastGreenBtn" style="text-decoration: none;">
                        <h3>FULLY CUTOMIZABLE</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </a>
                </div>
                <div class="circle middle_point_icon">
                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/code-slash.svg" alt="">
                </div>

                <div class="col col-xs-4 circle_cont">
                    <a href="#sec02" id="toastYellowBtn" style="text-decoration: none;">
                        <h3>UNLIMITED OPTIONS</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </a>
                </div>
                <div class="circle middle_point_icon">
                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/eye-fill.svg" alt="">
                </div>
                <div class="col col-xs-4 circle_cont">
                    <a href="#sec02" id="toastRedBtn" style="text-decoration: none;">
                        <h3>RETINA READY</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="container top_bottom_padding">
            <div class="row">
                <div class="col col-6" id="img_cont">
                    <img id="img_cel" src="src/img/iphone.png" alt="mid-celular">
                    <a id="img_btn01" class="img_btn"><img class="iphone_icon" src="src/bootstrap/bootstrap-icons/icons/plus" alt=""></a>
                    <a id="img_btn02" class="img_btn"><img class="iphone_icon" id="pop_btn" src="src/bootstrap/bootstrap-icons/icons/plus" alt=""></a>
                    <!-- CARD -->
                    <div id="msg_btn02" class="card">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                    <!-- \CARD -->
                    <a id="img_btn03" class="img_btn"><img id="iphone_icon03" class="iphone_icon" src="src/bootstrap/bootstrap-icons/icons/plus" alt=""></a>
                    <a id="img_btn04" class="img_btn"><img class="iphone_icon" src="src/bootstrap/bootstrap-icons/icons/plus" alt=""></a>
                </div>

                <div class="col">
                    <div id="img_title" class="img_content">
                        <h1>POINTS OF INTEREST</h1>
                        <h2>USE THIS TO <span class="highlight">HIGHLIGHT THE POINTS OF INTEREST</span> OF YOUR PRODUCTS. JUST A CLICK TO OPEN A BRIEF DESCRIPTION OF EACH POINT.</h2>
                    </div>

                    <div id="img_text" class="img_content">

                        <div class="side">
                            <div class="circ_cont">
                                <div class="circle">
                                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/phone.svg" alt="">
                                </div>
                            </div>
                            <div class="img_text_content">
                                <h3>100% RESPONSIVE</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magnam repellat cum sequi ipsam, veritatis natus quas accusantium consequuntur mollitia qui quia minus consequatur porro reiciendis ab quo, optio corrupti.</p>
                            </div>
                        </div>
                        <div class="side">
                            <div class="circ_cont">
                                <div class="circle">
                                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/eye-fill.svg" alt="">
                                </div>
                            </div>
                            <div class="img_text_content">
                                <h3>RETINA READY</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magnam repellat cum sequi ipsam, veritatis natus quas accusantium consequuntur mollitia qui quia minus consequatur porro reiciendis ab quo, optio corrupti.</p>
                            </div>
                        </div>

                        <div class="side">
                            <div class="circ_cont">
                                <div class="circle">
                                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/code-slash.svg" alt="">
                                </div>
                            </div>
                            <div class="img_text_content">
                                <h3>INTERACTIVE ELEMENTS</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magnam repellat cum sequi ipsam, veritatis natus quas accusantium consequuntur mollitia qui quia minus consequatur porro reiciendis ab quo, optio corrupti.</p>
                            </div>
                        </div>

                        <div class="side">
                            <div class="circ_cont">
                                <div class="circle">
                                    <img class="icon" src="src/bootstrap/bootstrap-icons/icons/code-slash.svg" alt="">
                                </div>
                            </div>
                            <div class="img_text_content">
                                <h3>UNLIMITED OPTIONS</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magnam repellat cum sequi ipsam, veritatis natus quas accusantium consequuntur mollitia qui quia minus consequatur porro reiciendis ab quo, optio corrupti.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid parallax data_bottom data_bottom">
            <div class="row" id="data_bottom_row">
                <div class="col col-xxl-1 col-xl-6 data_bottom_text">
                    <div>
                        <h2 class="highlight data_bottom_numbers">82</h2>
                        <hr>
                    </div>
                    <h3 class="data_bottom_title">FINISHED PROJECTS</h3>
                </div>
                <div class="col  data_bottom_text">
                    <div>
                        <h2 class="highlight data_bottom_numbers">8723</h2>
                        <hr>
                    </div>
                    <h3 class="data_bottom_title">LINES OF CODE</h3>
                </div>
                <div class="col  data_bottom_text">
                    <div>
                        <h2 class="highlight data_bottom_numbers">513</h2>
                        <hr>
                    </div>
                    <h3 class="data_bottom_title">CUPS OF COFFEE</h3>
                </div>
                <div class="col  data_bottom_text">
                    <div>
                        <h2 class="highlight data_bottom_numbers">3419</h2>
                        <hr>
                    </div>
                    <h3 class="data_bottom_title">CUSTOM COUNTERS</h3>
                </div>
            </div>
        </section>

        <section class="container-fluid bottom top_bottom_padding vstack gap-4">
            <h2>WHAT OUR CLIENTS SAY</h2>
            <div class="container-fluid">
                <div id="client_slider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner bot_content_padding">
                        <div class="carousel-item active">
                            <img class="img_bottom" src="src/img/depoimento2.jpg" alt="cliente_Isabella_Moro">
                            <div>
                                <h3>ISABELLA MORO</h3>
                                <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam. Libero placeat ut cumque harum, quae aut at soluta in consequatur, iusto incidunt obcaecati eos repudiandae! Eveniet accusantium nulla cum!"</p>
                                <h4 class="highlight">CEO, Company Name</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/depoimento 1.jpg" class="img_bottom" alt="cliente_Julia_Roberta">
                            <div>
                                <h3>JULIA ROBERTA</h3>
                                <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam. Libero placeat ut cumque harum, quae aut at soluta in consequatur, iusto incidunt obcaecati eos repudiandae! Eveniet accusantium nulla cum!"</p>
                                <h4 class="highlight">CFO, Company Name</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="src/img/depoimento3.jpg" class="img_bottom" alt="cliente_Malcolm_Jorge">
                            <div>
                                <h3>MALCOLN JORGE</h3>
                                <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam. Libero placeat ut cumque harum, quae aut at soluta in consequatur, iusto incidunt obcaecati eos repudiandae! Eveniet accusantium nulla cum!"</p>
                                <h4 class="highlight">CTO, Company Name</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




        </section>

        <section>
            <div class="sponsors_cont row">
                <img class="sponsors_img col-xs-3" src="src/img/empresa2.png" alt="Sunshine inc.">
                <img class="sponsors_img col-xs-3" src="src/img/empresa5.png" alt="Henderson inc.">
                <img class="sponsors_img col-xs-3" src="src/img/empresa4.png" alt="Hipster inc.">
                <img class="sponsors_img col-xs-3" src="src/img/empresa1.png" alt="Walkers inc.">
            </div>

        </section>

        <?php include('footer.php'); ?>

    </main>



</body>

<!-- MODAL -->
<div class="modal fade" tabindex="-1" id='myModal'>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Boas Vindas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Seja Bem-vindo!!!</p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Cancelar</button> -->
                <button type="button" data-bs-dismiss="modal" class="btn btn-success">Ok!</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id='videoModal' data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Boas Vindas</h5>
                <button type="button" id="btn_close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="modalPlayer" width="465" height="315" src="https://www.youtube.com/embed/h7MYJghRWt0" title="YouTube video player" frameborder="0" allow="clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button id="videoBtnChange" type="button" class="btn btn-primary">Mudar</button>
            </div>
        </div>
    </div>
</div>

<!-- /MODAL -->

<!-- TOAST -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastGreen" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <img src="src/bootstrap/bootstrap-icons/icons/check-square-fill.svg" alt="Icone Green" style="filter: invert(100%) sepia(4%) saturate(2%) hue-rotate(35deg) brightness(117%) contrast(100%);">
                <span>Hello, world! This is a toast message.</span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    <div id="toastYellow" class="toast align-items-center text-white bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <img src="src/bootstrap/bootstrap-icons/icons/check-square-fill.svg" alt="Icone Yellow" style="filter: invert(100%) sepia(4%) saturate(2%) hue-rotate(35deg) brightness(117%) contrast(100%);"> Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    <div id="toastRed" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <img src="src/bootstrap/bootstrap-icons/icons/check-square-fill.svg" alt="Icone Red" style="filter: invert(100%) sepia(4%) saturate(2%) hue-rotate(35deg) brightness(117%) contrast(100%);"> Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- /TOAST -->

<!-- TEXT EXTRA -->
<div id="new_p" class="side">
    <div class="circ_cont">
        <div class="circle">
            <img class="icon" src="src/bootstrap/bootstrap-icons/icons/plus.svg" alt="">
        </div>
    </div>
    <div class="img_text_content">
        <h3>100% EXTRA</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magnam repellat cum sequi ipsam, veritatis natus quas accusantium consequuntur mollitia qui quia minus consequatur porro reiciendis ab quo, optio corrupti.</p>
    </div>
</div>
<!-- /TEXT EXTRA -->

</html>