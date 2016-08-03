<div class="page-content">
          <div class="header">
            <h2><strong>Giderler</strong> > Yeni Banka Gideri</h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>giderler/yenibankarun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-file-text-o fa-3x c-textPositive"></i></div>
                          <label class="col-sm-3 "> Açıklama</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="aciklama" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-calendar"></i></div>
                          <label class="col-sm-3">Düzenleme Tarihi</label>
                          <div class="col-sm-4">
                            <input type="date" name="duzenlemetarihi" class="form-control" placeholder="Tarih Seçiniz...">
                             
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-plus-circle u-mt025"></i></div>
                          <label class="col-sm-3">Toplam Tutar</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="toplamtutar" type="text" placeholder="">
                          </div>
                        </div>                        
                          <hr>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-question-circle"></i></div>
                          <label class="col-sm-3">Ödeme Durumu</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="odemedurumu" data-search="true">
                                <option value="0">Ödenecek</option>
                                <option value="1">Ödendi</option>                                                     
                            </select>
                          </div>
                        </div>
                          
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-bell"></i></div>
                          <label class="col-sm-3">Ödeneceği Tarih</label>
                          <div class="col-sm-8">
                             <input type="date" name="odemetarihi" class="form-control" placeholder="Tarih Seçiniz...">
                              
                          </div>
                        </div>
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <div style="float:right;" class="btn-group">
                                 <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>giderler/liste'" class="btn btn-default btn-transparent">Vazgeç</button> 
                                 <button type="submit" class="btn btn-dark btn-embossed">Kaydet</button>                        
                           </div>
                        </div>                        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>