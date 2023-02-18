@extends('admin.admin_master')
@section('title')
Transaksi
@endsection

<!-- ini untuk isi home -->
@section('admin')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Transaksi</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"> Table</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id</td>

                       <td>{{ $transaksi->id }}</td>
                   </tr>
                   <tr>
                       <td>Title</td>

                       <td>{{ $transaksi->package->title}}</td>
                   </tr>
                   <tr>
                       <td>Username</td>

                       <td>{{ $transaksi->username }}</td>
                   </tr>
                   <tr>
                        <td>Additional Visa</td>

                        <td>{{ $transaksi->additional_visa}}</td>
                    </tr>
                    <tr>
                        <td>Transaction Total</td>

                        <td>{{ $transaksi->transaction_total }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>

                        <td>{{ $transaksi->status }}</td>
                    </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/transaksi" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
