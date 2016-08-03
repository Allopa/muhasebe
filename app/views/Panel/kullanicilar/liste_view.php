<div class="page-content">
          <div class="header">
           <div class="row">
                 <div class="col-md-9 ">
                    <h2>Çalışanlar </h2> 
                 </div>
                 <div class="col-md-3">
                    
                    <div style="float:right;" class="btn-group">
                        <button  type="button" onclick="window.location.href='<?php echo SITE_URL;?>kullanicilar/ekle'" class="btn btn-dark">Kullanıcı Ekle</button>
                        
                    </div>
                 </div>
              </div>            
          </div>
                                                    <?php if(isset($mesaj)){ ?>
                                                    <div class="alert alert-warning"><?php echo $mesaj["mesaj"];?></div>                                                    
                                                    <meta http-equiv='refresh' content='2;URL=<?php echo SITE_URL;?>kullanicilar/liste'/>
                                                    <?php } ?>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                        <th>Adı Soyadı</th>
                        <th>Eposta</th>
                        <th>Durum</th>
                        <th>Çalışan Kaydı</th>
                        <th>Yetki</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($kullaniciList as $key => $value){ ?> 
                           <tr>
                                <td><a href="<?php SITE_URL?>detay/<?=$value["id"]?>"> <?=$value["adi"]?></a> </td> 
                                <td class="hidden-480"><?=$value["eposta"]?></td>
                                <td class="hidden-480">aktif</td>
                                <td class="hidden-480">yok</td>
                                <td class="hidden-480"><?php if($value["yetki"]==1){ echo "Admin"; }else{ echo "Üye"; } ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          