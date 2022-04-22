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
                    <h3 class="title-1 m-b-20"><strong>data table barang laboratorium</strong></h3>
                    <div class="table-data__tool">


                        <button class="">
                            <a href="{{ route('cruds.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">add item</a>
                        </button>


                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th style="text-align: center; vertical-align: middle;">Jumlah</th>
                                    <th>Kondisi dan Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cruds as $index => $crud)   
                                <tr class="tr-shadow">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $crud->Nama_Barang }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $crud->Jumlah }}</td>
                                    <td class="desc">{{ $crud->Kondisi_dan_Keterangan }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a class="zmdi zmdi-edit" href="{{ route('cruds.edit', $crud->id)}}"></a>
                                            </button>
                                            <button href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a class="zmdi zmdi-delete" href="{{ route('cruds.destroy', $crud->id)}}"></a>
                                            </button>
                                        </div>
                                    </td>
                                    <tr class="spacer"></tr>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
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

