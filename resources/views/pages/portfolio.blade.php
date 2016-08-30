@extends('layouts.front')


@section('content')
    <div id="page-start"></div>

    <!-- section start -->
    <!-- ================ -->
    <section id="portfolio" class="section pv-30 light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title"><span class="text-muted">Our</span> <strong>Portfolio</strong></h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <!-- isotope filters start -->
        <div class="filters text-center">
            <ul class="nav nav-pills">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".web-design">Web design</a></li>
                <li><a href="#" data-filter=".app-development">App development</a></li>
                <li><a href="#" data-filter=".site-building">Site building</a></li>
            </ul>
        </div>
        <!-- isotope filters end -->
        <div class="isotope-container row grid-space-0 mb-20">
            <div class="col-sm-6 col-md-3 isotope-item web-design">
                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators bottom margin-clear">
                        <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-portfolio" data-slide-to="1"></li>
                        <li data-target="#carousel-portfolio" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="image-box text-center">
                                <div class="overlay-container">
                                    <img src="/images/portfolio-1.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                            <p class="small">Web Design</p>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-box text-center">
                                <div class="overlay-container">
                                    <img src="/images/portfolio-1-2.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                            <p class="small">Web Design</p>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-box text-center">
                                <div class="overlay-container">
                                    <img src="/images/portfolio-1-3.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h3><a href="#project-1" data-toggle="modal">Project Title</a></h3>
                                            <p class="small">Web Design</p>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="#project-1" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-1-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-1-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item app-development">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-2.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-2" data-toggle="modal">Project Title</a></h3>
                                <p class="small">App Development</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-2" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-2-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-2-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item app-development">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-3.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-3" data-toggle="modal">Project Title</a></h3>
                                <p class="small">App Development</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-3" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-3-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-3-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item web-design">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-4.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-4" data-toggle="modal">Project Title</a></h3>
                                <p class="small">Web Design</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-4" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-4-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-4-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item site-building">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-5.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-5" data-toggle="modal">Project Title</a></h3>
                                <p class="small">Site Building</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-5" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-5-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-5-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item app-development">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-6.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-6" data-toggle="modal">Project Title</a></h3>
                                <p class="small">App Development</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-6" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-6-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-6-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item site-building">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-7.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-7" data-toggle="modal">Project Title</a></h3>
                                <p class="small">Site Building</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-7" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-7-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-7-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
            <div class="col-sm-6 col-md-3 isotope-item app-development">
                <div class="image-box text-center">
                    <div class="overlay-container">
                        <img src="/images/portfolio-8.jpg" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="#project-8" data-toggle="modal">Project Title</a></h3>
                                <p class="small">App Development</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="#project-8" data-toggle="modal" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-8-label">Project Title</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Project Description</h3>
                                        <div class="separator-2"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                            </div>
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Project Info</h3>
                                        <ul class="list">
                                            <li><strong class="vertical-divider">Client </strong> John Doe</li>
                                            <li><strong class="vertical-divider">Date </strong> OCT 2014</li>
                                            <li><strong class="vertical-divider">In </strong> Web Design</li>
                                            <li><strong class="vertical-divider">Place </strong> Europe</li>
                                            <li><strong class="vertical-divider">URL </strong> <a href="#">www.theproject.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <h3>More info</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                        <form role="form">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" id="project-8-email" placeholder="Email">
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <a href="#" class="btn btn-default margin-top-clear">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
        </div>
        <div class="owl-carousel content-slider space-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial text-center">
                            <div class="testimonial-image">
                                <img src="/images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                            </div>
                            <h3>Just Perfect!</h3>
                            <div class="separator"></div>
                            <div class="testimonial-body">
                                <blockquote>
                                    <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                </blockquote>
                                <div class="testimonial-info-1">- Jane Doe</div>
                                <div class="testimonial-info-2">By Company</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial text-center">
                            <div class="testimonial-image">
                                <img src="/images/testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                            </div>
                            <h3>Amazing!</h3>
                            <div class="separator"></div>
                            <div class="testimonial-body">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                                </blockquote>
                                <div class="testimonial-info-1">- Jane Doe</div>
                                <div class="testimonial-info-2">By Company</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="clients-container">
                <div class="clients">
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                        <a href="#"><img src="/images/client-1.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                        <a href="#"><img src="/images/client-2.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                        <a href="#"><img src="/images/client-3.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
                        <a href="#"><img src="/images/client-4.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
                        <a href="#"><img src="/images/client-5.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
                        <a href="#"><img src="/images/client-6.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
                        <a href="#"><img src="/images/client-7.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
                        <a href="#"><img src="/images/client-8.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->



@stop