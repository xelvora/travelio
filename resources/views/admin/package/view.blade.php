@extends('admin.admin_master')

<!-- ini untuk isi home -->
@section('admin')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                    <div class="page-title-right mb-2">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/package">Package Tables</a></li>

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

                                        <h4 class="card-title">View Package Data</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id</td>

                       <td>{{ $package->id }}</td>
                   </tr>
                   <tr>
                       <td>Title</td>

                       <td>{{ $package->title }}</td>
                   </tr>
                   <tr>
                       <td>Location</td>

                       <td>{{ $package->location }}</td>
                   </tr>
                   <tr>
                        <td>About</td>

                        <td>{{ $package->about }}</td>
                    </tr>
                    <tr>
                        <td>Featured Event</td>

                        <td>{{ $package->featured_event }}</td>
                    </tr>
                    <tr>
                        <td>Language</td>

                        <td>{{ $package->language }}</td>
                    </tr>
                    <tr>
                        <td>Foods</td>

                        <td>{{ $package->foods }}</td>
                    </tr>
                    <tr>
                        <td>Depature Date</td>

                        <td>{{ $package->depature_date }}</td>
                    </tr>
                    <tr>
                        <td>Type</td>

                        <td>{{ $package->type }}</td>
                    </tr>
                    <tr>
                        <td>Price</td>

                        <td>{{ $package->price }}</td>
                    </tr>

                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/package" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
