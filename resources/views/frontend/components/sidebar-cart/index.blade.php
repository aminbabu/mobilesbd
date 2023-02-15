<!-- side product compare start -->
<section class="comparison-sidebar position-relative">
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        aria-labelledby="compare-sidebar-label" id="compare-sidebar">
        <div class="offcanvas-header">
            <h2 id="compare-sidebar-label">
                {{ __('Mobile Compare') }} <span class="badge rounded-pill bg-danger">3</span>
            </h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="products p-0 m-0">
                @for ($item = 0; $item < 3; $item++)
                    @include('frontend.components.sidebar-cart.inc.cart-item')
                @endfor
            </ul>

            <div class="comparison-sidebar-btn mt-3">
                <a href="mobiles.html" class="text-decoration-none commn-btn">
                    {{ __('Compare Now') }}
                    <i class="fas fa-long-arrow-alt-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="compare-trigger-btn position-fixed top-50 end-0 border border-end-0 shadow-sm"
        data-bs-toggle="offcanvas" href="#compare-sidebar" role="button" aria-controls="compare-sidebar">
        <i class="fas fa-balance-scale"></i>
    </div>
</section>
<!-- side product compare end -->
