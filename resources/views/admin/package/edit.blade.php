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
                                            <li class="breadcrumb-item"><a href="/package"> Kategories Tables</a></li>

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

                                        <h4 class="card-title">Edit Kategories Data</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <form class="custom-validation" method="POST" action="{{ route('package.update',[$package->id]) }}" novalidate="">
                                                    @method('PUT')
                                                    @csrf
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                    <ul>
                                                    @foreach ($errors->all() as $error)
                                                     <li>{{ $error }}</li>
                                                     @endforeach
                                                     </ul>
                                                      </div>
                                                     @endif
                                                    <div class="mb-3">
                                                        <label>Title</label>
                                                        <input type="text" name="title" class="form-control" required=""  value="{{ $package->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Slug</label>
                                                        <input type="text" name="slug" class="form-control" required=""  value="{{ $package->slug }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Location</label>
                                                        <input type="text" name="location" class="form-control" required=""  value="{{ $package->location }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>About</label>
                                                        <input type="text" name="about" class="form-control" required=""  value="{{ $package->about }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Featured Event</label>
                                                        <input type="text" name="featured_event" class="form-control" required=""  value="{{ $package->featured_event }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Language</label>
                                                        <input type="text" name="language" class="form-control" required=""  value="{{ $package->language }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Foods</label>
                                                        <input type="text" name="foods" class="form-control" required=""  value="{{ $package->foods }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Depature Data</label>
                                                        <input type="date" name="depature_date" class="form-control" required=""  value="{{ $package->depature_date }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Duration</label>
                                                        <input type="text" name="duration" class="form-control" required=""  value="{{ $package->duration }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Type</label>
                                                        <input type="text" name="type" class="form-control" required=""  value="{{ $package->type }}">
                                                    </div><div class="mb-3">
                                                        <label>Price</label>
                                                        <input type="text" name="price" class="form-control" required=""  value="{{ $package->price }}">
                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="mb-0">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                                Add
                                                            </button>
                                                            <a class="btn btn-primary waves-effect waves-light" href="/package" role="button">Kembali</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
@endsection
