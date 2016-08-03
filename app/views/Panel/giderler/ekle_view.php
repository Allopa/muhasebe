    <div class="main-content">
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<div class="page-header">
								<h1>Yeni Fatura</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: FORM VALIDATION 1 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">									
                                                                        <form action="<?php echo SITE_URL;?>satislar/yenifatura" <form role="form" class="form-horizontal" id="form" method="post">
										<div class="row">											
											<div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-2 control-label" for="form-field-1">
                                                                                                               Fatura Açıklaması
                                                                                                        </label>
                                                                                                        <div class="col-sm-9">
                                                                                                                <input type="text" placeholder="" id="form-field-1" name="adi" class="form-control">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-2 control-label" for="form-field-1">
                                                                                                               Müşteri
                                                                                                        </label>
                                                                                                        <div class="col-sm-9">
                                                                                                                <select id="form-field-select-1" class="form-control" name="cari_id">
                                                                                                            <?php foreach ($cari as $key => $value) { ?>	    
                                                                                                                <option value="<?=$value["id"]?>" selected="selected"><?=$value["sirketadi"]?></option>
                                                                                                            <?php } ?>
                                                                                                                </select>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-2 control-label" for="form-field-1">
                                                                                                               Müşteri Bilgileri
                                                                                                        </label>
                                                                                                        <div class="col-sm-9">
                                                                                                              <label >
                                                                                                               VD saraylar 
                                                                                                            </label>  
                                                                                                        </div>
                                                                                                </div>
                                                                                               	<hr>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-2 control-label" for="form-field-1">
                                                                                                               Düzeleme Tarihi
                                                                                                        </label>
                                                                                                        <div class="col-sm-9">
                                                                                                              <div class="input-group">
                                                                                                                    <input type="date" class="form-control date-picker">
                                                                                                                        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-2 control-label" for="form-field-1">
                                                                                                               Tahsil Edileceği Tarih
                                                                                                        </label>
                                                                                                        <div class="col-sm-9">
                                                                                                            <div class="input-group">
                                                                                                                    <input type="date" class="form-control date-picker">
                                                                                                                    <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div>
													<span class="symbol required"></span>Zorunlu Alanlar
													<hr>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<p>
													
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-yellow btn-block" type="submit">
													Proje Ekle <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
                                                                        </form>
								</div>
							</div>
							<!-- end: FORM VALIDATION 1 PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>