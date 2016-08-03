<div class="page-content">
          <div class="header">
            <h2><strong>Banka Ekle</strong> </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>kasa/bankaeklerun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-money fa-3x "></i></div>
                          <label class="col-sm-3 ">Hesap İsmi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="hesapismi" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-money"></i></div>
                          <label class="col-sm-3">Döviz Cinsi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="dovizcinsi" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-fast-backward"></i></div>
                          <label class="col-sm-3">Açılış Bakiyesi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="acilisbakiyesi" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-calendar"></i></div>
                          <label class="col-sm-3">Açılış Bakiyesi Tarihi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="abtarihi" type="text" placeholder="">
                                <div class="fieldSet-help ">
      <i class="fa fa-info-circle"></i> <small><i>Muhasebe içerisinde bu tarihe ve öncesine gireceğiniz işlemler bu hesabın bakiyesini etkilemeyecektir.</i></small>
    </div>
                          </div>
                        </div>
                          <hr>
                          <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-institution"></i></div>
                          <label class="col-sm-3">Banka İsmi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="bankaismi" type="text" placeholder="">
                          </div>
                        </div>
                          <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-map-marker"></i></div>
                          <label class="col-sm-3">Banka Şubesi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="bankasubesi" type="text" placeholder="">
                          </div>
                        </div>
                          <div class="form-group">
                            <div class="col-md-1">#</div>
                          <label class="col-sm-3">Hesap Numarası</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="hesapnumarasi" type="text" placeholder="">
                          </div>
                        </div>
                          <div class="form-group">
                            <div class="col-md-1">#</div>
                          <label class="col-sm-3">IBAN</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="iban" type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <div style="float:right;" class="btn-group">
                                 <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>kasa/liste'" class="btn btn-default btn-transparent">Vazgeç</button> 
                                 <button type="submit" class="btn btn-dark btn-embossed">Kaydet</button>                        
                           </div>
                        </div>                        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>