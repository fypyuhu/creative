@extends('layouts.front')


@section('content')
    <div id="page-start"></div>
    <section id="services" class="light-gray-bg pv-30 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="text-center">Contact <strong>US</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">


                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:300px;width:100%;' class="xs-12">
                        <div id='gmap_canvas' style='height:300px;width:100%;' class="xs-12"></div>


                        <style>#gmap_canvas img {
                                max-width:100%;
                                background: 100%;
                            }</style>
                    </div>
                    <script type='text/javascript'>function init_map() {
                            var myOptions = {
                                zoom: 10,
                                center: new google.maps.LatLng(51.5149042, -0.12354989999994359),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(51.5149042,  -0.12354989999994359)
                            });
                            infowindow = new google.maps.InfoWindow({content: '<strong>Kreative</strong><br>creativ | initativ | innovative<br>'});
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="footer-content">
                        <div class="logo-footer"><img id="logo-footer" src="/assets/images/logo_light_blue.png" alt=""></div>
                        <p>
asdasdasd asdasd asdsada
asdasdasd asdasd asdsada

                        </p>
                        <ul class="list-inline mb-20">
                            <li><i class="text-default fa fa-map-marker pr-5"></i> One infinity loop, 54100</li>
                            <li><i class="text-default fa fa-phone pl-10 pr-5"></i> 0333 335 0515</li>
                            <li><a href="mailto:sales@gokreativ.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i> sales@gokreativ.com </a></li>
                        </ul>
                        <div class="separator-2"></div>
                        <ul class="social-links circle margin-clear animated-effect-1">
                            <li class="facebook"><a target="_blank" href="http://www.facebook.com/kreativuk"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://www.twitter.com/kreativ_uk"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="https://plus.google.com/+Kreativukltd/"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
                            <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                            <li class="youtube"><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                            <li class="dribbble"><a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                            <li class="instagram"><a target="_blank" href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-content">
                        <h2 class="title">Contact Form</h2>
                        <div class="alert alert-success hidden" id="MessageSent2">
                            We have received your message, we will contact you very soon.
                        </div>
                        <div class="alert alert-danger hidden" id="MessageNotSent2">
                            Oops! Something went wrong please refresh the page and try again.
                        </div>
                        <form role="form" id="" class="margin-clear" method="post" action="{{route('contact.post')}}">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="name2">Name</label>
                                <input type="text" class="form-control" id="name2" placeholder="Name" required  name="name">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="email2">Email address</label>
                                <input type="email" class="form-control" id="email2" placeholder="Enter email" required name="email">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="message2">Message</label>
                                <textarea class="form-control" rows="4" id="message2" placeholder="Message" required name="message"></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop