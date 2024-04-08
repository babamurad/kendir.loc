
<div>
    @section('title', __('Roof'))
    <div class="container">
        <div class="row">
            @foreach($roofs as $roof)
                <div class="col-sm-3 mt-3">
                    <a href="#">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-img-top">
                                    <img class="mx-auto w-100" src="{{ asset('images/roof/' . $loop->index+1 . 'roof.jpg') }}" alt="">
                                </div>
                                <div class="card-title text-center">{{ $roof['title'] }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <hr>
        <button id="btn" data-livewire-id="123" data-value="{{ $product->name . ' - bahasy: ' . $product->sale_price }}">Click me</button>
        <p id="output"></p>
        <p id="arr" data-value=""></p>
@push('roof')
<script>
    $('#btn').on('click', function() {
        const value = $(this).data('value');
        // Вывод значения на странице
        $('#output').text(value);
        //$('#arr').text(value);
        //jquery как при клике вывести массив данных из livewire
    });
</script>
@endpush


    </div>
</div>
