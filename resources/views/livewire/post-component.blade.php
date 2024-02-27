@section('title', 'Posts')
<div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Latest News</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Latest News</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="block">
                    <div class="posts-view">
                        <div class="posts-view__list posts-list posts-list--layout--list">
                            <div class="posts-list__body">
                                @foreach($posts as $post)
                                <div class="posts-list__item">
                                    <div class="post-card post-card--layout--list post-card--size--nl">
                                        <div class="post-card__image">
                                            <a href="">
                                                <img src="{{ asset('images/posts').'/'.$post->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__info">
                                            <div class="post-card__category">
                                                <a href="">Special Offers</a>
                                            </div>
                                            <div class="post-card__name">
                                                <a href="">{{ $post->title }}</a>
                                            </div>
                                            <div class="post-card__date">{{ \Carbon\Carbon::create($post->created_at)->format('M d, Y') }}</div>
                                            <div class="post-card__content">
                                                {{ \Illuminate\Support\Str::of($post->text)->words(25) }}
                                            </div>
                                            <div class="post-card__read-more">
                                                <a href="{{ route('post-detail', ['id' => $post->id]) }}" class="btn btn-secondary btn-sm">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block block-sidebar block-sidebar--position--end">
                    <div class="block-sidebar__item">
                        <div class="widget-search">
                            <form class="widget-search__body">
                                <input class="widget-search__input" placeholder="Blog search..." type="text" autocomplete="off" spellcheck="false">
                                <button class="widget-search__button" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-aboutus widget">
                            <h4 class="widget__title">About Blog</h4>
                            <div class="widget-aboutus__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus,
                                eget viverra nulla sem vitae neque. Quisque id sodales libero.
                            </div>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-posts widget">
                            <h4 class="widget__title">Latest Posts</h4>
                            <div class="widget-posts__list">
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image">
                                        <a href="">
                                            <img src="images/posts/post-1-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name">
                                            <a href="">Philosophy That Addresses Topics Such As Goodness</a>
                                        </div>
                                        <div class="widget-posts__date">October 19, 2019</div>
                                    </div>
                                </div>
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image">
                                        <a href="">
                                            <img src="images/posts/post-2-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name">
                                            <a href="">Logic Is The Study Of Reasoning And Argument Part 2</a>
                                        </div>
                                        <div class="widget-posts__date">September 5, 2019</div>
                                    </div>
                                </div>
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image">
                                        <a href="">
                                            <img src="images/posts/post-3-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name">
                                            <a href="">Some Philosophers Specialize In One Or More Historical Periods</a>
                                        </div>
                                        <div class="widget-posts__date">August 12, 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-newsletter widget">
                            <h4 class="widget-newsletter__title">Our Newsletter</h4>
                            <div class="widget-newsletter__text">
                                Phasellus eleifend sapien felis, at sollicitudin arcu semper mattis. Mauris quis mi quis ipsum tristique lobortis. Nulla vitae est blandit rutrum.
                            </div>
                            <form class="widget-newsletter__form" action="">
                                <label for="widget-newsletter-email" class="sr-only">Email Address</label>
                                <input id="widget-newsletter-email" type="text" class="form-control" placeholder="Email Address">
                                <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
