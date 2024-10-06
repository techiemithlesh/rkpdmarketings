@php
    use App\Models\Testimonial; 
    $testimonials = Testimonial::all();
@endphp

<style>
    .testimonial-card {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

     .testimonial-content {
        flex: 1;
        padding-right: 20px;
    } 
    
    .testimonial-description {
        font-style: italic;
        margin-bottom: 15px;
    } 
    
    .testimonial-footer {
        display: flex;
        justify-content: space-between;
    } 
    
    .rating {
        display: flex;
        color: #FFD700;
    } 
    
    .client-info {
        display: flex;
        align-items: center;
    } 
    
    .client-info span {
        margin-left: 10px;
    } 
    
    .testimonial-image {
        flex-shrink: 0;
    } 
    
    .testimonial-image img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="testimonial1-section-area sp6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="testimonial-header heading2 text-center">
                    <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ asset('frontend/assets/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
                    <h2 class="text-anime-style-3">What Our Client Say</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">Don't just take our word for it. Hear what our satisfied clients <br class="d-md-block d-none"> have to say about their experience partnering with RKPDMARKETINGS</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="testimonials-slider-area owl-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p class="testimonial-description">"{{ $testimonial->description }}"</p>
                            <div class="testimonial-footer">
                                <div class="rating">
                                    @for($i = 1; $i <= $testimonial->rating_count; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                    @for($i = $testimonial->rating_count + 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star" style="color: #d3d3d3;"></i>
                                    @endfor
                                </div>
                                <div class="client-info">
                                   
                                    {{-- <img src="{{ asset('frontend/assets/img/icons/google.svg') }}" alt="Google"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{ asset($testimonial->img) }}" alt="{{ $testimonial->client_name }}">
                            <span>{{ $testimonial->client_name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
