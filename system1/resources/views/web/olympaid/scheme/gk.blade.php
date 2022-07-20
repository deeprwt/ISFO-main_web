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
                                    <h2 class="title " style="color:#1F3F6D;">TEST PAPER SCHEME & MARKING</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white"><a href="{{ url('/') }}" class="">Home</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">TEST PAPER SCHEME & MARKING</li>
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
                    <!-- <div class="blog-standard-wrapper wrapper">
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="blog-post-wrapper">
                                  <div class="row">
                                      <div class="col-md-12">
                                        <div class="section-title section-devider">
                                            <h2 class="title">ISFO - GENERAL KNOWLEDGE OLYMPIAD</h2>
                                        </div>
                                       <div class="my-4">
                                        <table width="100%" class="table table-bordered" border="0" cellspacing="5" cellpadding="0">
                                            <tbody >
                                                <tr>
                                                    <th colspan="5" style="background: rgb(84, 141, 212); color: rgb(255, 255, 255); text-align: center; font-size: 18px;">
                                                    <div align="center">ISFO GENERAL KNOWLEDGE </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td >
                                                    <div align="center"><strong>CLASS</strong></div>
                                                    </td>
                                                    <td >
                                                    <div align="center"><strong>SECTION</strong></div>
                                                    </td>
                                                    <td >
                                                    <div align="center"><strong>NO. OF QUESTION</strong></div>
                                                    </td>
                                                    <td >
                                                    <div align="center"><strong>MARK PER QUESTION</strong></div>
                                                    </td>
                                                    <td >
                                                    <div align="center"><strong>TOTAL MARKS</strong></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4" valign="middle" style="background: rgb(242, 242, 242);">
                                                    <div align="center"><strong>1<sup>st</sup>&nbsp;to 3<sup>rd</sup></strong></div>
                                                    </td>
                                                    <td>General Awareness<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">20</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">1</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">20</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Current Affairs<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">1</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Life Skills<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">1</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>HOTS (Brainbox)<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">4</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">20</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-secondary">&nbsp;</td>
                                                    <td class="bg-secondary"><strong>Grand Total</strong></td>
                                                    <td class="bg-secondary">
                                                    <div align="center"><strong>35</strong></div>
                                                    </td>
                                                    <td class="bg-secondary">
                                                    <div align="center">&nbsp;</div>
                                                    </td>
                                                    <td class="bg-secondary">
                                                    <div align="center"><strong>50</strong></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4" valign="middle" style="background: rgb(242, 242, 242);">
                                                    <div align="center"><strong>4<sup>th</sup>&nbsp;to 10<sup>th</sup></strong></div>
                                                    </td>
                                                    <td>General Awareness<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">30</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">2</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">60</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Current Affairs<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">10</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">1</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">10</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Life Skills<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">1</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>HOTS (Brainbox)<a id="fck_paste_padding"></a></td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">5</div>
                                                    </td>
                                                    <td>
                                                    <div align="center">25</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg-secondary">&nbsp;</td>
                                                    <td class="bg-secondary"><strong>Grand Total</strong></td>
                                                    <td class="bg-secondary">
                                                    <div align="center"><strong>50</strong></div>
                                                    </td>
                                                    <td class="bg-secondary">
                                                    <div align="center">&nbsp;</div>
                                                    </td>
                                                    <td class="bg-secondary">
                                                    <div align="center"><strong>100</strong></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                       </div>
                                      </div>
                                    
                                  </div>
                                </div>
                            </div>
                           
                        </div>
                    </div> -->
                    <!-- Blog Wrapper Start science -->
                    <div class="blog-standard-wrapper wrapper">
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="blog-post-wrapper">
                                  <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                       <div class="my-4">
                                       <div width="100%">
                                             <img src="{{ url('web/assets/images/image 4_science.PNG') }}" class="img-fluid" alt="Logo">
                                                    </div>
                                       </div>
                                      </div>
                                      <div class="col-md-6 col-sm-12">

                                       <div class="my-4">
                                       <div width="100%">
                                             <img src="{{ url('web/assets/images/image 4_math.PNG') }}" class="img-fluid" alt="Logo">
                                                    </div>
                                       </div>
                                      </div>
                                      <div class="col-md-6 m-auto col-sm-12">

                                       <div class="my-4">
                                       <div width="100%">
                                             <img src="{{ url('web/assets/images/image 4_english.PNG') }}" class="img-fluid" alt="Logo">
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

@endsection