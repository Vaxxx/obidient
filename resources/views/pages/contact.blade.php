@extends('layouts.template')
@section('content')
    <section class="section section-lg bg-gray-1">
        <div class="container">
            <h2 class="text-center">OBIDIENT-YUSUFUL CAMPAIGN ORGANIZATION  </h2>
            <div class="row">
                <div class="col-6 text-center p-5">
                    <table class="table table-hovered">
                        <tr>
                            <th>
                                <div class="card" >
                                    <div class="card-header bg-dark text-white p-1">
                                      Contact Us
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fa-solid fa-phone"></i> +234 81 7777 4111 </li>
                                        <li class="list-group-item"> <i class="fa-regular fa-phone"></i> +234 80 6603 4133</li>
                                        <li class="list-group-item"> <i class="fa-light fa-phone"></i> +234 70 1705 8880</li>
                                    </ul>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div class="card" >
                                    <div class="card-header bg-dark text-white p-1">
                                        Email Us
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fa-solid fa-envelope"></i>  info@obidient-yusuful.com </li>

                                    </ul>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="col-6 text-center p-5">
                    <div class="col-md-9 mb-md-0 mb-5 bg-gray-100 p-4">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('about')
    <section class="section section-lg bg-gray-1">
        <div class="container">
            <h2 class="text-center">OBIDIENT-YUSUFUL CAMPAIGN ORGANIZATION  </h2>
            <div class="row">
                <div class="col-12 text-center p-5">
                    <table class="table table-hovered">
                        <tr>
                            <th>
                                <div class="card" >
                                    <div class="card-header bg-dark text-white p-1">
                                        Originality
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Because we are truly original to the things we say and do,  we believe that our mission calls for </li>
                                        <li class="list-group-item">non-traditional approaches that address the root causes of societal problems in Nigeria.</li>
                                    </ul>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div class="card" >
                                    <div class="card-header bg-dark text-white p-1">
                                        Transparency
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">We will open our operations and decision making processes to scrutiny by our members  </li>
                                        <li class="list-group-item">who are principled and believe in the Change our Nation desires.</li>
                                    </ul>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
