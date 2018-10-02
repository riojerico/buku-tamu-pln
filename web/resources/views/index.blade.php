<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>BTP</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.html">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="{{ asset('img/PLN.png') }}" alt="Creative Tim Logo" rel="tooltip" title="" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    Perusahaan Listrik Negara
	                </div>


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="admin.html" target="">
						<i class="material-icons">dashboard</i> Administrator
					</a>
				</li>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header " style="background-color: #f7f41c;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<!-- <h1 style="font-color:#000">Buku Tamu & Working Permit</h1> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container" align="center">
					<h3 style="font-color:#000;"><b>Buku Tamu & Working Permit</b></h3>
	    	</div>
	  </div>


		<!-- End .section-navbars  -->

		<div class="section section-tabs">
			<div class="container">

					<div class="col-md-12">
						<!-- Tabs on Plain Card -->
						<div class="card card-nav-tabs card-plain">
							<div class="header header-info">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active"><a href="#home" data-toggle="tab">Buku Tamu</a></li>
											<li><a href="#updates" data-toggle="tab">Working Permit</a></li>
											<li><a href="#history" data-toggle="tab">History</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="home">
										<form class="" action="index.html" method="post">
										<div class="row">
											<div class="col-sm-4">
												<div class="col-sm-12">
				                	<div class="form-group">
				        	        	<input type="text" value="" placeholder="Nama" class="form-control" required/>
				                	</div>
				                </div>

												<div class="col-sm-12">
				                	<div class="form-group">
				        	        	<input type="text" value="" placeholder="Alamat / Instansi" class="form-control" required/>
				                	</div>
				                </div>
											</div>

											<div class="col-sm-4">
												<div class="col-sm-12">
													<div class="col-sm-12">
					                	<div class="form-group">
															<textarea name="name" class="form-control" rows="3" cols="80" placeholder="Keperluan..." required></textarea>
					                	</div>

														<div class="checkbox pull-left">
															<label>
																<input type="checkbox" name="aturan" required> Membaca aturan KJ
															</label>
														</div>
					                </div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-success" name="button">Simpan</button>
										</form>
									</div>
									<div class="tab-pane" id="updates">
										<form class="" action="" method="post">
										<!-- A -->
										<div class="col-sm-12">
											<b class="pull-left">A. Aplikasi</b>
											<br>

											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label>
														<p>Pekerjaan Umum</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label>
														<p>Ruang Tertutup</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label>
														<p>Pengangkatan Kritikal</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label>
														<p>Kerja Panas</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label>
														<p>Penggalian</p>
															<br>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label><p>Listrik</p>
														<br>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-2 pull-left">
												<div class="checkbox">
													<label><p>Bekerja di ketinggian</p>
														<br>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-1 pull-left">
												<div class="checkbox">
													<label><p>Lain-Lain</p>
														<br>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-3">
												&nbsp;
											</div>

											<div class="col-sm-12">
												<div class="col-sm-3">
													<input type="date" value="" placeholder="Tanggal" class="form-control" />
													<input type="text" value="" placeholder="Lokasi" class="form-control" />
													<input type="text" value="" placeholder="Pemohon" class="form-control" />
												</div>
											</div>
										</div>
										<!-- END A -->

										<!-- B -->
										<div class="col-sm-7">
											<b class="pull-left">B. Deskripsi Kerja</b>
											<br>

											<textarea name="name" rows="4" cols="80"></textarea>
										</div>
										<div class="col-sm-5">
											<b class="pull-left">Jenis Peralatan (Tandai yang Sesuai)</b>
											<br>

											<div class="col-sm-4 pull-left">
												<div class="checkbox">
													<label>
														<p>Mesin</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-4 pull-left">
												<div class="checkbox">
													<label>
														<p>Listrik</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
											<div class="col-sm-4 pull-left">
												<div class="checkbox">
													<label>
														<p>Peralatan Tangan</p>
														<input type="checkbox" name="optionsCheckboxes" >
													</label>
												</div>
											</div>
										</div>
										<!-- end B -->

										<!-- C -->
										<div class="col-sm-12">
											<b class="pull-left">C. Bahaya Yang Mungkin Terjadi (Tandai Yang Sesuai)</b>
											<br>
											<div class="col-sm-3">
												<?php
												for ($i=0; $i < 11 ; $i++) {
												?>
												<div class="pull-left col-sm-12">
													<div class="checkbox">
														<label>
															<p>Lantai Licin</p>
															<input type="checkbox" name="optionsCheckboxes" >
														</label>
													</div>
												</div>
												<?php
												}
												?>


											</div>

											<div class="col-sm-3">
												<div class="pull-left">
													<div class="checkbox">
														<label>
															<p>Pekerjaan di Atas Kepala</p>
															<input type="checkbox" name="optionsCheckboxes" >
														</label>
													</div>
												</div>
											</div>

											<div class="col-sm-3">
												<div class="pull-left">
													<div class="checkbox">
														<label>
															<p>Orang Masuk Tanpa Izin</p>
															<input type="checkbox" name="optionsCheckboxes" >
														</label>
													</div>
												</div>
											</div>

											<div class="col-sm-3">
												<div class="pull-left">
													<div class="checkbox">
														<label>
															<p>Terhantam Benda</p>
															<input type="checkbox" name="optionsCheckboxes" >
														</label>
													</div>
												</div>
											</div>
										</div>

										<!-- D -->
										<div class="col-sm-12">
											<b class="pull-left">D. Tindakan Pencegahan Yang Dilakukan Sebelum dan Semasa Kerja</b>
											<br>
											<div class="col-sm-6 pull-left">
												<?php
												for ($i=0; $i < 6 ; $i++) {
												?>
												<div class="pull-left col-sm-12">
													<div class="checkbox pull-left">
														<label>
															<input type="checkbox" name="optionsCheckboxes" >
															Lantai Licin
														</label>
													</div>
												</div>
												<?php
												}
												?>


											</div>

											<div class="col-sm-6">
												<div class="pull-left col-sm-12">
													<div class="checkbox pull-left">
														<label>
															<input type="checkbox" name="optionsCheckboxes" >
															Lantai Licin
														</label>
													</div>
												</div>
											</div>

										</div>

										<!-- E -->
										<div class="col-sm-12">
											<b class="pull-left">E. Alat Pelindung Diri</b>
											<br>
											<div class="col-sm-6 pull-left">
												<?php
												for ($i=0; $i < 6 ; $i++) {
												?>
												<div class="pull-left col-sm-12">
													<div class="checkbox pull-left">
														<label>
															<input type="checkbox" name="optionsCheckboxes" >
															Lantai Licin
														</label>
													</div>
												</div>
												<?php
												}
												?>


											</div>

											<div class="col-sm-6">
												<div class="pull-left col-sm-12">
													<div class="checkbox pull-left">
														<label>
															<input type="checkbox" name="optionsCheckboxes" >
															Lantai Licin
														</label>
													</div>
												</div>
											</div>

										</div>

										<!-- F -->
										<div class="col-sm-12">
											<b class="pull-left">F. Pengeluaran Surat Izin</b> <br>
											<small class="pull-left">Izin diberikan untuk kerja dijalankan yang tertera diatas selama</small>
											<br>
											<div class="col-sm-6">
												<table>
													<tbody>
														<tr>
															<td>Dari</td>
															<td>: &nbsp;&nbsp;&nbsp;</td>
															<td><input type="date" value="" placeholder="Tanggal" class="form-control" /></td>
															<td><input type="time" value="" placeholder="Jam" class="form-control" /></td>
														</tr>
														<tr>
															<td>Sampai dengan</td>
															<td>: &nbsp;&nbsp;&nbsp;</td>
															<td><input type="date" value="" placeholder="Tanggal" class="form-control" /></td>
															<td><input type="time" value="" placeholder="Jam" class="form-control" /></td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-6">
												<input type="text" value="" placeholder="Asisten Manajer" class="form-control" />
												<input type="text" value="" placeholder="Pengawas" class="form-control" />
											</div>
										</div>

										<!-- G -->
										<div class="col-sm-12">
											<b class="pull-left">G. Persetujuan Penanggung Jawab (Diisi oleh kontraktor/Pelaksana Pekerjaan)</b> <br>
											<small class="pull-left">Saya menyatakan bahwa Saya telah membaca & memahami K3 & pekerjaan ini akan dilaksanakan sesuai dengan segala persyaratan yang ada</small>
											<br>

											<table class="table">
												<thead>
													<tr>
														<th>&nbsp;</th>
														<th>Nama</th>
														<th>Tanggal</th>
														<th>Jam</th>
														<th>Kontraktor/Pelaksana</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><b>Orang yang berkompeten (Pelaksana)</b></td>
														<td><input type="text" value="" placeholder="Nama" class="form-control" /></td>
														<td><input type="date" value="" placeholder="Tanggal" class="form-control" /></td>
														<td><input type="time" value="" placeholder="Jam" class="form-control" /></td>
														<td><input type="text" value="" placeholder="Kontraktor/Pelaksana" class="form-control" /></td>
													</tr>
													<tr>
														<td><b>Ganti orang yang berkompeten (Pelaksana)</b></td>
														<td><input type="text" value="" placeholder="Nama" class="form-control" /></td>
														<td><input type="date" value="" placeholder="Tanggal" class="form-control" /></td>
														<td><input type="time" value="" placeholder="Jam" class="form-control" /></td>
														<td><input type="text" value="" placeholder="Kontraktor/Pelaksana" class="form-control"
													</tr>
												</tbody>
											</table>
										</div>
										<!-- H -->
										<div class="col-sm-12">
											<b class="pull-left">H. Pembatalan</b> <br>
											<small class="pull-left">Surat Izin Dibatalkan</small>
											<br>
											<div class="col-sm-4">
												<div class="form-group">
													<input type="text" value="" placeholder="Nama" class="form-control" required/>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<input type="date" value="" placeholder="Tanggal" class="form-control" required/>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<input type="time" value="" placeholder="Jam" class="form-control" required/>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<button type="submit" name="button" class="btn btn-success">Simpan</button>
										</div>

									</form>
									</div>
									<div class="tab-pane" id="history">
										<p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
										<div class=" pull-left">
											<ul>
												<li>{Nama} {status}</li>
												<li>{Nama} {status}</li>
												<li>{Nama} {status}</li>
												<li>{Nama} {status}</li>

											</ul>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- End Tabs on plain Card -->
					</div>
			</div>
		</div>
		<!-- End Section Tabs -->

		</div>

		<div class="section">
	        <div class="container text-center">
	            <div class="row">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <h2>Completed with examples</h2>
	                    <h4>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</h4>
	                </div>
	            </div>
			</div>
		</div>



	</div>
    <footer class="footer">
	    <div class="container">

	        <div class="copyright pull-right">
	            &copy; 2018, made with <i class="material-icons">favorite</i> by <a href="www.rodjoland.com">Rodjoland</a> for a better web.
	        </div>
	    </div>
	</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


</body>
	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js') }}"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
