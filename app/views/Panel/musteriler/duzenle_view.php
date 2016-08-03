<div class="page-content">
          <div class="header">
            <h2><strong>Müşteri ve Tedarikçiler</strong> > Düzenle </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
    <?php foreach ($musteriler as $key => $value) { ?>	
                    <form action="<?php echo SITE_URL;?>musteriler/duzenlerun/<?=$value["id"]?>" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-building-o fa-3x"></i></div>
                          <label class="col-sm-3 ">Firma Ünvanı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="firmaunvani" type="text" placeholder="" value="<?=$value["firmaunvani"]?>">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-info-circle "></i></div>
                          <label class="col-sm-3">Kısa İsmi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kisaismi" type="text" placeholder="" value="<?=$value["kisaismi"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tag "></i></div>
                          <label class="col-sm-3">Kategori</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kategori" type="text" placeholder="" value="<?=$value["kategori"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-envelope-o "></i></div>
                          <label class="col-sm-3">E-posta Adresi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="email" type="text" placeholder="" value="<?=$value["email"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-phone "></i></div>
                          <label class="col-sm-3">Telefon Numarası</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="telefon" type="text" placeholder="" value="<?=$value["telefon"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-fax "></i></div>
                          <label class="col-sm-3">Faks Numarası</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="fax" type="text" placeholder="" value="<?=$value["fax"]?>">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-map-marker "></i></div>
                          <label class="col-sm-3">Açık Adresi</label>
                          <div class="col-sm-8">
                            <textarea name="acikadres" rows="5" class="form-control" placeholder="" minlength="20" required="" aria-required="true"><?=$value["acikadres"]?></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-info-circle "></i></div>
                          <label class="col-sm-3">İlçe, İl</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="il" type="text" placeholder="" value="<?=$value["il"]?>">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group" id="content">
                            <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                          <label class="col-sm-3">Türü</label>
                          <div class="col-sm-4">
    <label><input type="radio" name="turu" data-content="tuzel" data-radio="iradio_flat" value="1" <?php if($value["turu"]=="1"){?>checked<?php }else{}?>> Tüzel Kişi</label>
                          </div>
                          <div class="col-sm-4">  
                             <label><input type="radio" name="turu" data-content="gercek" data-radio="iradio_flat" value="2" <?php if($value["turu"]=="2"){?>checked<?php }else{}?>> Gerçek Kişi</label>
                          
                          </div>
                        </div>
                        <div id="preview">
                                <div id="tuzel-preview" class="preview <?php if($value["turu"]=="1"){?>active<?php }else{?>dis-none<?php }?>">
                                    <div class="form-group">
                                        <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                                      <label class="col-sm-3">VKN / TCKN</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="vergino" type="text" placeholder="" value="<?=$value["vergino"]?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                                      <label class="col-sm-3">Vergi Dairesi</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="vergidairesi" type="text" placeholder="" value="<?=$value["vergidairesi"]?>">
                                      </div>
                                    </div>
                                </div>
                                <div id="gercek-preview" class="preview <?php if($value["turu"]=="2"){?>active<?php }else{?>dis-none<?php }?>">
                                  <div class="form-group">
                                        <div class="col-md-1"><i class="fa  fa-male"></i></div>
                                      <label class="col-sm-3">Tc Kimlik No</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="tckimlik" type="text" placeholder="" value="<?=$value["tckimlik"]?>">
                                      </div>
                                    </div>
                                </div>
                          </div>
                        <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Adı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkiliadi" type="text" placeholder="" value="<?=$value["yetkiliadi"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Eposta</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkiliemail" type="text" placeholder="" value="<?=$value["yetkiliemail"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Telefon</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkilitelefon" type="text" placeholder="" value="<?=$value["yetkilitelefon"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Not</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkilinot" type="text" placeholder="" value="<?=$value["yetkilinot"]?>">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <div style="float:right;" class="btn-group">
                                 <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>musteriler/liste'" class="btn btn-default btn-transparent">Vazgeç</button> 
                                 <button type="submit" class="btn btn-dark btn-embossed">Kaydet</button>                        
                             </div> 
                        </div>                        
                    </form>
    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>