<div class="page-content">
          <div class="header">
            <h2><strong>Ürünler ve Hizmetle</strong> > Düzenle </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
    <?php foreach ($urunler as $key => $value) { ?>	
                    <form action="<?php echo SITE_URL;?>urunler/duzenlerun/<?=$value["id"]?>" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-puzzle-piece fa-3x"></i></div>
                          <label class="col-sm-3 ">Adı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="adi" type="text" value="<?=$value["adi"]?>" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-barcode "></i></div>
                          <label class="col-sm-3">Kodu</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kodu" type="text" value="<?=$value["kodu"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tag "></i></div>
                          <label class="col-sm-3">Kategori</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kategori" type="text" value="<?=$value["kategori"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tachometer"></i></div>
                          <label class="col-sm-3">Alış Satış Birimi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="asbirimi" type="text" value="<?=$value["asbirimi"]?>" placeholder="">
                                <div class="fieldSet-help">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <small>
                                  <i>Birim değişikliği geriye dönük olarak faturalara yansır.</i>
                                </small>
                              </div>
                          </div>
                        </div>                        
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-minus-circle u-lineHeight40"></i></div>
                            <label class="col-sm-3">Alış Fiyatı <br />(VERGİLER HARİÇ)</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="alisfiyati" type="text" value="<?=$value["alisfiyati"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-plus-circle u-lineHeight40"></i></div>
                            <label class="col-sm-3">Satış Fiyatı <br />(VERGİLER HARİÇ)</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="satisfiyati" type="text" value="<?=$value["satisfiyati"]?>" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-gavel"></i></div>
                          <label class="col-sm-3">Kdv</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kdv" type="text" value="<?=$value["kdv"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                          <label class="col-sm-3">Öiv</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="oiv" type="text" value="<?=$value["oiv"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                          <label class="col-sm-3">Satış Ötv</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="satisotv" type="text" value="<?=$value["satisotv"]?>" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-gavel"></i></div>
                          <label class="col-sm-3">Alış Ötv</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="alisotv" type="text" value="<?=$value["alisotv"]?>" placeholder="">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <div style="float:right;" class="btn-group">
                                 <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>urunler/liste'" class="btn btn-default btn-transparent">Vazgeç</button> 
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