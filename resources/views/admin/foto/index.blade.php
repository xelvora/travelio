@extends('admin.admin_master')
@section('title')
Admin
@endsection

<!-- ini untuk isi home -->
@section('admin')
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Admin</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('foto.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel Admin</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($fotos as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($fotos->perpage() *  ($fotos->currentPage() -1)) }}</td>
                        <td>{{ $row->package->title}}</td>
                        <td><img src="{{ asset($row->image) }}" class="img-thumbnail" style="width:200px" /></td>
                        <td>
                        <form method="post" action="{{ route('foto.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->name}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('foto.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('foto.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
