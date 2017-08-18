@extends('template.freelancer')
@section('content')
    
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                    {!! link_to('products/create','tambah Products',['class' => 'btn btn-danger btn-sm']) !!}
                    <br>
                    <table class="table table-hover">
					    <thead>
					      <tr class="danger">
					        <th>Judul Produk</th>
					        <th>Harga Awal</th>
					        <th>Harga Promo</th>
					        <th>Kategori</th>
					        <th>Sub Kategori</th>
					        <th></th>
					      </tr>
					    </thead>
					    
					    <tbody>
					      <tr>
					     	@foreach($product as $p)
					        <td>{{ $p->jdl_Pdk}}</td>
					        <td>{{ $p->hrg_awal}}</td>
					        <td>{{ $p->hrg_promo}}</td>
					        <td>{{ $p->kategori}}</td>
					        <td>{{ $p->sub_kategori}}</td>
					        @endforeach
					        <td>
					        	{!! link_to('create','hapus',['class' => 'btn btn-danger btn-sm']) !!}
					        	{!! link_to('create','edit',['class' => 'btn btn-success btn-sm']) !!}
					        	{!! link_to('create','detail',['class' => 'btn btn-primary btn-sm']) !!}
					        </td>
					    </tbody>
					   	
					  </table>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

@stop