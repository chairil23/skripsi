@extends('template.freelancer')
@section('content')
    
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                    {!! link_to('create','tambah Products',['class' => 'btn btn-danger btn-sm']) !!}
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

@stop