<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta http-equiv="Content-Type" content="text/html; charset=x-mac-turkish" />
    <title>Point Görsel Muhasebe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo SITE_PUBLIC;?>assets/images/favicon.png" type="image/png">
    <?php 
    header('Content-Type: text/html; charset=UTF-8');
        mb_internal_encoding('UTF-8');
        mb_http_output('UTF-8');
        mb_http_input('UTF-8');
        mb_language('uni');
        mb_regex_encoding('UTF-8');
    ?>
    <link href="<?php echo SITE_PUBLIC;?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo SITE_PUBLIC;?>assets/css/theme.css" rel="stylesheet">
    <link href="<?php echo SITE_PUBLIC;?>assets/css/ui.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    
    <script src="<?php echo SITE_PUBLIC;?>assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <!-- BEGIN BODY -->
  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <a href="<?php echo SITE_URL;?>panel/anasayfa"></a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4>
                    <?php foreach ($giren as $key => $value) { ?>
                            <?php if($value["id"]==$kisi["userId"]){?>
                                    <?php echo $value["adi"]; ?>
                            <?php } ?>
                    <?php } ?>
                </h4>
                
              </div>
            </div>
          </div>
          <ul class="nav nav-sidebar">
              <?php $url=$_GET["url"];?>
            <li <?php if($url=="panel/anasayfa"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>panel/anasayfa"><i class="icon-home"></i><span data-translate="dashboard">Güncel Durum</span></a></li>
            <li <?php if($url=="satislar/liste" or $url=="satislar/yenifatura" or $url=="satislar/yeniproforma"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>satislar/liste"><i class="fa fa-sign-in fa-rotate-90"></i><span data-translate="dashboard">Satışlar</span></a></li>            
            <li <?php if($url=="giderler/liste"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>giderler/liste"><i class="fa fa-sign-out fa-rotate-270"></i><span data-translate="dashboard">Giderler</span></a></li>  
            <li <?php if($url=="musteriler/liste"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>musteriler/liste"><i class="fa fa-building-o"></i><span data-translate="dashboard">Müşteri ve Tedarikçi</span></a></li>  
            <li <?php if($url=="calisanlar/liste"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>calisanlar/liste"><i class="fa fa-user"></i><span data-translate="dashboard">Çalışanlar</span></a></li>  
            <li <?php if($url=="urunler/liste"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>urunler/liste"><i class="fa fa-tags"></i><span data-translate="dashboard">Hizmet ve Ürünler</span></a></li>  
            <li <?php if($url=="kasa/liste"){?>class=" nav-active active"<?php }else{}?>><a href="<?php echo SITE_URL;?>kasa/liste"><i class="fa fa-archive"></i><span data-translate="dashboard">Kasa ve Bankalar</span></a></li>  
            <li class="nav-parent">
              <a href="#"><i class="fa fa-bars"></i><span data-translate="builder">Raporlar</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
								<li>
									<a href="<?php echo SITE_URL;?>raporlar/satislar">
										<span class="title">Satışlar</span>
									</a>
								</li>
								<li>
									<a href="<?php echo SITE_URL;?>raporlar/giderler">
										<span class="title">Giderler</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/gelir-ve-gider-raporu">
										<span class="title">Gelir Gider</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/kasa-banka">
										<span class="title">Kasa Banka</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/nakit-akisi">
										<span class="title">Nakit Akışı</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/tahsilatlar">
										<span class="title">Tahsilatlar</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/odemeler">
										<span class="title">Ödemeler</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>raporlar/kdv">
										<span class="title">KDV</span>
									</a>
								</li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href="#"><i class="fa fa-fw fa-cog u-mr05"></i><span data-translate="builder">Ayarlar</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
								<li>
									<a href="<?php echo SITE_URL;?>ayarlar/firma">
										<span class="title">Firma Bilgileri</span>
									</a>
								</li>
								<li>
									<a href="<?php echo SITE_URL;?>ayarlar/kategori-etiket">
										<span class="title">Kategori ve Etiketler</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>kullanicilar/liste">
										<span class="title">Kullanıcılar</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>ayarlar/fatura-sablonlari">
										<span class="title">Fatura Şablonları</span>
									</a>
								</li>
                                                                <li>
									<a href="<?php echo SITE_URL;?>ayarlar/uygulamalar">
										<span class="title">Uygulamalar</span>
									</a>
								</li>
              </ul>
            </li>
            
          </ul>
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Ayarlar">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Tam Ekran">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Kilit Ekranı">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="<?php echo SITE_URL;?>admin/cikis" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Çıkış Yap">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
              <ul class="nav nav-icons">
                <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li>
                <li><a href="mailbox.html"><span class="octicon octicon-mail-read"></span></a></li>
                <li><a href="#"><span class="octicon octicon-flame"></span></a></li>
                <li><a href="builder-page.html"><span class="octicon octicon-rocket"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="language-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-globe"></i>
                <span data-translate="Diller">Diller</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#" data-lang="en"><img src="<?php echo SITE_PUBLIC;?>assets/images/flags/usa.png" alt="flag-english"> <span>English</span></a>
                  </li>
                  <li>
                    <a href="#" data-lang="es"><img src="<?php echo SITE_PUBLIC;?>assets/images/flags/spanish.png" alt="flag-english"> <span>Español</span></a>
                  </li>
                  <li>
                    <a href="#" data-lang="fr"><img src="<?php echo SITE_PUBLIC;?>assets/images/flags/french.png" alt="flag-english"> <span>Français</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              <!-- BEGIN NOTIFICATION DROPDOWN -->
              <li class="dropdown" id="notifications-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-bell"></i>
                <span class="badge badge-danger badge-header">6</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">12 Pending Notifications</p>
                  </li>
                  <li>
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                      <li>
                        <a href="#">
                        <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                        Steve have rated your photo
                        <span class="dropdown-time">Just now</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                        John added you to his favs
                        <span class="dropdown-time">15 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-file-text p-r-10 f-18"></i>
                        New document available
                        <span class="dropdown-time">22 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">40 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                        Meeting in 1 hour
                        <span class="dropdown-time">1 hour</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18"></i>
                        Server 5 overloaded
                        <span class="dropdown-time">2 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                        Bill comment your post
                        <span class="dropdown-time">3 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">2 days</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="#" class="pull-left">See all notifications</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END NOTIFICATION DROPDOWN -->
              <!-- BEGIN MESSAGES DROPDOWN -->
              <li class="dropdown" id="messages-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-paper-plane"></i>
                <span class="badge badge-primary badge-header">
                8
                </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">
                      You have 8 Messages
                    </p>
                  </li>
                  <li class="dropdown-body">
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?php echo SITE_PUBLIC;?>assets/images/avatars/avatar3.png" alt="avatar 3">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Alexa Johnson</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?php echo SITE_PUBLIC;?>assets/images/avatars/avatar4.png" alt="avatar 4">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>John Smith</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?php echo SITE_PUBLIC;?>assets/images/avatars/avatar5.png" alt="avatar 5">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Bobby Brown</strong>  
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?php echo SITE_PUBLIC;?>assets/images/avatars/avatar6.png" alt="avatar 6">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>James Miller</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="mailbox.html" class="pull-left">See all messages</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END MESSAGES DROPDOWN -->
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="fa fa-2x fa-user"></i>
                <span class="username">
                    <?php foreach ($giren as $key => $value) { ?>
                            <?php if($value["id"]==$kisi["userId"]){?>
                                    <?php echo $value["adi"]; ?>
                            <?php } ?>
                    <?php } ?>
                </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo SITE_URL;?>admin/profil"><i class="icon-user"></i><span>Profilim</span></a>
                  </li>
                  <li>
                    <a href="<?php echo SITE_URL;?>admin/takvim"><i class="icon-calendar"></i><span>Takvim</span></a>
                  </li>
                  <li>
                    <a href="<?php echo SITE_URL;?>admin/ayarlar"><i class="icon-settings"></i><span>Ayarlar</span></a>
                  </li>
                  <li>
                    <a href="<?php echo SITE_URL;?>admin/cikis"><i class="icon-logout"></i><span>Çıkış Yap</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              <!-- CHAT BAR ICON -->
              <li id="quickview-toggle"><a href="#"><i class="icon-bubbles"></i></a></li>
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->