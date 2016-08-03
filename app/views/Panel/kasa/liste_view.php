<div class="page-content">
          <div class="header">
           <div class="row">
                 <div class="col-lg-9 ">
                    <h2>Kasa ve Bankalar </h2> 
                 </div>
                 <div class="col-lg-3s ">
                    
                    <div style="float:right;" class="btn-group">
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>kasa/kasaekle'" class="btn btn-dark">Kasa Ekle</button>
                        <button type="button" onclick="window.location.href='<?php echo SITE_URL;?>kasa/bankaekle'" class="btn btn-dark">Banka Ekle</button>
                    </div>
                 </div>
              </div>            
          </div>
                                                    <?php if(isset($mesaj)){ ?>
                                                    <div class="alert alert-warning"><?php echo $mesaj["mesaj"];?></div>                                                    
                                                    <meta http-equiv='refresh' content='2;URL=<?php echo SITE_URL;?>kasa/liste'/>
                                                    <?php } ?>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                        <th>Hesap Tipi</th>
                        <th>Döviz Cinsi</th>
                        <th>Bakiye</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($kasaList as $key => $value){ ?> 
                           <tr>
                                <td><a href="<?php SITE_URL?>detay/<?=$value["id"]?>"> <?=$value["hesapismi"]?></a> </td>    
                                <td class="hidden-480"><?=$value["dovizcinsi"]?></a></td> 
                                <td class="hidden-480"><?=$value["acilisbakiyesi"]?></a></td> 
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          