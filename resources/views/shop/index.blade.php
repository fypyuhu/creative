@extends('layouts.front')


@section('content')
    <div id="page-start"></div>
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">Shop</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->
                    <p>It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>

                    <div class="alert alert-danger hidden" id="MessageNotSent">
                        Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
                    </div>
                    <div class="contact-form">
                        <form id="contact-form-with-recaptcha" class="margin-clear" role="form" novalidate="novalidate">

                            <div class="form-group has-feedback">
                                <label for="name">Product*</label>
                                <select></select>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="subject">Subject*</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                <i class="fa fa-navicon form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="message">Message*</label>
                                <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Submit" class="submit-button btn btn-default">
                        </form>
                    </div>
                </div>
                <!-- main end -->



            </div>
        </div>
    </section>


@stop