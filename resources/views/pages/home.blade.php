@extends('layouts.app')

@section('title')
    Coding Major Home
@endsection

@section('content')
<div class="page-content page-home">
    <section class="codingmajor-carousel">
    <div class="container">
        <div class="row">
        <div class="col-lg-12" data-aos="zoom-in">
            <div
            id="codingmajorCarousel"
            class="carousel slide"
            data-ride="carousel"
            >
            <ol class="carousel-indicators">
                <li
                class="active"
                data-target="#codingmajorCarousel"
                data-slide-to="0"
                ></li>
                <li data-target="#codingmajorCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img
                    src="/images/banner.jpg"
                    alt="Carousel Image"
                    class="d-block w-100"
                />
                </div>
                <div class="carousel-item">
                <img
                    src="/images/banner.jpg"
                    alt="Carousel Image"
                    class="d-block w-100"
                />
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- 3 3 10 Slicing Landing Page Section Trend Categories Sytling -->
    <section class="codingmajor-trend-categories">
    <div class="container">
        <div class="row">
        <div class="col-12" data-aos="fade-up">
            <h5>Course Categories</h5>
        </div>
        </div>
        <div class="row">
            @php $incrementCategory = 0 @endphp
             @forelse ($categories as $category)
            <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="{{ $incrementCategory += 100}}"
        >
            <!-- Refer ke halaman categories (belum ada) -->
            <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
            <div class="categories-image">
                <img src="{{ Storage::url($category->photo) }}" alt="" class="pt-3" />
            </div>
            <p class="categories-text mt-5">{{ $category->name }}</p>
            </a>
        </div>
     @empty
         <div class="col-12 text-center py-5" 
            data-aos="fade-up"
            data-aos-delay="100"> No Categories Found</div>
     @endforelse
        </div>
        </div>
    </div>
    </section>

    <!-- Course Catalog -->
    <section class="codingmajor-new-products">
    <div class="container">
        <div class="row">
        <div class="col-12" data-aos="fade-up">
            <h5>Course Catalog</h5>
        </div>
        </div>
        <div class="row">
            @php $incrementCourse = 0 @endphp
            @forelse ($courses as $course)
            <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="{{ $incrementCourse += 100}}"
        >
            <a href="{{ route('detail', $course->slug) }}" class="component-products d-block">
            <div class="products-thumbnail">
                <div
                class="products-image"
                style="
                    @if($course->galleries->count()) 
                        background-image: url('{{ Storage::url($course->galleries->first()->photos) }}')
                    @else
                        background-color: #eee
                    @endif
                "
                ></div>
            </div>
            <div class="products-text">
                {{ $course->name }}
            </div>
</a
            >  
          </div>
        @empty
             <div class="col-12 text-center py-5" 
            data-aos="fade-up"
            data-aos-delay="100"> No Courses Found</div>
        @endforelse
        </div>
    </div>
    </section>
</div>
    <!-- Bottom Banner -->
    <section class="codingmajor-bottom-banner">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 mt-5" data-aos="zoom-in">
            <div class="bottom-banner">
            <img
                src="/images/bt-b.jpg"
                alt=""
                class="d-block w-100"
            />
            </div>
        </div>
        </div>
    </div>
    </section>

@endsection