<div>
    @section('title', __('Login/Register'))
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>My Account</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">Login</h3>
                            @include('components.alerts')
                            <form wire:submit="login">
                                @csrf
                                <div class="form-group">
                                    <label class="required-field">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" wire:model="email">
                                    @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                                    @error('password') <p class="text-danger">{{$message}}</p> @enderror
                                    <small class="form-text text-muted">
                                        <a href="">Forgotten Password</a>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                                <span class="form-check-input input-check">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input" type="checkbox" id="login-remember">
                                                        <span class="input-check__box"></span>
                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                        <label class="form-check-label" for="login-remember">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0 mx-auto">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Register</h3>
                            @include('components.alerts')
                            <form wire:submit="registerUser">
                                <div class="form-group">
                                    <label class="">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" wire:model="name">
                                    @error('name') <span>{{ session('error') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" wire:model="email">
                                    @error('email') <span>{{ session('error') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                                    @error('password') <span>{{ session('error') }}</span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
