@include('clients.blocks.header')
@include('clients.blocks.banner')

        <!-- Contact Info Area start -->
        <section class="contact-info-area pt-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-30">
                                <h2>Hãy nói chuyện với các hướng dẫn viên du lịch chuyên nghiệp của chúng tôi</h2>
                            </div>
                            <p>Đội ngũ hỗ trợ tận tâm của chúng tôi luôn sẵn sàng hỗ trợ bạn giải quyết mọi thắc mắc hoặc vấn đề, cung cấp các giải pháp nhanh chóng và phù hợp để đáp ứng nhu cầu của bạn.</p>
                            <div class="features-team-box mt-40">
                                <h6>85+ Thành viên nhóm chuyên gia</h6>
                                <div class="feature-authors">
                                    <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author4.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author5.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author6.jpg') }}" alt="Author">
                                    <img src="{{ asset('clients/assets/images/features/feature-author7.jpg') }}" alt="Author">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <div class="content">
                                        <h5>Cần trợ giúp và hỗ trợ</h5>
                                        <div class="text"><i class="far fa-envelope"></i> <a href="mailto:tinhdev9@gmail.com">tinhdev9@gmail.com</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <div class="content">
                                        <h5>Cần bất kỳ việc khẩn cấp nào</h5>
                                        <div class="text"><i class="far fa-phone"></i> <a href="callto:+0001234588">+000 (123) 45 88</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="content">
                                        <h5>Nghệ An</h5>
                                        <div class="text"><i class="fal fa-map-marker-alt"></i> Quang Trung, TP Vinh, Nghệ An</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="content">
                                        <h5>Trường Đại học Vinh</h5>
                                        <div class="text"><i class="fal fa-map-marker-alt"></i> 182 Lê Duẩn, TP Vinh, Nghệ An</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info Area end -->
        
        
        <!-- Contact Form Area start -->
        <section class="contact-form-area py-70 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                            <form id="contactForm" class="contactForm" name="contactForm" action="" method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="section-title">
                                    <h2>Liên hệ</h2>
                                </div>
                                <p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
                                <div class="row mt-35">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Họ và tên</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Randy J. Thomas" value="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Số điện thoại</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone" value="" required data-error="Please enter your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Địa chỉ Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" value="" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Nội dung</label>
                                            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn style-two">
                                                <span data-hover="Gửi bình luận">Gửi bình luận</span>
                                                <i class="fal fa-arrow-right"></i>
                                            </button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('clients/assets/images/contact/contact1.jpg') }}" alt="Contact">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('clients/assets/images/contact/contact2.jpg') }}" alt="Contact">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('clients/assets/images/contact/contact3.jpg') }}" alt="Contact">
                                </div>
                            </div>
                            <div class="circle-logo">
                                <img src="{{ asset('clients/assets/images/contact/icon.png') }}" alt="Logo">
                                <span class="title h2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->
        
        
        <!-- Contact Map Start -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.0993534026366!2d105.69190067468274!3d18.65953708246116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1743088270892!5m2!1svi!2s"
            
                style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- Contact Map End -->

@include('clients.blocks.footer')