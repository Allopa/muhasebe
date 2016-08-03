        <div class="page-content">
          <div class="header">
            <h2><strong>Kasa ve Bankalar</strong> > Kasa / Banka</h2>            
          </div>
            <div class="row">
                <div class="col-lg-9 portlets">
              <div class="panel">
                <div class="panel-header">
                    
                  <h3><?php if($this->kasa[0]['kasa_id']==1){?><i class="fa fa-money fa-3x"></i> <?php }else{?><i class="fa fa-institution fa-3x "></i><?php } ?>
                                <strong><?php echo $this->kasa[0]['hesapismi']; ?></strong> 
                                <button onclick="window.location.href='<?php echo SITE_URL;?>kasa/<?php if($this->kasa[0]['kasa_id']==1){?>kasaduzenle<?php }else{?>bankaduzenle<?php } ?>/<?php echo $this->kasa[0]['id']; ?>'" style="float:right;" type="button" class="btn btn-default text-right">Düzenle</button>
                  </h3>
                    
                  <hr>
                </div>
                <div class="panel-content">
                  <div class="row">
                      <div class="col-md-1">
                          <p><i class="fa fa-info-circle "></i></p>
                      </div>
                    <div class="col-md-4">
                        <p> <?php echo $this->kasa[0]['dovizcinsi']; ?> / <?php if($this->kasa[0]['kasa_id']==1){echo "Kasa Hesabı";}else{echo "Banka Hesabı";} ?></p>
                   
                    </div>
                    <div class="col-md-4">
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
													<i class="fa fa-file-text-o"></i>
													Satış Faturası Oluştur
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-file-text-o"></i>
													Alış Fiş / Faturası Oluştur
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													<i class="fa fa-sign-in fa-rotate-90"></i>
													Tahsilat Ekle
												</a>
											</li>
                                                                                        <li>
												<a href="#">
													<i class="fa fa-archive"></i>
													Arşivle
												</a>
											</li>
                                                                                        <li>
												<a href="<?php echo SITE_URL;?>kasa/sil/<?php echo $this->kasa[0]['id']; ?>">
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