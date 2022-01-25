@extends('admin.layouts.master')
@section('title')
صفحه ساخت
@endsection
@section('content')

<div class="container border p-3 m-5">
    <div class="row">
        <div class="col">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="email">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">color</label>
                  <input type="text" class="form-control" placeholder="Enter color" id="color" name="color">
                </div>
                <div class="form-group">
                  <label for="email">price</label>
                  <input type="text" class="form-control" placeholder="Enter price" id="price" name="price">
                </div>
                <div class="form-group">
                  <label for="email">number</label>
                  <input type="text" class="form-control" placeholder="Enter number" id="number" name="number">
                </div>
                <div class="form-group">
                  <label for="email">status</label>
                  <input type="text" class="form-control" placeholder="Enter status" id="status" name="status">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">body</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
