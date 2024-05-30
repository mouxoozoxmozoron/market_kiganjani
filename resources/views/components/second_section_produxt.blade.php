<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <div class="row row-cols-1 row-cols-md-3 g-4 content_cards">

        @foreach ($items as $item)
            <div class="col">
                <div class="card h-100 product_card">
                    <a href="/item_details/{{$item->id}}" class="item_link">
                        <img src="{{ asset('items_photo/' . $item->image) }}" class="card-img-top item_image "
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <span class="product_datelocation">
                                <p>{{ $item->location->name }}</p>

                                <p>{{ $item->created_at }}</p>
                            </span>
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <h6 class="price">TZS {{ $item->price }}</h6>

                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
