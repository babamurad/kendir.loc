@section('title', 'Posts')
<div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('Home')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Latest News')}}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{__('Latest News')}}</h1>
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
                                            <a href="{{ route('post-detail', ['id' => $post->id]) }}">
                                                <img src="{{ asset('images/posts').'/'.$post->image }}" alt="{{ $post->title }}">
                                            </a>
                                        </div>
                                        <div class="post-card__info">
                                            <div class="post-card__category">
                                                <a href="{{ route('posts') }}">{{__('Posts')}}</a>
                                            </div>
                                            <div class="post-card__date">
                                                {{$post->authorPost->name}}
                                            </div>
                                            <div class="post-card__name">
                                                <a href="{{ route('post-detail', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                            </div>

                                            @if(session()->get('locale') != 'en')
{{--                                                <div class="post-card__date">{{ \Carbon\Carbon::create($post->created_at)->translatedFormat('F d, Y') }}</div>--}}
                                                <div class="post-card__date">{{ \Carbon\Carbon::create($post->created_at)->translatedFormat('F d, Y') }}</div>
                                            @else
                                                <div class="post-card__date">{{ \Carbon\Carbon::create($post->created_at)->Format('F d, Y') }}</div>
                                            @endif
                                            <div class="post-card__content">
                                                {!! \Illuminate\Support\Str::of($post->text)->words(25) !!}
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
                        <p>{{ $posts->links() }}</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block block-sidebar block-sidebar--position--end">
                    <div class="block-sidebar__item">
                        <div class="widget-search">
                            <form class="widget-search__body" wire:submit="search">
                                <input class="widget-search__input" placeholder="{{__('Blog search...')}}" type="text"
                                       autocomplete="off" spellcheck="false" wire:model.live="searchTerm">
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
                            <h4 class="widget__title">{{__('about-page')}}</h4>
                            <div class="widget-aboutus__text">
                                {!! __('blog-text') !!}
                            </div>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-posts widget">
                            <h4 class="widget__title">{{__('Latest Posts')}}</h4>
                            <div class="widget-posts__list">
                                @foreach($latestPosts as $latestPost)
                                    <div class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="{{ route('post-detail', ['id' => $latestPost->id]) }}">
                                                <img src="{{ asset('images/posts'.'/'.$latestPost->image) }}" alt="{{ $latestPost->title }}">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="{{ route('post-detail', ['id' => $latestPost->id]) }}">{{ $latestPost->title }}</a>
                                            </div>
                                            <div class="widget-posts__date">{{ \Carbon\Carbon::create($latestPost->created_at)->format('F d, Y') }}</div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
