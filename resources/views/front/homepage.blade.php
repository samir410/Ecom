@extends('front.layout.master')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('front/images/bg_1.jpg')}});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                     data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate">
                        <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
                        <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
                        <p><a href="public/front/appointment.html" class="btn btn-secondary px-4 py-3 mt-3">Make An Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>

        

          <div class="slider-item" style="background-image:url({{asset('front/images/image_1.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                     data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate">
                        <h1 class="mb-4">We Care <span>About Your Health</span></h1>
                        <h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable
                            medical.</h3>
                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-doctor"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Qualitfied Doctors</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-ambulance"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Emergency Care</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Outdoor Checkup</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-24-hours"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">24 Hours Service</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
                     style="background-image: url({{asset('front/images/about.jpg')}});">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">About Dr.care</span>
                            <h2 class="mb-4" style="font-size: 28px;">Medical specialty concerned with the care of
                                acutely ill hospitalized patients</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be the word.</p>
                        <div class="row mt-5 pt-2">
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-first-aid-kit"></span></div>
                                    <div class="text">
                                        <h3>Primary Care</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-dropper"></span></div>
                                    <div class="text">
                                        <h3>Lab Test</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-experiment-results"></span></div>
                                    <div class="text">
                                        <h3>Symptom Check</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                            class="flaticon-heart-rate"></span></div>
                                    <div class="text">
                                        <h3>Heart Rate</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url({{asset('front/images/bg_3.jpg')}});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>We Provide Free Health Care Consultation</h2>
                    <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
                    <p></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Departments</span>
                    <h2 class="mb-4">Clinic Departments</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="ftco-departments">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill"
                               href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Neurology</a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                               role="tab" aria-controls="v-pills-2" aria-selected="false">Surgical</a>

                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                               role="tab" aria-controls="v-pills-3" aria-selected="false">Dental</a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                               role="tab" aria-controls="v-pills-4" aria-selected="false">Ophthalmology</a>

                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
                               role="tab" aria-controls="v-pills-5" aria-selected="false">Cardiology</a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel"
                                 aria-labelledby="day-1-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('front/images/dept-1.jpg')}});"></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <h2>Neurological Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it came from it would have been rewritten a thousand times and everything
                                            that was left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                 aria-labelledby="v-pills-day-2-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('front/images/dept-2.jpg')}});"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <h2>Surgical Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it came from it would have been rewritten a thousand times and everything
                                            that was left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                 aria-labelledby="v-pills-day-3-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('front/images/dept-3.jpg')}});"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <h2>Dental Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it came from it would have been rewritten a thousand times and everything
                                            that was left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                 aria-labelledby="v-pills-day-4-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('front/images/dept-4.jpg')}});"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <h2>Ophthalmology Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it came from it would have been rewritten a thousand times and everything
                                            that was left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-first-aid-kit"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-dropper"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-experiment-results"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-heart-rate"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                 aria-labelledby="v-pills-day-5-tab">
                                <div class="row departments">
                                    <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                        <div class="img d-flex align-self-stretch"
                                             style="background-image: url({{asset('front/images/dept-5.jpg')}});"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <h2>Cardiology Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it came from it would have been rewritten a thousand times and everything
                                            that was left from its origin would be the word.</p>
                                        <div class="row mt-5 pt-2">
                                            <div class="col-md-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-idea"></span></div>
                                                    <div class="text">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-idea"></span></div>
                                                    <div class="text">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-idea"></span></div>
                                                    <div class="text">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="services-2 d-flex">
                                                    <div
                                                        class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                                        <span class="flaticon-idea"></span></div>
                                                    <div class="text">
                                                        <h3>Heart Rate</h3>
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Doctors</span>
                    <h2 class="mb-4">Our Qualified Doctors</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{asset('front/images/doc-1.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Lloyd Wilson</h3>
                            <span class="position mb-2">Neurologist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{asset('front/images/doc-2.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Rachel Parker</h3>
                            <span class="position mb-2">Ophthalmologist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{asset('front/images/doc-3.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Ian Smith</h3>
                            <span class="position mb-2">Dentist</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url({{asset('front/images/doc-4.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Alicia Henderson</h3>
                            <span class="position mb-2">Pediatrician</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonials</span>
                    <h2 class="mb-4">Our Patients Says About Us</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-8">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                     style="background-image: url({{asset('front/images/person_1.jpg')}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Farmer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                     style="background-image: url({{asset('front/images/person_2.jpg')}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                     style="background-image: url({{asset('front/images/person_3.jpg')}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                     style="background-image: url({{asset('front/images/person_4.jpg')}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Striper</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4"
                                     style="background-image: url({{asset('front/images/person_1.jpg')}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
             style="background-image: url({{asset('front/images/bg_3.jpg')}});"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <span class="subheading">Consultation</span>
                        <h2 class="mb-4">Free Consultation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <form action="#" class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Services</option>
                                            <option value="">Neurology</option>
                                            <option value="">Cardiology</option>
                                            <option value="">Dental</option>
                                            <option value="">Ophthalmology</option>
                                            <option value="">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control"
                                          placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 p-5 bg-counter aside-stretch">
                    <h3 class="vr">About Dr.Care Facts</h3>
                    <div class="row pt-4 mt-1">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Happy Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="84">0</strong>
                                    <span>Number of Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 p-5 bg-light">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Number of Staffs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Blog</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url({{ asset('front/images/image_1.jpg') }});">
                            <div class="meta-date text-center p-2">
                                <span class="day">23</span>
                                <span class="mos">January</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url({{asset('front/images/image_2.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">23</span>
                                <span class="mos">January</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url({{asset('front/images/image_3.jpg')}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">23</span>
                                <span class="mos">January</span>
                                <span class="yr">2019</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
