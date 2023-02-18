@extends('admin.admin_master')
@section('title')
Transaksi
@endsection

<!-- ini untuk isi home -->
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                        <div class="card-body">
                                        <h4 class="card-title">Edit Transaksi</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('detail.update',[$detail->id]) }}" novalidate="">
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
                                                <label>Username</label>
                                               <div class="">
                                                 <select name="transaction_id" class="form-control">
                                                    <option value="">Choose Product</option>
                                                    @foreach ($transaksi as $row)
                                                    <option value="{{$row->id}}">{{$row->username}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Nationality</label>
                                                <input type="text" name="nationality" class="form-control" required=""  value="{{ $detail->nationality }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Is Visa</label>
                                                <input type="text" name="is_visa" class="form-control" required="" value="{{ $detail->is_visa }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Doe Passport</label>
                                                <input type="text" name="doe_passport" class="form-control" required="" value="{{ $detail->doe_passport }}">
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
