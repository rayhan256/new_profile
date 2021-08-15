@extends('frontend/layouts/main', ['content' => 'portfolio'])
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($data->gallery as $item)
                                <div class="swiper-slide">
                                    <img src="data:image/png;base64,{{ $item->image }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $data->category->name }}</li>
                            <li><strong>Client</strong>: {{ $data->client }}</li>
                            <li><strong>Project date</strong>: {{ $data->project_date }}</li>
                            <li><strong>Project URL</strong>: <a href="{{ $data->url }}">{{ $data->url }}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Portfolio Detail</h2>
                        <p>
                            {{ $data->desc }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
