<div class="page-content">
          <div class="header">
            <h2><strong>Satışlar</strong> > Yeni Fatura</h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>satislar/yenifaturarun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-file-text-o fa-3x c-textPositive"></i></div>
                          <label class="col-sm-3 ">Fatura Açıklaması</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="adi" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-building-o"></i></div>
                          <label class="col-sm-3">Müşteri</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="cari_id" data-search="true">
    <?php foreach ($cari as $key => $value) { ?>
                                <option value="<?php echo $value["id"];?>"><?php echo $value["firmaunvani"];?></option>
    <?php } ?>                                                  
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"></div>
                          <label class="col-sm-3">Müşteri Bilgileri</label>
                          <div class="col-sm-8">
                            adres telefon il ilçe tc
                          </div>
                        </div>
                          <hr>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-calendar"></i></div>
                          <label class="col-sm-3">Düzenleme Tarihi</label>
                          <div class="col-sm-8">
                              <input type="text" name="tarih" class="b-datepicker form-control" data-lang="es" placeholder="Tarih Seçiniz...">                             
                          </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-bell"></i></div>
                          <label class="col-sm-3">Tahsil Edileceği Tarih</label>
                          <div class="col-sm-8">
                              <input type="text" name="tahsiltarih" class="b-datepicker form-control" data-lang="es" placeholder="Tarih Seçiniz...">                             
                          </div>
                        </div> 
                          <hr />
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <button style="float:right;" type="submit" class="btn btn-blue text-right">Kaydet</button>
                            
                        </div>                        
                    </form>
                  </div>
                    <div class="row">
                          <div class="col-lg-12 portlets">
                             <div class="panel">
               
                <div class="panel-content">
                  <div class="m-b-20">
                    <div class="btn-group">
                      <button id="table-edit_new" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> Yeni Satır Ekle</button>
                    </div>
                  </div>
                  <table class="table table-hover dataTable" id="table-editable">
                    <thead>
                      <tr>
                        <th>Hizmet / Ürün</th>
                        <th>Miktar</th>
                        <th>BR.Fiyat</th>
                        <th>Vergi</th>
                        <th>Toplam</th>
                        <th class="text-right">İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td>1.00</td>
                        <td>0.00</td>
                        <td>% 18</td>
                        <td>0.00</td>
                        <td class="text-right"><a class="edit btn btn-sm btn-default" href="javascript:;"><i class="icon-note"></i></a>  <a class="delete btn btn-sm btn-danger" href="javascript:;"><i class="icons-office-52"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                          </div>
                    </div>
                </div>
              </div>
            </div>
          </div>