@include('clients.blocks.header')
@include('clients.blocks.banner')
<!-- Tour List Area start -->
<section class="tour-list-page py-100 rel z-1" style="padding-left:350px">
    <div class="container" >
        <div class="row">
            <div class="col-lg-9">
                @foreach ($myTours as $tour)
                    <div class="destination-item style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            @if ($tour->bookingStatus == 'b')
                                <span class="badge">Đợi xác nhận</span>
                            @elseif ($tour->bookingStatus == 'y')
                                <span class="badge bgc-pink">Sắp khởi hành</span>
                            @elseif ($tour->bookingStatus == 'f')
                                <span class="badge bgc-primary">Hoàn thành</span>
                            @elseif ($tour->bookingStatus == 'c')
                                <span class="badge" style="background-color: red">Đã hủy</span>
                            @endif


                            <img src="{{ asset('admin/assets/images/gallery-tours/' . $tour->images[0] . '') }}" style="weight: 100%"
                                alt="Tour List">
                        </div>
                        <div class="content">
                            <div class="destination-header">
                                <span class="location"><i
                                        class="fal fa-map-marker-alt"></i>{{ $tour->destination }}</span>
                                <div class="ratting">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($tour->rating && $i < $tour->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor

                                </div>
                            </div>
                            <h5><a
                                    href="{{ route('tour-booked', ['bookingId' => $tour->bookingId, 'checkoutId' => $tour->checkoutId]) }}">{{ $tour->title }}</a>
                            </h5>
                            <div class="truncate-3-lines">
                                {!! $tour->description !!}
                            </div>

                            <ul class="blog-meta">
                                <li><i class="far fa-clock"></i>{{ $tour->time }}</li>
                                <li><i class="far fa-user"></i> {{ $tour->numAdults + $tour->numChildren }} người</li>
                            </ul>
                            <div class="destination-footer">
                                <span class="price"><span>{{ number_format($tour->totalPrice, 0) }}</span>/vnđ</span>
                                @if ($tour->bookingStatus == 'f')
                                    <a href="{{ route('tour-detail', ['id' => $tour->tourId]) }}"
                                        class="theme-btn style-two style-three">
                                        @if ($tour->rating)
                                            <span data-hover="Đã đánh giá">Đã đánh giá</span>
                                        @else
                                            <span data-hover="Đánh giá">Đánh giá</span>
                                        @endif
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Tour List Area end -->
@include('clients.blocks.footer')