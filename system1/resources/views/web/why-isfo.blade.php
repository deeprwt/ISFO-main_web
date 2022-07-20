@extends('web.layout.template')
@section('main')
<div class="section page-banner-section py-5" style="background-color:#fbae18;">
    <div class="container">
        <!-- Page Banner Wrapper Start -->
        <div class="page-banner-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title " style="color:#1F3F6D;">Why ISFO Olympiad</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ url('/') }}" class="">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Why Isfo Olympiad</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<div class="section report-career-2-section section-padding-02 pb-4">
    <div class="container">
        <!-- Report Career Wrapper Start -->
        <div class="report-career-2-wrapper">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ url('about-isfo') }}"><i class="fa fa-angle-double-right font-weight-bold"></i>  About ISFO</a></li>
                        <li class="list-group-item"><a href="{{ url('advisory-council') }}"><i class="fa fa-angle-double-right font-weight-bold"></i>Advisory Panel </a></li>
                        <li class="list-group-item"><a href="{{ url('our-partner') }}"><i class="fa fa-angle-double-right font-weight-bold"></i>Our Partner</a></li>
                        <li class="list-group-item"><a href="{{ url('why-isfo') }}"><i class="fa fa-angle-double-right font-weight-bold"></i>Why ISFO </a></li>
                    </ul>
                </div>
                <div class="col-md-9 d-lg-flex align-items-center">
                    <!-- Report Career Content Start -->
                    <div class="report-career-content report-career-2-content">
                        <div class="section-title section-devider">
                            <h2 class="title">Why ISFO Olympiad</h2>
                        </div>
                                    <p>
                                    •&nbsp;	ISFO for the first time brings a truly International Olympiad. 
                                    </p>
                                    <p>•&nbsp;	Distinguished educationists on the International Advisory panel from various countries ensure <b>content and exams are of global standards.</b>
                                </p>
                                <p>
                                •&nbsp;	ISFO offers comprehensive performance reviews, Report card and international ranking analysis for students in a simplified and graphical manner.
                                </p>
                                <p>
                                •&nbsp;	A <b>comprehensive package</b> of e-Study Material, e-Practice Tests and Exams for three subjects - Mathematics, Science and English are offered at the same price. <b>NO EXTRA FEES.</b> 
                                </p>
                                <p>
                                •&nbsp;	These exams designed specifically to enforce scientific reasoning, mathematics & linguistic prowess, are autonomous and not any Board centric.  
                                </p>
                                <p>
                                •&nbsp;	Participants are screened for their basic understanding of the subjects. It essays their skills, learning, talent, practical application, and classroom knowledge. 
                                </p>
                                <p>
                                •&nbsp;	They help develop creative and lateral thinking skills and inculcate a sense of autonomy in critical thought and action.
                                </p>
                                <p>
                                •&nbsp;	Exams are conducted Offline.
                                </p>
                            
                        <!-- Report Career-3 Wrapper End -->
                    </div>
                    <!-- Report Career Content End -->
                </div>
            </div>
        </div>
        <!-- Report Career Wrapper End -->
    </div>
</div>
@endsection