@extends('admin.admin_master')
@section('title')
Admin
@endsection

<!-- ini untuk isi home -->
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                        <div class="card-body">
                                        <h4 class="card-title">Add Admin</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('package.store') }}" novalidate="">
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
                                                <input type="text" name="title" class="form-control" required="" placeholder="Silahkan input title">
                                            </div>
                                            <div class="mb-3">
                                                <label>Slug</label>
                                                <div>
                                                    <input type="text" name="slug" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan slug yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Location</label>
                                                <div>
                                                    <input type="text" name="location" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan location yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>About</label>
                                                <div>
                                                    <input type="text" name="about" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan about yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Featured Event</label>
                                                <div>
                                                    <input type="text" name="featured_event" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan featured event yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Language</label>
                                                <div>
                                                    <input type="text" name="language" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan language yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Foods</label>
                                                <div>
                                                    <input type="text" name="foods" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan foods yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Depature Date</label>
                                                <div>
                                                    <input type="date" name="depature_date" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan depature date yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Duration</label>
                                                <div>
                                                    <input type="text" name="duration" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan duration yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Type</label>
                                                <div>
                                                    <input type="text" name="type" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan type yang benar">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Price</label>
                                                <div>
                                                    <input type="text" name="price" class="form-control" required="" parsley-type="text" placeholder="Silahkan masukan price yang benar">
                                                </div>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Add
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
@endsection
