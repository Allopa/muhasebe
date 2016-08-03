<div class="page-content">
          <div class="header">
           <div class="row">
                 <div class="col-lg-9 ">
                    <h2>Müşteri ve Tedarikçiler </h2> 
                 </div>
                 <div class="col-lg-3 ">
                    
                    <div style="float:right;" class="btn-group">
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>musteriler/ekle'" class="btn btn-dark">Yeni Müşteri / Tedarikçi Ekle</button>                        
                    </div>
                 </div>
              </div>            
          </div>
                                                    <?php if(isset($mesaj)){ ?>
                                                    <div class="alert alert-warning"><?php echo $mesaj["mesaj"];?></div>                                                    
                                                    <meta http-equiv='refresh' content='2;URL=<?php echo SITE_URL;?>musteriler/liste'/>
                                                    <?php } ?>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                          <th></th>
                        <th>Ünvanı</th>
                        <th>Bakiye</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($musteriList as $key => $value){ ?> 
                           <tr>
                               <td style="width:60px;"> 
                                    <i class="fa fa-2x fa-building-o "></i>
                               </td>
                                <td><a href="<?php echo SITE_URL?>musteriler/detay/<?=$value["id"]?>"> <?=$value["firmaunvani"]?></a> </td>    
                                <td class="hidden-480"> 
                                    <?php foreach ($odemetoplam as $key4 => $value4){ ?> 
                                        <?php if($value["id"]==$value4["satis_id"]){?>
                                            <?php echo $value["borc"] - $value4["todeme"]  ?>    
                                                                                                         
                                        <?php } ?> 
                                    <?php }?>  ₺
                                </td> 
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          