        <div class="page-content">
          <div class="header">
            <h2><strong>Müşteri ve Tedarikçiler</strong> > Müşteri / Tedarikçi</h2>            
          </div>
            <div class="row">
                <div class="col-lg-9 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="fa fa-building-o fa-3x "></i> 
                                <strong><?php echo $this->cari[0]['firmaunvani']; ?></strong> 
                                <button onclick="window.location.href='<?php echo SITE_URL;?>musteriler/duzenle/<?php echo $this->cari[0]['id']; ?>'" style="float:right;" type="button" class="btn btn-default text-right">Düzenle</button>
                  </h3>
                    
                </div>
                <div class="panel-group panel-accordion" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>
                              <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Tüm Bilgileri Göster
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <p><i class="fa fa-building-o "></i></p>
                                            <p><i class="fa fa-info-circle "></i></p>
                                              <p><i class="fa fa-envelope-o "></i></p>
                                              <p><i class="fa fa-phone "></i></p>
                                              <p><i class="fa fa-fax "></i></p>
                                              <p><i class="fa fa-user "></i></p>
                                              <p><i class="fa fa-gavel "></i></p>
                                              <p><i class="fa fa-map-marker "></i></p>
                                        </div>
                                      <div class="col-md-4">
                                          <p><strong>Firma Ünvanı</strong></p>
                                          <p><strong>Kısa İsim</strong></p>
                                          <p><strong>E-posta</strong></p>
                                          <p><strong>Telefon Numarası</strong></p>
                                          <p><strong>Faks Numarası</strong></p>
                                          <p><strong>Tc Kimlik</strong></p>
                                          <p><strong>Vergi Bilgileri</strong></p>
                                          <p><strong>Açık Adresi</strong></p>
                                      </div>
                                      <div class="col-md-4">
                                          <p><?php echo $this->cari[0]['firmaunvani']; ?></p>
                                          <p><?php echo $this->cari[0]['kisaismi']; ?></p>
                                          <p><?php echo $this->cari[0]['email']; ?></p>
                                          <p><?php echo $this->cari[0]['telefon']; ?></p>
                                          <p><?php echo $this->cari[0]['fax']; ?></p>
                                          <p><?php echo $this->cari[0]['tckimlik']; ?></p>
                                          <p>V.D <?php echo $this->cari[0]['vergidairesi']; ?> -- V.No <?php echo $this->cari[0]['vergino']; ?></p>
                                          <p><?php echo $this->cari[0]['acikadres']; ?></p>
                                      </div>
                                      <div class="col-md-3">

                                      </div>
                                    </div>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Açık Faturaları Göster
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th>Açık Faturalar</th>
                                        <th>Ödeme Tarihi</th>
                                        <th>Meblağ</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($giderList as $key => $value){ ?> 
                                           <tr>
                                               <td class="hidden-100"> 
                                                    <i class="fa fa-file-text-o "></i>
                                               </td>
                                                <td><a href="<?php SITE_URL?>giderler/detay/<?=$value["id"]?>"> <?=$value["aciklama"]?></a> </td>    
                                                <td class="hidden-480"> 
                                                    <?=$value["adi"]?> 
                                                </td>  
                                                <td class="hidden-480"> <?=$value["tarih"]?>  </td> 
                                                <td class="hidden-480">
                                                        <?=$value["toplamtutar"] ?>
                                                    ₺ 
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              İşlem Geçmişini Göster
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th>İşlem Türü</th>
                                        <th>Açıklama</th>
                                        <th>İşlem Tarihi</th>
                                        <th>Meblağ</th>
                                        <th>Bakiye</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($giderList as $key => $value){ ?> 
                                           <tr>
                                               <td class="hidden-100"> 
                                                    <i class="fa fa-file-text-o "></i>
                                               </td>
                                                <td><a href="<?php SITE_URL?>giderler/detay/<?=$value["id"]?>"> <?=$value["aciklama"]?></a> </td>    
                                                <td class="hidden-480"> 
                                                    <?=$value["adi"]?> 
                                                </td>  
                                                <td class="hidden-480"> <?=$value["tarih"]?>  </td> 
                                                <td class="hidden-480">
                                                        <?=$value["toplamtutar"] ?>
                                                    ₺ 
                                                </td>
                                                <td class="hidden-480">
                                                        <?=$value["toplamtutar"] ?>
                                                    ₺ 
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
												<a href="<?php echo SITE_URL;?>musteriler/sil/<?php echo $this->cari[0]['id']; ?>">
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
                                                                    <h4><strong>Gecikmiş Ödeme : 345</strong></h4>
                                                                    <hr>
                                                                    <h4><strong>Toplam Ödeme : 345</strong></h4>
								</div>
		    </div>
                </div>
            </div>   
            