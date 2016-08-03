<div class="page-content">
          <div class="header">
           <div class="row">
                 <div class="col-lg-9 ">
                    <h2>Hizmet ve Ürünler </h2> 
                 </div>
                 <div class="col-lg-3s ">
                    
                    <div style="float:right;" class="btn-group">
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>urunler/ekle'" class="btn btn-dark">Yeni Hizmet Ürün / Hizmet Ürün Ekle</button>
                        
                    </div>
                 </div>
              </div>            
          </div>
                                                    <?php if(isset($mesaj)){ ?>
                                                    <div class="alert alert-warning"><?php echo $mesaj["mesaj"];?></div>                                                    
                                                    <meta http-equiv='refresh' content='2;URL=<?php echo SITE_URL;?>urunler/liste'/>
                                                    <?php } ?>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                        <th>Adı</th>
                        <th>Alış Fiyatı</th>
                        <th>Satış Fiyatı Fiyatı</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($urunList as $key => $value){ ?> 
                           <tr>
                                <td><a href="<?php SITE_URL?>detay/<?=$value["id"]?>"> <?=$value["adi"]?></a> </td>   
                                <td><?=$value["alisfiyati"]?> </td> 
                                <td><?=$value["satisfiyati"]?> </td> 
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          