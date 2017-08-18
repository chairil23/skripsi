@extends('template.freelancer')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Form Entry New Product</h3>
                    {!! Html::ul($errors->all()) !!}
                    {!! Form::model($product,array('url'=>'products/'.$product->id,'method'=>'patch'))!!}
                    <table class="table table-bordered">
	                    <tr>
	                    	<td>Judul Product</td>
	                    	<td>{!! Form::text('jdl_Pdk',null,['class'=>'form-control']) !!}</td>
	                    </tr>
						<tr>
							<td>Harga Awal</td>
							<td>{!! Form::text('hrg_awal',null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr>
							<td>Harga Promo</td>
							<td>{!! Form::text('hrg_promo',null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>{!! Form::select('kategori', ['L' => 'Large', 'S' => 'Small'], null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr>
							<td>Sub Kategori</td>
							<td>{!! Form::select('sub_kategori', ['L' => 'Large', 'S' => 'Small'], null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr>
							<td>Deskripsi Produk</td>
							<td>{!! Form::textarea('description',null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr>
							<td>Foto</td>
							<td>{!! Form::file('foto',null,['class'=>'form-control']) !!}</td>
						</tr>
						<tr><td colspan="2">
							{!! Form::submit('simpan data',['class'=>'btn btn-success btn-sm']) !!}
							{!! link_to('products','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
						</td></tr>
					</table>
					{!! Form::close()!!}
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
@stop