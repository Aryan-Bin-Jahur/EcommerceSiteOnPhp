@extends('admin.layouts.template')
@section('page_title')
All Product
@endsection
@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span> All Products</h4>

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
                    <td>{{$category->id}}</td>
                    <td>{{$category->subcategory_name}}</td>
                    <td>{{$category->category_count}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="{{route('editcategory',$category->id)}}"class="btn btn-primary">EDIT</a>
                        <a href="{{route('deletecategory',$category->id)}}"class="btn btn-warning">DELETE</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection