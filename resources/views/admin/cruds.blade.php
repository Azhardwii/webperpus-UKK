@extends('layouts.app')
@section('title', 'AlbertJonathan | Dashboard')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- FORM-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-30">Tambah Barang</h3>
                    <form method="post" action="{{route('cruds.store')}}">
                        {{csrf_field()}}
                        <div class="form-floating mb-3">
                            <label for="inputname">Nama Barang</label>
                            <input type="text" class="form-control" id="inputname" placeholder="Nama Barang" name="Nama_Barang">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputemail" class="form-label">Jumlah Barang</label>
                            <input type="text" class="form-control" id="inputjumlah" placeholder="Jumlah" name="Jumlah">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingTextarea2">Kondisi dan Keterangan</label>
                            <textarea class="form-control" placeholder="Kondisi dan Keterangan" id="floatingTextArea2" style="height: 100px" name="Kondisi_dan_Keterangan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                </div>
                
            </div>
        </div>
    </section>

    
    <!-- END FORM-->

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