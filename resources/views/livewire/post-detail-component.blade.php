@section('title', $post->title)
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('posts') }}">Posts</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="block post post--layout--classic">
                    <div class="post__header post-header post-header--layout--classic">
                        <div class="post-header__categories">
                            <a href="">Latest news</a>
                        </div>
                        <h1 class="post-header__title">{{ $post->title }}</h1>
                        <div class="post-header__meta">
                            <div class="post-header__meta-item">By <a href="">{{ $author[0]->name }}</a></div>
                            <div class="post-header__meta-item"><a href="">{{ \Carbon\Carbon::create($post->created_at)->format('F d, Y') }}</a></div>
                            <div class="post-header__meta-item"><a href="">4 Comments</a></div>
                        </div>
                    </div>
                    <div class="post__featured">
                        <a href="">
                            <img src="{{ asset('images/posts'.'/'.$post->image) }}" alt="{{$post->title}}">
                        </a>
                    </div>
                    <div class="post__content typography ">
                        {{ $post->text }}
                    </div>
                    <div class="post__footer">
                        <div class="post-author">
                            <div class="post-author__avatar">
                                <a href=""><img src="{{ asset('images/avatars/avatar-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-author__info">
                                <div class="post-author__name">
                                    <a href="">{{ $author[0]->name }}</a>
                                </div>
                                <div class="post-author__about">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                    tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="post__section">
                        <h4 class="post__section-title">Related Posts</h4>
                        <div class="related-posts">
                            <div class="related-posts__list">
                                @foreach($posts as $rpost)
                                <div class="related-posts__item post-card post-card--layout--related">
                                    <div class="post-card__image">
                                        <a href="">
                                            <img src="{{ asset('images/posts'.'/'.$rpost->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-card__info">
                                        <div class="post-card__name">
                                            <a href="">{{ $rpost->title }}</a>
                                        </div>
                                        <div class="post-card__date">{{ \Carbon\Carbon::create($rpost->created_at)->format('F d, Y') }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
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
                                @foreach($lposts as $lpost)
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image">
                                        <a href="{{ route('post-detail', ['id' => $lpost->id]) }}">
                                            <img src="{{ asset('images/posts'.'/'.$lpost->image) }}" alt="{{$lpost->title}}">
                                        </a>
                                    </div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name">
                                            <a href="{{ route('post-detail', ['id' => $lpost->id]) }}">{{$lpost->title}}</a>
                                        </div>
                                        <div class="widget-posts__date">{{ \Carbon\Carbon::create($lpost->created_at)->format('F d, Y') }}</div>
                                    </div>
                                </div>
                                @endforeach
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
