<div>
    <!-- Be present above all else. - Naval Ravikant -->

    <div class="item_details">
        <div class="card item_details_image_box">
            <img src="{{ asset('items_photo/' . $itemdetails->image) }}" class="card-img-bottom item_details_image"
                alt="Camera" />
        </div>

        <div class="user_details_item">
            <div class="card text-bg-light mb-3 item_details_user"">
                <div class="card-header">User</div>
                <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" fill="currentColor"
                        class="bi bi-person" viewBox="0 0 16 16">
                        {{-- <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg> --}}
                        <div class="profile_image_holder">

                            <img src="{{ asset('profile_photo/' . $itemdetails->user->profile_image) }}"
                                class="profile_image" alt="Profile Image" />
                        </div>


                        {{ $itemdetails->user->first_name }} {{ $itemdetails->user->last_name }}
                        <section>
                            <span>Since {{ $itemdetails->user->created_at }}</span>
                            <span>verified</span>
                        </section>
                        <section>
                            <p>Contact</p>
                            <span>{{ $itemdetails->user->phone_number }}</span> <br />
                            <span>{{ $itemdetails->user->email }}</span>
                        </section>
                </div>
            </div>

            <div class="card text-bg-light mb-3 item_details_user"">
                <div class="card-header">Category</div>
                <div class="card-body">
                    <span>{{ $itemdetails->category->category }}</span>
                </div>
            </div>

            <div class="card text-bg-light mb-3 item_details_user"">
                <div class="card-header">Location</div>
                <div class="card-body" class="item_det_loc_holder"
                    style="background-image: url('{{ asset('images/item_image.jpeg') }}'); background-size: cover; background-position: center;">

                    <center class="it_detail_holder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt ite_details_loc_icon" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <span class="ite_details_loc_name">{{ $itemdetails->location->name }}</span>

                    </center>
                </div>

            </div>

        </div>

    </div>

    {{-- main div --}}
    <div class="row row-cols-1 row-cols-md-3 g-4 item_details_details_card">
        <div class="col">
            <div class="card h-100 item_details_details_cards">
                <div class="card-body">
                    <span class="product_datelocation">
                        <p>{{ $itemdetails->location->name }}</p>
                        <p>{{ $itemdetails->created_at }}</p>
                    </span>
                    <h5 class="card-title">{{ $itemdetails->name }}</h5>
                    <h6 class="price">TZS {{ $itemdetails->price }}</h6>
                    <span class="product_datelocation">
                        Buy with market kiganjani
                    </span>
                </div>

            </div>
        </div>
    </div>
    {{-- end of main div --}}


    {{-- chating --}}
    @if (@session('user_id'))
        <div class="card text-bg-light mb-3 item_details_cahts"">
            <div class="card-body">
                <div class="profile_image_holder">

                    <img src="{{ asset('profile_photo/' . $itemdetails->user->profile_image) }}" class="profile_image"
                        alt="Profile Image" />
                </div> {{ $itemdetails->user->first_name }} {{ $itemdetails->user->last_name }}
                <section>
                    <span>member since {{ $itemdetails->user->created_at }}</span>
                </section>
            </div>
            <form class="" action="{{ route('chat_check') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea id="form2Example1" name="message" class="form-control" rows="3" placeholder="Write message" required></textarea>
                    <input type="hidden" value="{{ $itemdetails->id }}" name="item_id" />
                </div>

                <button data-mdb-ripple-init type="submit"
                    class="btn btn-success btn-block mb-4 send_message_btn">send</button>
            </form>
        </div>
    @endif
    {{-- end of chating --}}

</div>
