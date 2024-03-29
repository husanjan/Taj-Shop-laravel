@extends('_layouts.front.app')

@section('content')

<div class="page-content mt-7 mb-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="toolbox">
                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <label for="sortby">Сортировать по:</label>
                            <div class="select-custom">
                                <select name="sortby" id="sortby" class="form-control">
                                    <option value="popularity" selected="selected">популярный вещи</option>
                                    <option value="rating">От А до Я</option>
                                    <option value="rating">От Я до А</option>
                                    <option value="rating">Новинки выше</option>
                                    <option value="rating">Дорогие выше</option>
                                    <option value="date">Дешевие выше</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products mb-3">
                    <div class="row justify-content-center">
                        @foreach($products as $product)
                            @foreach($product as $item)
                                @include("_components.products.front.product", ["product" => $item])
                            @endforeach
                        @endforeach
                    </div>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item-total">of 6</li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            @include('_components.filter.product_filter')

        </div>
    </div>
</div>
@endsection