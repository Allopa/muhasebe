<div class="page-content">
          <div class="header">
            <h2><strong>Çalışanlar</strong> > Yeni </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
                    <form action="<?php echo SITE_URL;?>calisanlar/eklerun" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-user fa-3x "></i></div>
                          <label class="col-sm-3 ">Adı Soyadı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="adi" type="text" placeholder="">
                          </div>
                        </div>
                          <hr />
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-envelope-o "></i></div>
                          <label class="col-sm-3">E-posta Adresi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="email" type="text" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tag "></i></div>
                          <label class="col-sm-3">Kategori</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kategori" type="text" placeholder="">
                          </div>
                        </div>                        
                          <hr />
                       
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <div style="float:right;" class="btn-group">
                                 <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>calisanlar/liste'" class="btn btn-default btn-transparent">Vazgeç</button> 
                                 <button type="submit" class="btn btn-dark btn-embossed">Kaydet</button>                        
                             </div>                            
                        </div>                        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>