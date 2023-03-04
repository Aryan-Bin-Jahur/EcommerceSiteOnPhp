@extends('admin.layouts.template')
@section('page_title')
All SubCategory
@endsection
@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span> All SubCategory</h4>

        @if (session()->has('message'))
          <div class="alert alert-success">
            {{session()->get('message')}}

          </div>
          
        @endif


        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>SubCategoryName</th>
                <th>Category</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($categories as $category)
                
              <tr>
                    <td>{{$subcategory->id}}</td>
                    <td>{{$subcategory->subcategory_name}}</td>
                    <td>{{$subcategory->category_name}}</td>
                    <td>{{$subcategory->product_count}}</td>
                    <td>
                        <a href="{{route('editcategory',$subcategory->id)}}"class="btn btn-primary">EDIT</a>
                        <a href="{{route('deletecategory',$subcategory->id)}}"class="btn btn-warning">DELETE</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection