<div class="page-content">
          <div class="header">
           <div class="row">
                 <div class="col-lg-8 ">
                    <h2>Giderler </h2> 
                 </div>
                 <div class="col-lg-4 ">
                    
                    <div style="float:right;" class="btn-group">
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>giderler/hizlifisfatura'" class="btn btn-dark">Hızlı Fiş/Fatura</button>
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>giderler/detaylifisfatura'" class="btn btn-dark">Detaylı Fiş/Fatura</button>
                         <div class="btn-group"> 
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Diğer <span class="caret"></span>
                          </button>
                          <span class="dropdown-arrow"></span>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo SITE_URL;?>giderler/yenimaas">Yeni Maaş / Prim</a> </li>
                            <li><a href="<?php echo SITE_URL;?>giderler/yenisgk">Yeni Vergi / SGK Primi</a> </li>
                            <li><a href="<?php echo SITE_URL;?>giderler/yenibanka">Yeni Banka Gideri</a> </li>
                          </ul>
                          </div>
                    </div>
                 </div>
              </div>            
          </div>
     <?php if(isset($mesaj)){ ?>
                                                    <div class="alert alert-warning"><?php echo $mesaj["mesaj"];?></div>                                                    
                                                    <meta http-equiv='refresh' content='2;URL=<?php echo SITE_URL;?>giderler/liste'/>
                                                    <?php } ?>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Açıklama</th>
                        <th>Tipi</th>
                        <th>Düzenleme Tarihi</th>
                        <th>Bakiye</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($giderList as $key => $value){ ?> 
                           <tr>
                               <td class="hidden-100"> 
                                   <?php if($value["tipi"]==1){ ?>
                                        <i class="fa fa-file-text-o fa-2x isOverdue"></i>
                                    <?php }else if($value["tipi"]==2){?>
                                        <i class="fa fa-file-text-o fa-2x isOverdue"></i>
                                    <?php }else if($value["tipi"]==3){?>
                                        <i class="fa fa-user fa-2x "></i>
                                    <?php }else if($value["tipi"]==4){?>
                                        <i class="fa fa-institution fa-2x isOverdue"></i>
                                    <?php }else if($value["tipi"]==5){?>
                                        <i class="fa fa-institution fa-2x isOverdue"></i>
                                    <?php }?>
                               </td>
                                <td><a href="<?php SITE_URL?>detay/<?=$value["id"]?>"> <?=$value["aciklama"]?></a> </td>    
                                <td class="hidden-480"> 
                                    <?php if($value["tipi"]==1){ ?>
                                        <?php echo "Hızlı Fiş / Fatura"; ?>
                                    <?php }else if($value["tipi"]==2){?>
                                         <?php echo "Detaylı Fiş / Fatura"; ?>
                                    <?php }else if($value["tipi"]==3){?>
                                         <?php echo "Maaş / Prim"; ?>
                                    <?php }else if($value["tipi"]==4){?>
                                         <?php echo "Vergi / Sgk Primi"; ?>
                                    <?php }else if($value["tipi"]==5){?>
                                         <?php echo "Banka Gideri"; ?>
                                    <?php }?>
                                </td>  
                                <td class="hidden-480"> <?=$value["tarih"]?>  </td> 
                                <td class="hidden-480">
                                    <?php if($value["kdv"]==0){ ?>
                                        <?=$value["toplamtutar"] ?>
                                    <?php }else if($value["kdv"]==8){?>
                                    <?=$value["toplamtutar"] + ($value["toplamtutar"] / 100 * 8);?>
                                    <?php }else if($value["kdv"]==18){?>
                                    <?=$value["toplamtutar"] + ($value["toplamtutar"] / 100 * 18);?>
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