    <div class="main-content">
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="#">
										Projeler
									</a>
								</li>
								<li class="active">
									Proje Düzenle
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Proje Düzenle <small>proje düzenle</small></h1>
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
									Proje Düzenle
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
						<?php foreach ($projeler as $key => $value) { ?>				
                                                                        <form action="<?php echo SITE_URL;?>projeler/projeDuzenleRun/<?=$value["id"]?>" role="form" id="form" method="post">
										<div class="row">											
											<div class="col-md-6">
                                                                                                <div class="form-group">
													<label class="control-label">
														Cari Adı <span class="symbol required"></span>
													</label>
													<select id="form-field-select-1" class="form-control" name="cari_id" readonly>
                                                                                                            <?php foreach ($cari as $key2 => $value2) { ?>
                                                                                                                <?php if($value["cari_id"]==$value2["id"]){?>
                                                                                                                <option value="<?=$value2["id"]?>" selected="selected"><?=$value2["sirketadi"]?></option>
                                                                                                                <?php } ?>
                                                                                                                <?php } ?>
                                                                                                        </select>
                                                                                                </div>
                                                                                                <div class="form-group">
													<label class="control-label">
														Proje Adi  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Proje Adi" class="form-control" id="firstname" name="adi" value="<?=$value["adi"]?>">
                                                                                                </div>
                                                                                                <div class="form-group">
													<label class="control-label">
														En  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="En " class="form-control" id="firstname" name="en" value="<?=$value["en"]?>">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label">
														Boy  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Boy" class="form-control" id="firstname" name="boy" value="<?=$value["boy"]?>">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label">
														M2  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="M2" class="form-control" id="firstname" name="m2" value="<?=$value["m2"]?>">
												</div>												
											</div>
											<div class="col-md-6">
                                                                                                <div class="form-group">
													<label class="control-label">
														Ürün Adı  <span class="symbol required"></span>
													</label>
													<select id="form-field-select-1" class="form-control" name="urun_id">
                                                                                                                <?php foreach ($urun as $key3 => $value3) { ?>                                                                                                                    
                                                                                                                <option value="<?=$value3["id"]?>" <?php if($value["urun_id"]==$value3["id"]){?>selected="selected" <?php }else{}?>><?=$value3["adi"]?></option>                                                                                                                    								
                                                                                                                <?php } ?>
                                                                                                        </select>
                                                                                                </div>
                                                                                                <div class="form-group">
													<label class="control-label">
														Adet  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Adet" class="form-control" id="firstname" name="adet" value="<?=$value["adet"]?>">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label">
														Birim Fiyatı  <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Birim Fiyatı" class="form-control" id="firstname" name="birim_fiyat" value="<?=$value["birim_fiyat"]?>">
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
													Proje Düzenle <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
                                                                        </form>
                                                <?php } ?>
								</div>
							</div>
							<!-- end: FORM VALIDATION 1 PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>