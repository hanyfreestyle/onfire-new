{{--<x-website.footer-news-letter type="shop"/>--}}


<div class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ft-widget-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="footer_logo">
                                <img src="{{getDefPhotoPath($DefPhotoList,'light-logo')}}" alt="" class="img img-responsive">
                            </a>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end footer_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>

                    </div>


                    <div class="row mt-lg-3">
                        <div class="col-lg-12">
                            <p class="footer_text">
                                {{__('web/footer.about_text')}}
                            </p>

                        </div>
                    </div>


                    <div class="row">


                    </div>

                    <div class="row">
                        <div class="about-contact-info clearfix">
                            <div class="address-info">
                                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="info-content info_address">
                                    {!! nl2br(__('web/footer.address')) !!}
                                </div>
                            </div>
                            <div class="phone-info">
                                <div class="info-icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="info-content info_phone">
                                    {!! nl2br(__('web/footer.phone')) !!}
                                </div>
                            </div>
                            <div class="email-info">
                                <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                <div class="info-content info_phone">
                                    {!! nl2br(__('web/footer.whatsapp')) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="ft-fixed-area">
                    <div class="reservation-box">
                        <div class="reservation-wrap">
                            <h3 class="res-title">{{__('web/footer.Open_Hour')}}</h3>
                            <div class="res-date-time">
                                <div class="res-date-time-item">


                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text"><p>Tuesday:</p></div>
                                            <div class="res-date-dot"></div>
                                        </div>
                                    </div>


                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Wednesday:</p>
                                            </div>
                                            <div class="res-date-dot"></div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Thursday:</p>
                                            </div>
                                            <div class="res-date-dot">.......................................</div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Friday:</p>
                                            </div>
                                            <div class="res-date-dot">.......................................</div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Saturday:</p>
                                            </div>
                                            <div class="res-date-dot">.......................................</div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Sunday:</p>
                                            </div>
                                            <div class="res-date-dot">.......................................</div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>7AM - 9PM</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="res-date-time-item">
                                    <div class="res-date">
                                        <div class="res-date-item">
                                            <div class="res-date-text">
                                                <p>Monday:</p>
                                            </div>
                                            <div class="res-date-dot">.......................................</div>
                                        </div>
                                    </div>
                                    <div class="res-time">
                                        <div class="res-time-item">
                                            <p>Close</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
{{--<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>--}}

{{--@include('shop.layouts.inc.footer_mobile')--}}


