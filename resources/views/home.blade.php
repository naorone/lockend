@extends('layouts.index')
@section('content')

    <div class="center text-right">
        <div class="container">
            <div class="banner">
                <h1 class="condensed">Stop</h1>
                <h1 class="condensed">Waiting</h1>
                <h1 class="condensed">At Home</h1>
            </div>
            <div class="subtitle"><h4>Fly for your dreams</h4></div>
        </div>
    </div>
    <div class="bottom">
        <div class="text-right container hidden-xs"><a id="scrollDownArrow" href="#"><i class="ion-ios7-arrow-thin-down"></i></a></div>
        <div class="signupForm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <b class="mb10">No vuelvas a preocuparte por no poder recibir tus pedidos en casa. <br/> Regístrate ahora.</b>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="form-inline subscribe-form" id="subscription-form" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="subscriber-name">Full Name</label>
                                <input name="name" type="text" class="form-control" id="subscriber-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="subscriber-email">Email address</label>
                                <input name="email" type="email" class="form-control" id="subscriber-email" placeholder="Your Email">
                            </div>
                            <input id="subscribe-button" type="submit" class="btn btn-primary" value="Get it!">
                        </form>
                        <!-- SUCCESS OR ERROR MESSAGES -->
                        <div id="subscription-response"></div>
                    </div>
                </div>
            </div><!-- container -->
        </div><!--/signupForm-->
    </div>
</div>


    <div id="video" class="cyan-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-wrapper">
                        <h1 class="giant-heading">
                            Recoge<br/>
                            Cuando<br/>
                            Puedas
                        </h1>

                        <p>Accepting means you allow yourself to feel whatever it is you are feeling at that moment. It is part of the isness of the Now. You can’t argue with what is.</p>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-wrapper">
                        <div class="video"></div>

                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/1DPG5mQjIF8" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
    </div><!-- #video -->



    <div id="story" class="light-wrapper">
        <div class="container inner">
            <div class="row story">
                <div class="col-sm-6">
                    <div class="col-wrapper">
                        <img class="bottom-marged" src="img/content-left.jpg">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="col-wrapper">
                        <p><span class="up-caps">L</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec odio eget diam tincidunt ultrices in sit amet sem. In congue efficitur erat et lobortis. Mauris id odio vehicula, iaculis nisl in, hendrerit libero. Praesent consectetur magna et ipsum aliquam convallis. Donec eget ex metus. In dictum maximus turpis, eget commodo turpis mollis viverra. Fusce nec sem vel purus aliquam mattis. </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec odio eget diam tincidunt ultrices in sit amet sem. In congue efficitur erat et lobortis. consectetur adipiscing elit. In nec odio eget diam tincidunt ultrices in sit amet sem Mauris id odio vehicula, iaculis nisl in, hendrerit libero. Praesent consectetur magna et ipsum aliquam convallis. Donec eget ex metus. In dictum maximus turpis, eget commodo turpis mollis viverra. Fusce nec sem vel purus aliquam mattis.

                        </p>

                    </div>
                </div>
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
    </div><!-- #story -->












@stop