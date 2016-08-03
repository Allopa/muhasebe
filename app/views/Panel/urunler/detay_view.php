        <div class="page-content">
          <div class="header">
            <h2><strong>Ürün ve Hizmetler</strong> > Ürün / Hizmet</h2>            
          </div>
            <div class="row">
                <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="fa fa-puzzle-piece fa-3x"></i> 
                                <strong><?php echo $this->urun[0]['adi']; ?></strong> 
                                <button onclick="window.location.href='<?php echo SITE_URL;?>urunler/duzenle/<?php echo $this->urun[0]['id']; ?>'" style="float:right;" type="button" class="btn btn-default text-right">Düzenle</button>
                  </h3>
                    
                  <hr>
                </div>
                <div class="panel-content">
                  <div class="row">
                      <div class="col-md-1">
                          <p><i class="fa fa-barcode "></i></p>
                          <p><i class="fa fa-tag "></i></p>
                            <p><i class="fa fa-tachometer"></i></p>
                            <p><i class="fa fa-minus-circle u-lineHeight40"></i></p>
                            <p><i class="fa fa-plus-circle u-lineHeight40"></i></p>
                            <p><i class="fa fa-gavel"></i></p>
                            <p><i class="fa fa-gavel "></i></p>
                            <p><i class="fa fa-gavel "></i></p>
                            <p><i class="fa fa-gavel "></i></p>
                      </div>
                    <div class="col-md-4">
                        <p><strong>Kodu</strong></p>
                        <p><strong>Kategori</strong></p>
                        <p><strong>Alış Satış Birimi</strong></p>
                        <p><strong>Alış Fiyatı</strong></p>
                        <p><strong>Satış Fiyatı</strong></p>
                        <p><strong>Kdv</strong></p>
                        <p><strong>Oiv</strong></p>
                        <p><strong>Alış Ötv</strong></p>
                        <p><strong>Satış Ötv</strong></p>
                    </div>
                    <div class="col-md-4">
                        <p>-- <?php echo $this->urun[0]['kodu']; ?></p>
                        <p>-- <?php echo $this->urun[0]['kategori']; ?></p>
                        <p>-- <?php echo $this->urun[0]['asbirimi']; ?></p>
                        <p>-- <?php echo $this->urun[0]['alisfiyati']; ?></p>
                        <p>-- <?php echo $this->urun[0]['satisfiyati']; ?></p>
                        <p>-- <?php echo $this->urun[0]['kdv']; ?></p>
                        <p>-- <?php echo $this->urun[0]['oiv']; ?></p>
                        <p>-- <?php echo $this->urun[0]['alisotv']; ?></p>
                        <p>-- <?php echo $this->urun[0]['satisotv']; ?></p>
                    </div>
                    <div class="col-md-3">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>                 