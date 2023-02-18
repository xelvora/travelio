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
                                        <h4 class="card-title">Add Transaksi</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('transaksi.store') }}" novalidate="">
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
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" required="" placeholder="Silahkan input jumlah">
                                            </div>
                                            <div class="mb-3">
                                                <label>Additional visa</label>
                                                <input type="text" name="additional_visa" class="form-control" required="" placeholder="Silahkan input jumlah">
                                            </div>
                                            <div class="mb-3">
                                                <label>Transaction Total</label>
                                                <input type="text" name="transaction_total" class="form-control" required="" placeholder="Silahkan input jumlah">
                                            </div>
                                            <div class="mb-3">
                                                <label>Status</label>
                                                <input type="text" name="status" class="form-control" required="" placeholder="Silahkan input jumlah">
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
@endsection


