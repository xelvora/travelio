@extends('admin.admin_master')
@section('title')
Foto
@endsection

<!-- ini untuk isi home -->
@section('admin')
<div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add Foto</h4>


                    <form class="custom-validation" method="POST" action="{{ route('foto.store') }}"  enctype=”multipart/form-data”>
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
                            <div class="">
                                <select name="tpackage_id" class="form-control">
                                <option value="">Choose Product</option>
                                @foreach ($package as $row)
                                <option value="{{$row->id}}">{{$row->title}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input  type="file" name="foto" class="form-control" required="" placeholder="Silahkan input jumlah">
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
        </div>
</div>
@endsection


