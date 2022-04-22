@extends('layouts.app')
@section('title', 'AlbertJonathan | Dashboard')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Edit</strong> Barang Laboratorium
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('cruds.update', $crud->id)}}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama Barang</label>
                                        <input type="text" name="Nama_Barang" class="form-control" value="{{ $crud->Nama_Barang}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Jumlah</label>
                                        <input type="text" name="Jumlah" class="form-control" value="{{ $crud->Jumlah}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Kondisi dan Keterangan</label>
                                        <textarea name="Kondisi_dan_Keterangan" class="form-control">{{ $crud->Kondisi_dan_Keterangan}}</textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->

    <!-- COPYRIGHT-->
    <section class="p-t-60 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COPYRIGHT-->
</div>
@endsection
