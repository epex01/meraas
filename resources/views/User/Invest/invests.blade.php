@extends('Layouts.user')

@section('title')
    {{ __($page_title) }}
@endsection

@section('content')

<div class="row layout-top-spacing">
  <div class="col-xl-12">

      {{-- Warning Alert --}}
      @if(session()->has('errors'))
          <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4 shadow-sm" role="alert" style="border-color: transparent;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <svg data-dismiss="alert"></svg>
              </button>
              <i class="fas fa-warning me-2"></i>
              <strong>Warning!</strong> {{ session()->get('errors') }}
          </div>
      @endif

      {{-- Success Alert --}}
      @if(session()->has('success'))
          <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4 shadow-sm" role="alert" style="border-color: transparent; background-color:#ffffff;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <svg data-dismiss="alert"></svg>
              </button>
              <i class="fas fa-check-circle me-2 text-success"></i>
              <strong>Success!</strong> {{ session()->get('success') }}
          </div>
      @endif

  </div>
</div>

{{-- Investment Plans Section --}}
<section class="mt-4">
    <div class="container-fluid p-4">
        <header class="text-center mb-5">
            <h1 class="fw-bold text-primary">Investment Plans</h1>
            <p class="text-muted col-md-8 mx-auto">
                Choose a plan that fits your investment strategy and financial goals.
            </p>
        </header>

        <div class="row g-4">
            @forelse ($plans as $plan)
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card plan-card h-100 border-0 rounded-4 overflow-hidden" data-plan-container="{{ $plan->id }}">
                    <img src="{{ $plan->image ?? 'https://via.placeholder.com/800x400?text=Investment+Plan' }}" 
                         class="card-img-top" alt="{{ $plan->name }}">

                    <div class="card-body d-flex flex-column p-4">
                        <h3 class="card-title h4 fw-bold text-center text-dark mb-3">{{ $plan->name }}</h3>

                        {{-- Toggle Buttons --}}
                        <div class="my-3">
                            <div class="nav nav-pills justify-content-center bg-light rounded-pill p-1">
                                <button data-plan-toggle="{{ $plan->id }}" data-plan-type="shares"
                                    class="plan-toggle-button nav-link w-50 active small fw-semibold text-dark">
                                    Shares
                                </button>
                                <button data-plan-toggle="{{ $plan->id }}" data-plan-type="contract"
                                    class="plan-toggle-button nav-link w-50 small fw-semibold text-dark">
                                    Contract
                                </button>
                            </div>
                        </div>

                        {{-- Shares Details --}}
                        <div class="plan-details flex-grow-1" data-plan-details="{{ $plan->id }}" data-plan-type="shares">
                            <div class="text-center my-3">
                                <p class="text-muted small mb-1">Minimum Shares</p>
                                <p class="display-6 fw-bold text-primary">${{ $plan->min }} - ${{ $plan->max }}</p>
                            </div>
                            <hr class="border-light my-3">
                            <ul class="list-unstyled d-grid gap-2 small">
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Rate of Return:</strong> {{ $plan->roi }}%</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Duration:</strong> {{ $plan->duration }}</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Activation:</strong> Instant</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Contract Details --}}
                        <div class="plan-details d-none flex-grow-1" data-plan-details="{{ $plan->id }}" data-plan-type="contract">
                            <div class="text-center my-3">
                                <p class="text-muted small mb-1">Contract Shareholding</p>
                                <p class="display-6 fw-bold text-primary">${{ $plan->max }}</p>
                            </div>
                            <hr class="border-light my-3">
                            <ul class="list-unstyled d-grid gap-2 small">
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Rate of Return:</strong> {{ $plan->roi * 2 }}%</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Lock-in Period:</strong> 365 days</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <span><strong>Agent Pay:</strong> {{ rand(2,10) }}%</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Action Button --}}
                        <div class="mt-auto pt-3">
                            <a href="{{ url('/user/invests/preview/'.$plan->id) }}" 
                               class="btn btn-primary w-100 fw-bold py-2 rounded-pill shadow-sm">
                                Select Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="text-center text-info fs-5 py-5">No Investment Plans Available</div>
            @endforelse
        </div>

        <footer class="text-center mt-5">
            <p class="text-muted small mb-0">All investments involve risk. Please consult a financial advisor before investing.</p>
        </footer>
    </div>
</section>

@endsection


@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.plan-toggle-button');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const planId = this.dataset.planToggle;
            const targetType = this.dataset.planType;
            
            const container = document.querySelector(`[data-plan-container="${planId}"]`);
            if (!container) return;

            const buttons = container.querySelectorAll(`[data-plan-toggle="${planId}"]`);
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const details = container.querySelectorAll(`[data-plan-details="${planId}"]`);
            details.forEach(detail => {
                if (detail.dataset.planType === targetType) detail.classList.remove('d-none');
                else detail.classList.add('d-none');
            });
        });
    });
});
</script>

<style>
/* Sleek card effects */
.plan-card {
    background: #fff;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border: 1px solid #f0f0f0;
}
.plan-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 24px rgba(0,0,0,0.15);
}

/* Toggle buttons */
.plan-toggle-button.active {
    background-color: #004F63 !important;
    color: #fff !important;
    border-radius: 50px;
}

/* Button hover */
.btn-primary {
    background-color: #004F63;
    border: none;
}
.btn-primary:hover {
    background-color: #046F84;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}
</style>
@endsection
