        <div class="page-content">
          <div class="header">
            <h2><strong>Çalışanlar</strong> > Çalışan</h2>            
          </div>
            <div class="row">
                <div class="col-lg-9 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="fa fa-building-o fa-3x "></i> 
                                <strong><?php echo $this->calisan[0]['adi']; ?></strong> 
                                <button onclick="window.location.href='<?php echo SITE_URL;?>calisanlar/duzenle/<?php echo $this->calisan[0]['id']; ?>'" style="float:right;" type="button" class="btn btn-default text-right">Düzenle</button>
                  </h3>
                    
                  <hr>
                </div>
                <div class="panel-content">
                  <div class="row">
                      <div class="col-md-1">
                          <p><i class="fa fa-user "></i></p>
                            <p><i class="fa fa-envelope-o "></i></p>
                            <p><i class="fa fa-tag"></i></p>
                      </div>
                    <div class="col-md-4">
                        <p><strong>Adı Soyadı</strong></p>
                        <p><strong>E-posta</strong></p>
                        <p><strong>Kategori</strong></p>
                    </div>
                    <div class="col-md-4">
                        <p> <?php echo $this->calisan[0]['adi']; ?></p>                       
                        <p> <?php echo $this->calisan[0]['email']; ?></p>
                        <p> <?php echo $this->calisan[0]['kategori']; ?></p>
                    </div>
                    <div class="col-md-3">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
                <div class="col-md-3 ">
                    <div class="panel panel-default">								
			<div class="panel-body">
                            <div class="row">
                                <div class="col-md-5 ">
                                    <div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
											<i class="fa fa-user"></i>
											Diğer <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													<i class="fa fa-user"></i>
													Yeni Maaş Prim Oluştur
												</a>
											</li>
                                                                                        <li>
												<a href="#">
													<i class="fa fa-archive"></i>
													Çalışanı Arşivle
												</a>
											</li>
                                                                                        <li>
												<a href="<?php echo SITE_URL;?>calisanlar/sil/<?php echo $this->calisan[0]['id']; ?>">
													<i class="fa fa-trash-o"></i>
													Sil
												</a>
											</li>
										</ul>
									</div>
                                </div>
                                <div class="col-md-7 ">
                                    <a class="btn btn-dark btn-embossed" href="#">
                                        <i class="fa fa-plus"></i>Ödeme Ekle</a>
                                       
                                </div>
                            </div>
                                                                    
                                                                    <hr>
                                                                    <h4><strong>Bakiye : 345</strong></h4>
								</div>
		    </div>
                </div>
            </div>                 