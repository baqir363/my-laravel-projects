<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    @include('admin.css')

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        .div_deg{
            padding: 10px;
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>Update Food</h1>
            <form action="{{url('edit_food',$food->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="div_deg">
                    <label for="">Food Title</label>
                    <input type="text" name="title" value="{{$food->title}}" required>
                </div>

                <div class="div_deg">
                    <label for="">Food Details</label>
                    <textarea name="details">{{$food->details}}</textarea>
                </div>

                <div class="div_deg">
                    <label for="">Food Price</label>
                    <input type="text" name="price" value="{{$food->price}}" required>
                </div>

                <div class="dev_deg">
                    <label for="">Old Image</label>
                    <img width="150" src="food_img/{{$food->image}}" alt="">
                </div>

                <div class="div_deg">
                    <label for="">Change Image</label>
                    <input type="file" name="image">
                </div>

                <div class="div_deg">
                    <input type="submit" value="Update Food" class="btn btn-warning">
                </div>
            </form>

          </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>
