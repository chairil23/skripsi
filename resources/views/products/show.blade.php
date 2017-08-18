@extends('template.freelancer')
@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail Product</h1>
				<div class="col-sm-6" style="float: right;">
					<table class="table table-bordered">
						<tr><td width='120'>No ID</td><td>12345</td><td rowspan='3'><img src="{{ asset('img/avatar2.png')}}" width="100"></td></tr>
						<tr><td>Nama </td><td>Alvantesha Priliandi</td></tr>
						<tr><td>Alamat</td><td>Jalan Masjid Lk. V Kel. Jati Karya Kec. Binjai Utara</td></tr>
						<tr><td >Total Upload</td><td colspan="2">10 Product</td></tr>
						<tr><td >Ulasan</td><td colspan="2">
							<div>
			                    <span class="glyphicon glyphicon-heart-empty" aria-hidden="true" style="float: left; margin-top: 5px;">&nbsp;</span>
			                    	<span class="pull-right text-muted">&nbsp;80%</span>
			                    	<div class="progress progress-striped active" style="margin-top: 20px; margin-bottom: 5px;">
			                    		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
			                    	</div>
			                </div>
							<div>
			                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="float: left; margin-top: 5px;">&nbsp;</span>
			                    	<span class="pull-right text-muted">&nbsp;70%</span>
			                    	<div class="progress progress-striped active" style="margin-top: 5px; margin-bottom: 5px;">
			                    		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
			                    		</div>
			                    	</div>
			                </div>
							 <div>
			                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true" style="float: left; margin-top: 5px;">&nbsp;</span>
			                    	<span class="pull-right text-muted">&nbsp;15%</span>
			                    	<div class="progress progress-striped active">
			                    		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
			                    		</div>
			                    	</div>
			                </div>
						</td></tr>
					</table>
					<a href="" style="float: right;">&nbsp;Edit Profile</a>
					<a href="" style="float: right;">Change Password |</a>
				</div>
				<div class="col-sm-12">
					<table class="table table-bordered">
	                    <tr>
	                    	<td>Judul Product</td>
	                    	<td>{{$product->jdl_Pdk}}</td>
	                    	<td rowspan="6" width="200">
	                    		<img class="img-responsive" src="{{ asset('upload/'.$product->foto)}}" width="500" style="padding: 5px; padding-top: 45px;">
	                    	</td>
	                    </tr>
						<tr>
							<td>Harga Awal</td>
							<td>{{$product->hrg_awal}}</td>
						</tr>
						<tr>
							<td>Harga Promo</td>
							<td>{{$product->hrg_promo}}</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>{{$product->kategori}}</td>
						</tr>
						<tr>
							<td>Sub Kategori</td>
							<td>{{$product->sub_kategori}}</td>
						</tr>
						<tr>
							<td>Deskripsi Produk</td>
							<td>{{$product->description}}</td>
						</tr>
					</table>
					{!! link_to('products/'.$product->id.'/edit','Edit',['class' => 'btn btn-success btn-sm']) !!}
					<br><br>
				</div>
			</div>
		</div>
	</div>

@stop