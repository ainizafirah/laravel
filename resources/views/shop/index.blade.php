@extends ('layouts.master')

@section ('title')

      Laravel Shopping Cart
      //<!-- takleh letak endsection -->

@section ('content')
  @foreach ($products ->chunk(3) as $productChunk)
  <div class="row">
    @foreach ($productChunk as $product)
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ $product ->imagePath }}" alt="..." class="img-responsive">
      <div class="caption">
        <h3>{{ $product->title}}</h3>
        <p class="description">{{ $product-> description}}</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM{{ $product->price}}</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>
    @endforeach
  </div>
  @endforeach
@endsection
  <!-- <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
        	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>

</div>
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>Product Title</h3>
        <p class="description">Bananas are rich in fiber, antioxidants and several nutrients. A medium-sized banana has about 105 calories.</p>
        <p>
          <div class="clearfix">
            <div class="pull-left price">RM1</div>
          <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </p>
      </div>
    </div>
  </div>
</div>


@endsection
 -->