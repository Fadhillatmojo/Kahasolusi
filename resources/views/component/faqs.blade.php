<div id="faqs" class="portfolios-area overflow-hidden default-padding">
    <div class="container-faqs-title">
        <h5>GET TO KNOW US</h5>
        <h2>Frequently Asked Question</h2>
    </div>
    <!-- Start Faq
    ============================================= -->
    <div class="faq-area">
        <div class="container">
            <div class="row">
                @foreach ($faqs as $faqCollection)
                <div class="col">
                    @foreach ($faqCollection as $faq)
                    <div class="faq col-lg-12" style="">
                        <div class="faq-style-one">
                            <div class="faq-content">
                                <div class="accordion" id="accordionExample{{ $faq->faq_id }}">
                                    {{-- a card --}}
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $faq->faq_id }}">
                                            <h4 class="mb-0 collapsed" data-toggle="collapse"
                                                data-target="#collapse{{ $faq->faq_id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $faq->faq_id }}">
                                                {{ $faq->faq_title }}
                                            </h4>
                                        </div>
                                        <div id="collapse{{ $faq->faq_id }}" class="collapse"
                                            aria-labelledby="heading{{ $faq->faq_id }}"
                                            data-parent="#accordionExample{{ $faq->faq_id }}">
                                            <div class="card-body">
                                                <p>
                                                    {{ $faq->faq_answer }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Faq -->
</div>