<div class="page-content">
          <div class="header">
            <h2><strong>Çalışanlar</strong> > Düzenle </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
    <?php foreach ($calisanlar as $key => $value) { ?>	
                    <form action="<?php echo SITE_URL;?>calisanlar/duzenlerun/<?=$value["id"]?>" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-user fa-3x"></i></div>
                          <label class="col-sm-3 ">Adı Soyadı</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="adi" type="text" placeholder="" value="<?=$value["adi"]?>">
                          </div>
                        </div>
                          <hr />
                         <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-envelope-o "></i></div>
                          <label class="col-sm-3">E-posta Adresi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="email" type="text" placeholder="" value="<?=$value["email"]?>">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-tag "></i></div>
                          <label class="col-sm-3">Kategori</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="kategori" type="text" placeholder="" value="<?=$value["kategori"]?>">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">                            
                            <button style="float:right;" type="submit" class="btn btn-blue text-right">Kaydet</button>
                            
                        </div>                        
                    </form>
    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>