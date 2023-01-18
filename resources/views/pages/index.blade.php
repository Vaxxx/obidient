   @extends('layouts.template')
@section('content')
    <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
        <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="box-image">
                        <img class="box-image-static" src="{{URL::asset('images/yusuful2023.jpg')}}" alt="" width="obidient" height="327"/>
                        <img class="box-image-position" src="{{URL::asset('images/yusuful2023.jpg')}}" alt="" width="yusuful" height="391"/>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 wow fadeInRight">
                    <h2>About Us</h2>
                    <p>We are a group of relentless youths who wants the best for this Country Nigeria. The power to make it better is in our hands.</p>
                    <p> Because we know that the power to make Nigeria better is in our hands, we build this group to inform you.</p>
                    <button class="btn btn-primary btn-block">Know More </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
        <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="box-image">
                        <img class="box-image-static" src="{{URL::asset('images/yusuful2023.jpg')}}" alt="" width="obidient" height="327"/>
                        <img class="box-image-position" src="{{URL::asset('images/yusuful2023.jpg')}}" alt="" width="yusuful" height="391"/>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 wow fadeInRight">
                    <h2>About Us</h2>
                    <p>We are a group of relentless youths who wants the best for this Country Nigeria. The power to make it better is in our hands.</p>
                    <p> Because we know that the power to make Nigeria better is in our hands, we build this group to inform you.</p>
                    <button class="btn btn-primary btn-block">Know More </button>
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
