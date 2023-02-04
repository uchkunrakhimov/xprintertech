@extends('layouts.home')
@section('title', 'Xprinter - News')
@section('content')
    <section class="news-section">
        @include('components.global.banner')
        <div class="container mt-5xl">
            @include('components.global.navlink')
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                    <h2 class="title">Xprinter Cloud -- New Food Ordering Way</h2>
                    <p class="subtitle opacity-75 text-link">2020-04-22</p>
                    <div>
                        <img class="img-thumbnail"
                            src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15875244425612.jpg"
                            alt="Image not found">
                    </div>
                    <p class="description mt-3 font-500">
                        As an active experienced mini printer manufacturer in POS industry, we devoted to provide innovative
                        and
                        convenient POS solutions based on market demands.
                        In NRF 2020, we displayed our latest POS solutions integrated most advanced print technolgoies and
                        front-edge design.Our new receipt printer, XP-T890H,
                        was praised for its excellent compativity, supporting mainstream operation systems.Meanwhile, we
                        also
                        exhibited new mobile printer-XP-P424B, panel printers
                        and print heads, receiving numerous inquiries.
                    </p>
                </div>

                <div class="col-md-none col-lg-4 col-xl-4 col-xxl-4 global-card">
                    <div class="card">
                        <h4 class="card-title text-center mt-3">Related News</h4>
                        <a href="1" class="recently-products">
                            <img class="img-thumbnail"
                                src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15791695995757.jpg?imageView2/2/w/930/q/75/format/webp"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-title text-center font-500">Great Success on Computex 2019</p>
                            </div>
                        </a>
                        <a href="2" class="recently-products">
                            <img class="img-thumbnail"
                                src="https://img5541.weyesimg.com/uploads/www.xprintertech.com/images/15887281124375.jpg?imageView2/2/w/930/q/75/format/webp"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-title text-center font-500">New Retail Trend Driving Our Innovations in
                                    Euroshop 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
