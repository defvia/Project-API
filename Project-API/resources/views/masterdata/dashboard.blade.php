@extends('template.main')
@section('content')
<section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                   
                                </div>
                                <div class="col-md-offset-2">

                                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                                  <li class="nav-item active" id="order">
                                    <a class="nav-link" id="pills-pesan-tab" data-toggle="pill" href="#pills-pesan" role="tab" aria-controls="pills-pesan" aria-selected="true">Pesan</a>
                                  </li>
                                  <li class="nav-item" id="confirm">
                                    <a class="nav-link" id="pills-konfirmasi-tab" data-toggle="pill" href="#pills-konfirmasi" role="tab" aria-controls="pills-konfirmasi" aria-selected="false">Konfirmasi</a>
                                  </li>
                                 
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-controls="pills-status" aria-selected="false">Status</a>
                                  </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                  <div class="tab-pane fade show active in" id="pills-pesan" role="tabpanel" aria-labelledby="pills-pesan-tab">
                                      {{csrf_field()}}
                                    <!--<legend class="text-center">PESANAN</legend>-->
                                    <div class="head_title text-center">
                                    <h4>PESANAN</h4>
                                    </div>

                                    <br><br>
                                    <fieldset>
                                        <legend>1. Identitas Pelanggan</legend>

                                        <div class="form-group col-md-6">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                            @if ($errors->has('nama'))
                                              <span class="invalid-feedback" role="alert" style="color: red">
                                                  <strong>{{ $errors->first('nama') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Nomor Telepon</label>
                                        <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomor Telepon">
                                        @if ($errors->has('no_telp'))
                                          <span class="invalid-feedback" role="alert" style="color: red">
                                              <strong>{{ $errors->first('no_telp') }}</strong>
                                          </span>
                                        @endif
                                    </div> 

                                    <div class="form-group col-md-6">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                        @if ($errors->has('alamat'))
                                          <span class="invalid-feedback" role="alert" style="color: red">
                                              <strong>{{ $errors->first('alamat') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    <br><br><br>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <!-- <a href="konfirmasi"> -->
                                            <button type="submit" class="btn-primary" data-toggle="pill" href="#pills-konfirmasi" id="goConfirm">
                                                Submit
                                            </button>
                                            <!-- </a> -->
                                            <!-- <input type="submit" name="" class="btn-primary" value="Submit"> -->
                                        </div>
                                    </div>

                                    </div>
                                  <div class="tab-pane fade" id="pills-konfirmasi" role="tabpanel" aria-labelledby="pills-contact-tab">
                                          <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">  
                <div class="container">
                    <div class="row">   
                        <div class="col-md-10 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
                                <a href=""><i class="fa fa-clock-o"></i> Admin 24/7</a>
                                <a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                        </div>

                    </div>          
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="{{ asset('images/3.png') }}" alt="" /></a>
                                </div>

                                
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
       

      
</header>

        <section id="features" class="features">
          
                            <div class="col-md-12">
                                <div class="head_title text-center">
                                <h4>KONFIRMASI</h4>
                                </div>
                                <div class="konfirmasi">
                                <div class="single_pakeg_one text-right wow rotateInDownRight">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
                                <div class="single_pakeg_text" style="color: #000">
                                 

<br><br>
<a href="status">
  <button class="btn-primary">
      Submit
  </button>
</a>
                                </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

        </section>

 
        
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>      


        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/wow/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>


                                  </div>

                                   <div class="tab-pane fade" id="pills-status" role="tabpanel" aria-labelledby="pills-contact-tab">
                                      <!doctype html>
                                  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
                                  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
                                  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
                                  <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
                                      <head>
                                          <meta charset="utf-8">
                                          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                                          <link rel="shortcut icon" href="{{ asset('images/3.png')}}">
                                          <title>Andrrows&Care</title>
                                          <meta name="description" content="">
                                          <meta name="viewport" content="width=device-width, initial-scale=1">
                                          <link rel="apple-touch-icon" href="apple-touch-icon.png">

                                          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
                                          <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
                                          <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
                                          <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


                                          <!--For Plugins external css-->
                                          <link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}" />
                                          <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

                                          <!--Theme custom css -->
                                          <link rel="stylesheet" href="{{ asset('css/style-status.css') }}">

                                          <!--Theme Responsive css-->
                                          <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
                                          <link rel="stylesheet" href="{{asset('vendor/datatables/jquery.dataTables.min.css')}}">
                                          <link rel="stylesheet" href="{{asset('vendor/datatables/buttons.dataTables.min.css')}}">

                                          <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>


                                      </head>
                                      <body>
                                          <!--[if lt IE 8]>
                                              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                                          <![endif]-->
                                          <!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->
                                          <header id="home" class="navbar-fixed-top">
                                              <div class="header_top_menu clearfix">  
                                                  <div class="container">
                                                      <div class="row">   
                                                          <div class="col-md-10 col-md-offset-3 col-sm-12 text-right">
                                                              <div class="call_us_text">
                                                                  <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-user"></i><span>KELUAR</span></a>
                                                                  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                                                      {{ csrf_field() }}
                                                                  </form>
                                                                  <!-- <a href=""><i class="fa fa-phone"></i></a> -->
                                                              </div>
                                                          </div>

                                                          <div class="col-md-4 col-sm-12">
                                                          </div>

                                                      </div>          
                                                  </div>
                                              </div>

                                              <!-- End navbar-collapse-->

                                              <div class="main_menu_bg">
                                                  <div class="container"> 
                                                      <div class="row">
                                                          <nav class="navbar navbar-default">
                                                              <div class="container-fluid">
                                                                  <!-- Brand and toggle get grouped for better mobile display -->
                                                                  <div class="navbar-header">
                                                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                                          <span class="sr-only">Toggle navigation</span>
                                                                          <span class="icon-bar"></span>
                                                                          <span class="icon-bar"></span>
                                                                          <span class="icon-bar"></span>
                                                                      </button>
                                                                      <a class="navbar-brand our_logo" href="#"><img src="{{ asset('images/3.png') }}" alt="" /></a>
                                                                  </div>

                                                                  
                                                              </div><!-- /.container-fluid -->
                                                          </nav>
                                                      </div>
                                                  </div>
                                              </div>  
                                          </header> <!-- End Header Section -->

                                        
                                  <!--STATUS-->
                                          

                                          


                                          <div class="scrollup">
                                              <a href="#"><i class="fa fa-chevron-up"></i></a>
                                          </div>      

                                          <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
                                          <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
                                          <script src="{{ asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
                                          <script src="{{ asset('js/wow/wow.min.js') }}"></script>
                                          <script src="{{ asset('js/plugins.js') }}"></script>
                                          <script src="{{ asset('js/main.js') }}"></script>
                                          <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
                                          <script src="{{asset('vendor/datatables/dataTables.buttons.min.js')}}"></script>
                                          <script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
                                         
                                      </body>
                                  </html>
                                   </div>
                                </div>

                                <!-- <div class="tab-content" id="pills-tabContent">
                                  <div class="tab-pane fade" id="pills-pesan" role="tabpanel" aria-labelledby="pills-pesan-tab">
                                
                                  </div>
                                  <div class="tab-pane fade show active" id="pills-konfirmasi" role="tabpanel" aria-labelledby="pills-konfirmasi-tab"> <form role="form" id="pesan-form" action="{{url('kirim')}}" method="POST" name="form" enctype="multipart/form-data">


                                  </div>
                                    
                                        
                                    </div> -->
                                

                             
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection