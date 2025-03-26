@include('clients.blocks.header')
@include('clients.blocks.banner_search')


<!-- Tour Grid Area start -->
<section class="tour-grid-page py-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                <div class="shop-sidebar">
                    <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="widget-title">Filter by Price</h6>
                        <div class="price-filter-wrap">
                            <div class="price-slider-range"></div>
                            <div class="price">
                                <span>Price </span>
                                <input type="text" id="price" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="widget-title">By Activities</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="ByActivities"
                                    id="activity1">
                                <label for="activity1">Sea Beach <span>18</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity2">
                                <label for="activity2">Car Parking <span>29</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity3">
                                <label for="activity3">Laundry Service <span>23</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity4">
                                <label for="activity4">Outdoor Seating <span>25</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity5">
                                <label for="activity5">Reservations <span>26</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity6">
                                <label for="activity6">Smoking Allowed <span>28</span></label>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">By Reviews</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="ByReviews" id="review1">
                                <label for="review1">
                                    <span class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByReviews" id="review2">
                                <label for="review2">
                                    <span class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt white"></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByReviews" id="review3">
                                <label for="review3">
                                    <span class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star-half-alt white"></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByReviews" id="review4">
                                <label for="review4">
                                    <span class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star-half-alt white"></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByReviews" id="review5">
                                <label for="review5">
                                    <span class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star white"></i>
                                        <i class="fas fa-star-half-alt white"></i>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget-languages" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="widget-title">By Languages</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="ByLanguages"
                                    id="language1">
                                <label for="language1">American</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language2">
                                <label for="language2">English</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language3">
                                <label for="language3">German</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language4">
                                <label for="language4">Japanese</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language5">
                                <label for="language5">Vietnamese</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language6">
                                <label for="language6">French</label>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="widget-title">Duration</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="Duration"
                                    id="duration1">
                                <label for="duration1">0 - 2 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration2">
                                <label for="duration2">2 - 4 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration3">
                                <label for="duration3">4 - 8 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration4">
                                <label for="duration4">Fulda (+8 hours)</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration5">
                                <label for="duration5">Multi days</label>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="widget-title">Popular Tours</h6>
                        <div class="destination-item tour-grid style-three bgc-lighter">
                            <div class="image">
                                <span class="badge">10% Off</span>
                                <img src="{{ asset('clients/assets/images/widgets/tour1.jpg') }}" alt="Tour">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                        Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <span>(4.8)</span>
                                    </div>
                                </div>
                                <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                            </div>
                        </div>
                        <div class="destination-item tour-grid style-three bgc-lighter">
                            <div class="image">
                                <img src="{{ asset('clients/assets/images/widgets/tour1.jpg') }}" alt="Tour">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                        Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <span>(4.8)</span>
                                    </div>
                                </div>
                                <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget widget-cta mt-30" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content text-white">
                        <span class="h6">Explore The World</span>
                        <h3>Best Tourist Place</h3>
                        <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Explore Now">Explore Now</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('clients/assets/images/widgets/cta-widget.png') }}" alt="CTA">
                    </div>
                    <div class="cta-shape"><img src="{{ asset('clients/assets/images/widgets/cta-shape2.png') }}"
                            alt="Shape"></div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-shorter rel z-3 mb-20">
                    <ul class="grid-list mb-15 me-2">
                        <li><a href="#"><i class="fal fa-border-all"></i></a></li>
                        <li><a href="#"><i class="far fa-list"></i></a></li>
                    </ul>
                    <div class="sort-text mb-15 me-4 me-xl-auto">
                        34 Tours found
                    </div>
                    <div class="sort-text mb-15 me-4">
                        Sort By
                    </div>
                    <select>
                        <option value="default" selected="">Short By</option>
                        <option value="new">Newness</option>
                        <option value="old">Oldest</option>
                        <option value="hight-to-low">High To Low</option>
                        <option value="low-to-high">Low To High</option>
                    </select>
                </div>

                <div class="tour-grid-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list1.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                            Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise trip by Boat's in Bali, Indonesia</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list2.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list3.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                            Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list4.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list5.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list6.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                            Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list7.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list8.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list9.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                            Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list10.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list11.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome,
                                            Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="{{ asset('clients/assets/images/destinations/tour-list12.jpg') }}"
                                        alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                            Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a>
                                    </h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        1
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Tour Grid Area end -->


<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                            popular experience you’ll remember</p>
                    </div>
                    <form class="newsletter-form mb-15" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Subscribe">Subscribe</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <p>No credit card requirement. No commitments</p>
                </div>
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/newsletter/newsletter-bg-image.png') }}"
                        alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover"
                    style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end -->
<!-- footer area start -->
<footer class="main-footer footer-two bgp-bottom bgc-black rel z-15 pt-100 pb-115"
    style="background-image: url(assets/images/backgrounds/footer-two.png);">
    <div class="widget-area">
        <div class="container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-2">
                <div class="col col-small" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-text">
                        <div class="footer-logo mb-40">
                            <a href="index.html"><img src="{{ asset('clients/assets/images/logos/logo.png') }}"
                                    alt="Logo"></a>
                        </div>
                        <div class="footer-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd"
                                style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links ms-sm-5">
                        <div class="footer-title">
                            <h5>Services</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="destination-details.html">Best Tour Guide</a></li>
                            <li><a href="destination-details.html">Tour Booking</a></li>
                            <li><a href="destination-details.html">Hotel Booking</a></li>
                            <li><a href="destination-details.html">Ticket Booking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links ms-md-4">
                        <div class="footer-title">
                            <h5>Company</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="about.html">About Company</a></li>
                            <li><a href="blog.html">Community Blog</a></li>
                            <li><a href="contact.html">Jobs and Careers</a></li>
                            <li><a href="blog.html">latest News Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links ms-lg-4">
                        <div class="footer-title">
                            <h5>Destinations</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="destination-details.html">African Safaris</a></li>
                            <li><a href="destination-details.html">Alaska & Canada</a></li>
                            <li><a href="destination-details.html">South America</a></li>
                            <li><a href="destination-details.html">Middle East</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-6 col-10 col-small" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-contact">
                        <div class="footer-title">
                            <h5>Get In Touch</h5>
                        </div>
                        <ul class="list-style-one">
                            <li><i class="fal fa-map-marked-alt"></i> 578 Level, D-block 45 Street Melbourne, Australia
                            </li>
                            <li><i class="fal fa-envelope"></i> <a href="mailto:supportrevelo@gmail.com">supportrevelo
                                    @gmail.com</a></li>
                            <li><i class="fal fa-phone-volume"></i> <a href="callto:+88012334588">+880 (123) 345
                                    88</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-transparent pt-20 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="copyright-text text-center text-lg-start">
                        <p>@Copy 2024 <a href="index.html">Ravelo</a>, All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-end">
                    <ul class="footer-bottom-nav">
                        <li><a href="about.html">Terms</a></li>
                        <li><a href="about.html">Privacy Policy</a></li>
                        <li><a href="about.html">Legal notice</a></li>
                        <li><a href="about.html">Accessibility</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

</div>
<!--End pagewrapper-->


<!-- Jquery -->
<script src="{{ asset('clients/assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('clients/assets/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src="{{ asset('clients/assets/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('clients/assets/js/slick.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('clients/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('clients/assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src="{{ asset('clients/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Jquery UI -->
<script src="{{ asset('clients/assets/js/jquery-ui.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('clients/assets/js/isotope.pkgd.min.js') }}"></script>
<!--  AOS Animation -->
<script src="{{ asset('clients/assets/js/aos.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('clients/assets/js/script.js') }}"></script>

</body>

<!-- Mirrored from webtendtheme.net/html/2024/ravelo/tour-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 09:28:07 GMT -->

</html>
