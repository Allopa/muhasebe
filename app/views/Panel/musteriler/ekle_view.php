<div class="page-content">
          <div class="header">
            <h2><strong>Müşteri ve Tedarikçiler</strong> > Yeni </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>musteriler/eklerun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-building-o fa-3x"></i></div>
                          <label class="col-sm-3 ">Firma Ünvanı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="firmaunvani" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-info-circle "></i></div>
                          <label class="col-sm-3">Kısa İsmi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kisaismi" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tag "></i></div>
                          <label class="col-sm-3">Kategori</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kategori" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-envelope-o "></i></div>
                          <label class="col-sm-3">E-posta Adresi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="email" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-phone "></i></div>
                          <label class="col-sm-3">Telefon Numarası</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="telefon" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-fax "></i></div>
                          <label class="col-sm-3">Faks Numarası</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="fax" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-map-marker "></i></div>
                          <label class="col-sm-3">Açık Adresi</label>
                          <div class="col-sm-8">
                            <textarea name="acikadres" rows="5" class="form-control" placeholder="" minlength="15" required="" aria-required="true"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-info-circle "></i></div>
                          <label class="col-sm-3">İlçe, İl</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="il" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group" id="content">
                            <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                          <label class="col-sm-3">Türü</label>
                          <div class="col-sm-4">
                            <label><input type="radio" name="turu" data-content="tuzel" data-radio="iradio_flat" value="1" checked> Tüzel Kişi</label>
                          </div>
                          <div class="col-sm-4">  
                             <label><input type="radio" name="turu" data-content="gercek" value="2" data-radio="iradio_flat" > Gerçek Kişi</label>
                          
                          </div>
                        </div>
                        <div id="preview">
                                <div id="tuzel-preview" class="preview active">
                                    <div class="form-group">
                                        <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                                      <label class="col-sm-3">VKN / TCKN</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="vergino" type="text" placeholder="">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"><i class="fa fa-gavel "></i></div>
                                      <label class="col-sm-3">Vergi Dairesi</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="vergidairesi" type="text" placeholder="">
                                      </div>
                                    </div>
                                </div>
                                <div id="gercek-preview" class="preview dis-none">
                                  <div class="form-group">
                                        <div class="col-md-1"><i class="fa  fa-male"></i></div>
                                      <label class="col-sm-3">Tc Kimlik No</label>
                                      <div class="col-sm-8">
                                        <input class="form-control" name="tckimlik" type="text" placeholder="">
                                      </div>
                                    </div>
                                </div>
                          </div>
                        
                        <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Adı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkiliadi" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Eposta</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkiliemail" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Telefon</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkilitelefon" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-history "></i></div>
                          <label class="col-sm-3">Yetkili Not</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="yetkilinot" type="text" placeholder="">
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
                  </div>
                    
                </div>
              </div>
            </div>
          </div>