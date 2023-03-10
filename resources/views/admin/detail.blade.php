@extends('layouts.app')
@section('title', 'Azhar | Dashboard')
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
                                <strong>Form Detail</strong> Library Buku
                            </div>
                            <div class="card-body card-block">
                                <form>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Judul</label>
                                        <input type="text" name="judul" class="form-control" value="{{ $crud->judul}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Pengarang</label>
                                        <input type="text" name="pengarang" class="form-control" value="{{ $crud->pengarang}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Penerbit</label>
                                        <input type="text" name="penerbit" class="form-control" value="{{ $crud->penerbit}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Gambar</label>
                                        <div>
                                            <img src="{{asset('admin/images/buku/' . $crud->gambar)}}" width="200px" alt="" disabled>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Kembali
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
