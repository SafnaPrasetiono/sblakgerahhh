@extends('admin.layout.panel')

@section('title')
<title>Seblak Gerah - Product</title>
@endsection

@section('mainpages')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="d-block rounded shadow bg-white p-3">
                <h2 class="text-danger">Product</h2>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="d-block rounded shadow bg-white p-3">
                <table class="table rounded overflow-hidden">
                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>New product</th>
                            <th>-</th>
                            <th>
                                <a href="#" class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="btn btn-warning">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection