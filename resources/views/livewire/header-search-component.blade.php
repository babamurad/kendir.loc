<div class="site-header__search">
    <div class="search search--location--header ">
        <div class="search__body">
            <form class="search__form" action="{{ route('product.search') }}">
                <select class="search__categories" aria-label="Category" name="catId">
                    <option value="" selected>{{__('All Categories')}}</option>
                    @foreach($categories as $category)
                        @if($category->parent_id == 0)
                        <option class="font-weight-bold" value="{{ $category->id }}" disabled>{{ $category->name }} </option>
                            @if($category->children->count() > 0)
                                @foreach($category->children as $subcategory)
                                <option value="{{ $subcategory->id }}"> -- {{ $subcategory->name }} </option>
                                @endforeach
                            @endif
                        @endif
                    @endforeach
                </select>

                <input class="search__input" name="q" placeholder="{{__('Search products')}}"
                       aria-label="Site search" type="text" autocomplete="off">
                <button class="search__button search__button--type--submit" type="submit">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{ asset('images/sprite.svg#search-20') }}"></use>
                    </svg>
                </button>
                <div class="search__border"></div>
            </form>
            <div class="search__suggestions suggestions suggestions--location--header"></div>
        </div>
    </div>
</div>
