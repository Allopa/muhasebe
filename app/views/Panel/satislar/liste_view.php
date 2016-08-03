<div class="page-content">
          <div class="header">
              <div class="row">
                 <div class="col-lg-9 ">
                    <h2>Satışlar </h2> 
                 </div>
                 <div class="col-lg-3 ">
                     <div style="float:right;" class="btn-group">
                          <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>satislar/yenifatura'" class="btn btn-dark">Yeni Fatura Oluştur</button>
                          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>                         
                          </button>
                          <span class="dropdown-arrow"></span>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo SITE_URL;?>satislar/yeniproforma">Yeni Proforma Oluştur</a></li>
                          </ul>
                        </div>
                 </div>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                        <th>Fatura Numarası</th>
                        <th>Fatura Açıklaması</th>
                        <th>Düzenleme Tarihi</th>
                        <th>Kalan Meblağ</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($satisList as $key => $value){ ?> 
                           <tr>
                                <td><?=$value["id"]?></td>
                                <td><a href="<?php SITE_URL?>detay/<?=$value["id"]?>"> <?=$value["adi"]?></a> </td>    
                                <td class="hidden-480"> <?=$value["tarih"]?>  </td>  
                                <td class="hidden-480">
                                    <?php foreach ($odemetoplam as $key4 => $value4){ ?> 
                                        <?php if($value["id"]==$value4["satis_id"]){?>
                                            <?php echo $value["borc"] - $value4["todeme"]  ?>    
                                                                                                         
                                        <?php } ?> 
                                    <?php }?> 
                                    ₺ 
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          