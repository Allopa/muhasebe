<div class="page-content">
          <div class="header">
            <h2><strong>Giderler</strong> > Hızlı Fiş / Fatura</h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>giderler/hizlifisfaturarun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-file-text-o fa-3x c-textPositive"></i></div>
                          <label class="col-sm-3 "> Açıklaması</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="aciklama" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-calendar"></i></div>
                          <label class="col-sm-3">Fiş Fatura Tarihi</label>
                          <div class="col-sm-8">
                              <input type="text" name="tarih" class="b-datepicker form-control" data-lang="es" placeholder="Tarih Seçiniz...">                             
                          </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-plus-circle u-mt025"></i></div>
                          <label class="col-sm-3">Toplam Tutar (Vergiler Dahil)</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="toplamtutar" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-gavel"></i></div>
                          <label class="col-sm-3">Kdv</label>
                          <div class="col-sm-8">
                             <select name="kdv" class="form-control form-white" data-style="white" data-placeholder="Kdv...">
                                <option value="18">%18</option>
                                <option value="8">%8</option>
                                <option value="1">%1</option>
                                <option value="0">%0</option>
                            </select>
                          </div>
                        </div>
                          <hr>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-calendar"></i></div>
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
                            <input type="text" name="odemetarihi" class="b-datepicker form-control" data-lang="es" placeholder="Tarih Seçiniz..."> 
                              
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-building-o"></i></div>
                          <label class="col-sm-3">Tedarikçi</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="tedarikci" data-search="true">
                            <option value="1">United States</option>                         
                            </select>
                          </div>
                        </div>
                          <hr>
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