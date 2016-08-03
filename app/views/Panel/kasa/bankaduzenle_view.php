<div class="page-content">
          <div class="header">
            <h2><strong>Banka</strong> > Düzenle </h2>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                
                <div class="panel-content">
                  <div class="row">
    <?php foreach ($banka as $key => $value) { ?>	
                    <form action="<?php echo SITE_URL;?>kasa/bankaduzenlerun/<?=$value["id"]?>" method="post" class="form-horizontal">                      
                      <div class="col-md-6">                    
                        <div class="form-group">
                            <div class="col-md-1"><i class="fa fa-money fa-3x "></i></div>
                          <label class="col-sm-3 ">Hesap İsmi</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="hesapismi" type="text" placeholder="" value="<?=$value["hesapismi"]?>">
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
    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>