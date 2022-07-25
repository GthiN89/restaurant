@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Product</h4>
            <p class="card-description"> Here you can edit your Product</p>
            <form action="{{ route('edit_product_handler') }}" class="forms-sample" method="POST" enctype="multipart/form-data" >
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ $product->name }}">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Category</label>
                <br>
                <select id="categories_id" name="categories_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($category->category == $product->categories->category)selected @endif>{{ $category->category }}</option>
                    @endforeach
                  </select>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Price</label>
                <input type="number" name="price" class="form-control" id="exampleInputUsername1" value="{{ $product->price }}">
                @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="exampleInputUsername1" value="{{ $product->quantity }}" >
                @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
              </div>
              {{-- image --}}
              <br>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" name="image">
                </div>
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @else
                <br>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" rows="4">{{  $product->description  }}</textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>

              <input type="hidden" name="id" value="{{ $product->id }}">


              <button type="submit" class="btn btn-primary mr-2">Save</button>
              <a href="{{ route('products') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
