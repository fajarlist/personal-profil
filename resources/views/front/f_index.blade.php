@extends('front.f_template')
@section('nama','index')
@section('content')

<!-- About -->
@foreach ($profil as $data)
<div class="about" id="about">
	<div class="container">
		<h3 class="heading">About Me</h3>
		<div class="col-md-6 aboutleft">
			<img src="{{ asset('foto_profil/'. $data->foto_profil) }}" alt="" />
		</div>
		<div class="col-md-6 aboutright">
		<div class="clients">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h3>Personal information</h3>
							<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li><b>D.O.B</b></li>
										<li >{{ $data->lahir }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>PHONE</b></li>
										<li>{{ $data->hp }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>ADDRESS </b></li>
										<li>{{ $data->alamat }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>E-MAIL </b></li>
										<li><a href="mailto:example@mail.com">{{ $data->email_profil }}</a></li>
									</ul>
								</li>
							</ul>
							<div class="clearfix"></div>
							<ul class="hireme">
								<li><a href="https://drive.google.com/file/d/1zCeTafn_hDJHEfy8IQ-HrI4n_OBxzo8M/view?usp=sharing" class="w3l_contact"><i class="fa fa-download" aria-hidden="true"></i> Download CV</a></li>
							</ul>
						</li>
						<li>
							<h3>{{ $data->title_profil }}</h3>
							<p>{{ $data->deskripsi_profil }}</p>
						</li>
					</ul>
				</div>
			</section>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endforeach
<!-- About -->

<!-- Skills -->
<section class="skills" id="skills">
	<div class="container">
			<h3 class="heading">Skills</h3>
		<div class='col-md-8 bar' >
		 <h4 class="bar-p">Beberapa teknologi Yang saya pahami </h4>			
				@foreach ($keahlian as $data)
				<div class="container">
					<h5>{{ $data->nama_keahlian }}</h5>
					<div class="progress" style="margin-right:100px;">
					  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->tingkat }}%">{{ $data->tingkat }}%
					  </div>
					</div>
				  </div>
					@endforeach
		</div>
	</div>
</section>
<!-- //Skills -->

<!-- gallery -->



<div id="gallery" class="gallery">
    <h3 class="heading">Portfolio</h3>
        <div class="gallery-info" >
			@foreach ($portofolio as $data)
            <div class="col-md-3 gallery-grids">
                <a href="{{ asset('gambar_portofolio/'. $data->gambar_portofolio) }}" class="gallery-box" data-lightbox="example-set" data-title="" >
                    <img src="{{ asset('gambar_portofolio/'. $data->gambar_portofolio) }}" alt="" class="img-responsive zoom-img">
                </a>
            </div>
            @endforeach
            <div class="clearfix"> </div>	
        </div>
    <script src="js/lightbox-plus-jquery.min.js"></script>
</div>

<!-- //gallery -->

<!-- Education -->
<div class="education" id="education">
	<div class="container">
			<h3 class="heading">Education</h3>
			@foreach ($pendidikan as $data)
		<div class="col-md-5 ">
			<div class="grid1" style="width:450px; height:350px; margin-left:100px;">
				<img src="{{ asset('gambar_pendidikan/'. $data->gambar_pendidikan) }}" alt="" style="width:150px; height:150px; "  />
				<h3>{{ $data->nama_pendidikan }}</h3>
				<p>{{ $data->deskripsi_pendidikan }}</p>
				<h4><b>Year</b> : {{ $data->tahun }}</h4>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- //Education -->

<!-- Work experience -->
<div class="experience" id="experience">
	<div class="container">
			<h3 class="heading">Experience</h3>
			@foreach ($pengalaman as $data)
		<div class="col-md-5 ">
			<div class="grid1" style="width:450px; height:350px; margin-left:100px; ">
				<img src="{{ asset('gambar_pengalaman/'. $data->gambar_pengalaman) }}" alt="" style="width:150px; height:150px; "  />
				<h3>{{ $data->nama_pengalaman }}</h3>
				<p>{{ $data->deskripsi_pengalaman }}</p>
				<h4><b>Year</b> : {{ $data->tahun }}</h4>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- //Work experience -->

<!-- Technical Skills -->
<div class="count-agileits" id="stats">
	<div class="container">
		<h3 class="heading">Technical Skills</h3>
					<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3' data-delay='1' data-increment="1">120</div>
									<span></span>
									<h5>Projects done</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='4' data-delay='1' data-increment="1">172</div>
									<span></span>
									<h5>New Companies</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5' data-delay='1' data-increment="1">102</div>
									<span></span>
									<h5>Web designs</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='999' data-delay='1' data-increment="1">156</div>
									<span></span>
									<h5>Happy clients</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
	</div>
</div>
<!-- Technical Skills -->

<!-- contact -->
<div class="contact" id="contact">
	<div class="container">
		<h3 class="heading">Contact Me</h3>
		<div class="col-md-4 address">
			@foreach ($profil as $data)
			<h3>Address</h3>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Phone</p><span>{{ $data->hp }}</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Email</p><a href="mailto:info@example.com">{{ $data->email_profil }}</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Address</p><span>{{ $data->alamat }} </span> </p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		@endforeach


<div class="col-md-4 form">
<form action="/contact/insert" method="POST">
@csrf
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama</label>
                <input name="nama_contact" class="form-control" value="{{ old('nama_contact')}}">
                <div class="text-denger">
                    @error('nama_contact')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email')}}">
                <div class="text-denger">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Nomer Telpon</label>
                <input name="telp" class="form-control" value="{{ old('telp')}}">
                <div class="text-denger">
                    @error('telp')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Pesan</label>
                <textarea name="pesan" class="form-control" value="{{ old('pesan')}}"></textarea>
                <div class="text-denger">
                    @error('pesan')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-grup">
            <button class="btn btn-primary btn-sm">Send</button>
        </div>

    </div>
</div>
</form>
		</div>
		<div class="col-md-4 map">
					<iframe width="408" height="324" id="gmap_canvas" src="https://maps.google.com/maps?q=Dusun%20I%20Gedangan%20Cepogo%20Boyolali%20Regency%20Central%20Java&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:324px;width:408px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->

@endsection