<div>
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
                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0 mx-auto">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Register</h3>
                            @include('components.alerts')
                            <form wire:submit="registerUser">
                                <div class="form-group">
                                    <label class="required-field">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" wire:model="name">
                                    @error('name') <span>{{ session('error') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" wire:model="email">
                                    @error('email') <span>{{ session('error') }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field">Password</label>
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
