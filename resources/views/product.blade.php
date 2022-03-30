@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-5 offset-md-4 card">
                    <div class="card-header text-center">{{ __('Product') }}</div>

                    <div class="card-body ">
                        <form action="/pp" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="brand">Product Name:</label>
                                <input type="text" class="form-control" id="" placeholder="Enter product name" name="product">
                                <span class="text-danger">@error('product'){{$message}}@enderror</span>
                                <input type="hidden" name="brand_id"  value="" id="brandId">
                            </div>
                            <div class="form-group">

                                <label for="brand">Choose Brand:</label>
                                <select name="brand" id="brand">
                                    <option value="">Select</option>
                                    @foreach($brands as $brand)
                                      <option id="{{$brand->id}}" value="{{$brand->Bname}}">{{$brand->Bname}}</option>
                                    @endforeach

                                </select>
                                <span class="text-danger">@error('brand'){{$message}}@enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="brand">Unit Price:</label>
                                <input type="number" class="form-control" id="brand" placeholder="Enter Unit Price" name="price">
                                <span class="text-danger">@error('price'){{$message}}@enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="brand">Product Code:</label>
                                <input type="text" class="form-control" id="brand" placeholder="Enter product name" name="product_code">
                                <span class="text-danger">@error('product_code'){{$message}}@enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="brand">Manufacture Date:</label>
                                <input type="date" class="form-control" id="brand" placeholder="Enter Manufacture Date" name="manu_date">
                                <span class="text-danger">@error('manu_date'){{$message}}@enderror</span>

                            </div> <div class="form-group">
                                <label for="brand">Exp Date:</label>
                                <input type="date" class="form-control" id="brand" placeholder="Enter Exp Date" name="exp_date">
                                <span class="text-danger">@error('exp_date'){{$message}}@enderror</span>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script type='text/javascript'>
       document.getElementById('brand').addEventListener('change', function(evt) {
           var type = this.selectedOptions[0].id;
           console.dir(this);
           document.getElementById('brandId').setAttribute('value', type);

       });
   </script>

@endsection

