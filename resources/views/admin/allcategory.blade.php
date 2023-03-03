@extends('admin.layouts.template')
@section('page_title')
All Category
@endsection
@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span> All Category</h4>
        <h5 class="card-header">available catagory</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>CatagoryName</th>
                <th>Sub Catagory</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>ID</td>
                    <td>Electronics</td>
                    <td>10</td>
                    <td>100</td>
                    <td>
                        <a herf=""class="btn btn-primary">EDIT</a>
                        <a herf=""class="btn btn-warning">DELETE</a>

                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection