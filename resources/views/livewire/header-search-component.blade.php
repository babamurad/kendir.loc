<div class="site-header__search">
    <div class="search search--location--header ">
        <div class="search__body">
            <form class="search__form" action="{{ route('product.search') }}">
                <select class="search__categories" aria-label="Category" name="catId">
                    <option value="" selected>All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                    @endforeach
                </select>
                <input class="search__input" name="q" placeholder="Search over 10,000 products"
                       aria-label="Site search" type="text" autocomplete="off">
                <button class="search__button search__button--type--submit" type="submit">
                    <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#search-20"></use>
                    </svg>
                </button>
                <div class="search__border"></div>
            </form>
            <div class="search__suggestions suggestions suggestions--location--header"></div>
        </div>
    </div>
</div>
