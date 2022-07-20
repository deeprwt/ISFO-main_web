@extends('web.layout.template')
@section('main')
            <!-- Page Banner Start -->
            <div class="section page-banner-section py-5" style="background-color:#fbae18;">
                <div class="container">
                    <!-- Page Banner Wrapper Start -->
                    <div class="page-banner-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Page Banner Content Start -->
                                <div class="page-banner text-center">
                                    <h2 class="title " style="color:#1F3F6D;">English Olympaid</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white"><a href="{{ url('/') }}" class="">Home</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">English Olympaid</li>
                                    </ul>
                                </div>
                                <!-- Page Banner Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Page Banner Wrapper End -->
                </div>
            </div>
            <!-- Page Banner End -->
            <!-- Report Career Section Start -->
            <div class="section blog-standard-section section-padding my-5">
                <div class="container">
                    <!-- Blog Wrapper Start -->
                    <div class="blog-standard-wrapper wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="blog-post-wrapper">
                                  <div class="row">
                                      <div class="col-md-8">
                                        <div class="section-title section-devider">
                                            <h2 class="title">ISFO - English Olympiad</h2>
                                        </div>
                                        <p class="py-5">
                                            English is not merely a subject 
                                            but a language. Through this 
                                            olympiad, ISFO aims to enrich 
                                            and deepen a child’s 
                                            appreciation for the English 
                                            language and its foundation, 
                                            verbal reasoning and reading 
                                            comprehension. The content of 
                                            the tests is designed to focus on 
                                            communication and use of 
                                            English language, and not 
                                            restricted to rote learning and 
                                            grammatical accuracy, only
                                        </p>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="text-center">
                                              <img src="{{ url('web/assets/images/olympaid/english.png') }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                           <div class="col-md-3 pb-5">
                               <ul class="list-group">
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('web/assets/pdf/image 3.PNG') }}" target="_blank">Exam Schedule </a>
                                   </li>
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light" >
                                    <a href="{{ url('web/assets/pdf/syllabus/eng.pdf') }}" target="_blank">Syllabus </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light" >
                                    <a href="{{ url('scheme/english') }}">Paper Scheme  </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light" >
                                    <a href="{{ url('sample-paper/english') }}">Sample Papers  </a>
                                </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection