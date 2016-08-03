        <div class="page-content">
          <div class="header">
            <h2><strong>Satıslar</strong> > Fatura</h2>            
          </div>
          <div class="row invoice-page">
            <div class="col-md-12 p-t-0">             
              <div class="row">
                <div class="col-md-9">
                    <hr>
                    <strong><?php echo $this->fatura[0]['adi']; ?></strong>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            Kategori
                        </div>
                        <div class="col-md-6">
                            etiketleri
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <strong><?php echo $this->cari[0]['firmaunvani']; ?></strong>
                            <br>
                            <?php echo $this->cari[0]['acikadres']; ?>
                            <br>
                            <?php echo $this->cari[0]['vergidairesi']; ?> 
                            V.D. <?php echo $this->cari[0]['vergino']; ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->cari[0]['tarih']; ?>
                        </div>
                    </div>
                    
                        <hr>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="unseen text-center">Hizmet / Ürün</th>  
                        <th class="text-left">Miktar</th>
                        <th style="width:145px" class="text-right">BR. Fiyat</th>
                        <th style="width:145px" class="text-right">Vergi</th>
                        <th style="width:95px" class="text-right">Toplam</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($satisDetay as $key => $value) { ?>	
			<tr class="item-row">
                            <td> 
                                <?php foreach ($urun as $key3 => $value3){ ?> 
                                    <?php if($value3["id"]==$value["urun_id"]){?>
                                <div class="text-primary">
                                       <p><strong> <?=$value3["adi"]?></strong></p>
                                </div>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                            <td class="delete-wpr"> <?=$value["adet"]?> </td>
			    <td class="text-right cost"> <?=$value["birim_fiyat"]?> TL </td>
			    <td class="text-right price"> <?=$value["birim_fiyat"]?></td>
                            <td class="text-right price"> <?php echo $value["adet"] * $value["birim_fiyat"] ?> TL </td> 
			</tr>
                    <?php } ?>
                      <tr>
                        <td colspan="2" rowspan="4"></td>
                        <td class="text-right"><strong>Ara Toplam</strong></td>
                        <td class="text-right" id="subtotal">$464.00</td>
                      </tr>
                      <tr>
                        <td class="text-right no-border"><strong>Toplam Öiv</strong></td>
                        <td class="text-right">$30.00
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right no-border"><strong>Toplam KDV</strong></td>
                        <td class="text-right">$0.00</td>
                      </tr>
                      <tr>
                        <td class="text-right no-border">
                          <div><strong>Genel Toplam</strong></div>
                        </td>
                        <td class="text-right" id="total">$494.00</td>
                      </tr>
                      <tr>
                        <td colspan="2" rowspan="4"></td>
                        <td class="text-right"><strong>Kalan</strong></td>
                        <td class="text-right" id="subtotal">$464.00</td>
                      </tr>
                      
                    </tbody>
                  </table>                  
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
													<i class="fa fa-copy"></i>
													Kopyasını Oluştur
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-history"></i>
													Otomatik Tekrarlar
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-reply"></i>
													İade Oluştur
												</a>
											</li>
                                                                                        <li>
												<a href="#">
													<i class="fa fa-ban"></i>
													İptal Et
												</a>
											</li>
                                                                                        <li>
												<a href="#">
													<i class="fa fa-exchange"></i>
													Mahsuplaştır
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													<i class="clip-history"></i>
													Faturayı Arşivle
												</a>
											</li>
                                                                                        <li>
												<a href="#">
													<i class="fa fa-trash-o"></i>
													Faturayı Sil
												</a>
											</li>
										</ul>
									</div>
                                </div>
                                <div class="col-md-7 ">
                                    <a class="btn btn-dark btn-embossed" href="#">
                                        <i class="fa fa-plus"></i>Tahsilat Ekle</a>
                                </div>
                            </div>
                                                                    
                                                                    <hr>
                                                                    <h4><strong>Kalan : 345</strong></h4>
                                                                    <hr>
									<div class="panel-group accordion-custom accordion-teal" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<i class="fa fa-bell"></i>
													Tahsilat 8 gün Gecikti
												</a>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
													VHS.
												</div>
											</div>
										</div>
									</div>
                                                                    <hr>
                                                                    <a onclick="javascript:window.print();" class="accordion-toggle collapsed hidden-print"  data-toggle="collapse" >
													<i class="fa fa-print"></i>
													Faturayı Yazdır
												</a>
                                                                    <hr>
                                                                   
                                                                    <a href="">
									Eposta ile Paylaş <i class="fa fa-envelope"></i>
                                                                    </a>
                                                                    
								</div>
		    </div>
                </div>
              </div>
            </div>
          </div>          