@extends('template.freelancer')
@section('content')
    
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                    
                    {!! link_to('products/create','tambah Products',['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::open(array('url'=>'products/search'))!!}
                    {!! Form::text('keyword','',['class'=>'form-control','placeholder'=>'lakukan pencarian berdasarkan nama produk'])!!}
                    {!! Form::submit('Search', ['class'=>'btn btn-detail btn-sm'])!!}
                    {!! Form::close();!!}
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
					    @foreach($product as $p)
					    <tbody>
					      <tr>
					        <td>{{ $p->jdl_Pdk}}</td>
					        <td>{{ $p->hrg_awal}}</td>
					        <td>{{ $p->hrg_promo}}</td>
					        <td>{{ $p->kategori}}</td>
					        <td>{{ $p->sub_kategori}}</td>
					        <td>
					        	{!! link_to('products/'.$p->id.'/edit','Edit',['class' => 'btn btn-success btn-sm']) !!}
					        	{!! link_to('products/'.$p->id,'Detail',['class' => 'btn btn-primary btn-sm']) !!}
					        	{!! Form::open(array('method'=>'delete','url'=>'products/'.$p->id))!!}
					        	{!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])!!}
					        	{!! Form::hidden('_delete','DELETE')!!}
					        	{!! Form::close()!!}
					        </td>
					    </tbody>
					   	@endforeach
					  </table>
					  <div style="text-align: center;">
					  	{!! $product->render()!!}
					  </div>
					  
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

@stop