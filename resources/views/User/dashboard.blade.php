@extends('Layouts.user')

@section('title')
    User Dashboard
@endsection

@section('content')
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500 Index"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100 Cash CFD"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR to USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }
                ],
                "showSymbolLogo": true,
                "isTransparent": true,
                "displayMode": "adaptive",
                "colorTheme": "dark",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    {{-- @if (Auth::user()->kyc_status == null)
        <div class="alert alert-warning mb-4 mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <strong>Please <a href="{{ route('user.kyc') }}">click here</a> to update your KYC info</strong>
        </div>
    @elseif (Auth::user()->kyc_status == 'rejected')
        <div class="alert alert-danger mb-4 mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <strong>You KYC submission was rejected, Please <a href="{{ route('user.kyc') }}">click here</a> to update your
                KYC info</strong>
        </div>
    @endif --}}
    <div class="row layout-top-spacing">
        <style>
            p.w {
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 0;
                align-self: center;
            }

            div.stat .widget-heading {
                height: 120px;
            }

            @media only screen and (max-width: 600px) {
                div.stat:nth-child(even) {
                    padding: 0 5px 0 15px;
                }

                div.stat:nth-child(odd) {
                    padding: 0 15px 0 5px;
                }

                p.w {
                    font-size: 18px;
                }
            }





.white-card {
    border-radius: 10px;
    padding: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0,0,0,0.08);
    cursor: pointer;
    height: 100%;
}

/* Hover animation */
.white-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.12);
}

/* Background color variations */
.green-card { background: #C0FAA0; }
.gray-card { background: #F7F7F7; }
.dark-card { background: #004F63; }

/* Icon containers */
.w-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    margin-bottom: 10px;
}

/* Theme variations for icons */
.dark-theme { background: #004F63; color: #fff; }
.light-theme { background: #F7F7F7; color: #004F63; }

/* Layout inside cards */
.white-card .w-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

/* All light cards: text black */
.green-card p.w,
.gray-card p.w,
.white-card p.w,
.green-card h5,
.gray-card h5,
.white-card h5 {
    color: #000 !important;
}

/* Dark card: text white */
.dark-card p.w,
.dark-card h5 {
    color: #fff !important;
}

/* Text sizing */
.white-card .w p.w,
.green-card .w p.w,
.gray-card .w p.w,
.dark-card .w p.w {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0;
}

.white-card .w h5,
.green-card .w h5,
.gray-card .w h5,
.dark-card .w h5 {
    font-size: 1rem;
    margin: 0;
}





#referral-system-component {
    background-color: #0a101f;
    color: #f8f9fa; /* Equivalent to .text-light on a dark theme */
  }
  #referral-system-component .card {
    background-color: rgba(33, 37, 41, 0.5);
    backdrop-filter: blur(10px);
    border-color: rgba(255, 255, 255, 0.15);
  }
  #referral-system-component .card:hover {
    border-color: #0dcaf0;
  }
  #referral-system-component .gradient-text {
    background: linear-gradient(to right, #20c997, #0dcaf0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
  }










    </style>

       




 
 <div class="col-12 col-md-12">
    <div class="row g-3">
        <!-- Total Capital -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card green-card" style="color: #000;">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon dark-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="w">${{ Auth::user()->rbalance + Auth::user()->profit + Auth::user()->bonus }}</p>
                            <h5>Equity</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profit -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card gray-card">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon dark-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <p class="w">${{ Auth::user()->profit }}</p>
                            <h5>Dividends</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Referral Bonus -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card dark-card">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon light-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                <rect x="2" y="7" width="20" height="5"></rect>
                                <line x1="12" y1="22" x2="12" y2="7"></line>
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="w">${{ Auth::user()->bonus }}</p>
                            <h5>Finder's Fee</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Referral Count -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card green-card">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon dark-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M7 21v-2a4 4 0 0 1 3-3.87"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div>
                            <p class="w">{{ count($referrals ?? []) }}</p>
                            <h5>Referral Volume</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- shares -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card gray-card">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon dark-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="w">{{ count($investments) }}</p>
                            <h5>Shares</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Withdrawals -->
        <div class="col-6 col-md-4 stat layout-spacing">
            <div class="widget white-card dark-card">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon light-theme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="8 12 12 16 16 12"></polyline>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                            </svg>
                        </div>
                        <div>
                            <p class="w">${{ Auth::user()->withdrawals_total ?? '0' }}</p>
                            <h5>Withdrawal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











        {{-- <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-gift">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">${{ Auth::user()->rbalance }}</p>
                            <h5 class="">Account Balance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-gift">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">${{ Auth::User()->profit }}</p>
                            <h5 class="">Profit</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon bg-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-gift">
                                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                <rect x="2" y="7" width="20" height="5"></rect>
                                <line x1="12" y1="22" x2="12" y2="7"></line>
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">${{ Auth::User()->bonus }}</p>
                            <h5 class="">Referral Bonus</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-6 stat stat2 layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">{{ count($bots) ?? '0' }}</p>
                            <h5 class="">Trading Bots</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-package">
                                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">{{ count($investments) }}</p>
                            <h5 class="">Total investments</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon bg-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-download-cloud">
                                <polyline points="8 17 12 21 16 17"></polyline>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="w">${{ $total_withdraw }}</p>
                            <h5 class="">Total Withdraws</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <div class="layout-to-spacing">
                 @foreach ($invests as $data)
                 @if ($data->status == 'running')
                     <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: {{number_format((float)(($data->days / $data->duration) * 100), 2, '.', '')}}%;" aria-valuenow="{{number_format((float)(($data->days / $data->duration) * 100), 2, '.', '')}}" aria-valuemin="0" aria-valuemax="100">{{number_format((float)(($data->days / $data->duration) * 100), 2, '.', '')}}%</div>
                 </div>
                 @endif

                 @endforeach
             </div> --}}



    <div class="row layout-top-spacing">
        @if ($invests != null)
            <div class="col-sm-12 col-md-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Active Investments</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Plan</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Capital</div>
                                        </th>
                                        <th>
                                            <div class="th-content">RIO</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Daily profit</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Started</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Status</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Time left</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="font-weight: bold;">
                                    @forelse ($invests as $investment)
                                        <tr>
                                            <td>
                                                <div class="th-content">{{ $investment->plan->name }}</div>
                                            </td>
                                            <td>
                                                <div class="th-content">$ {{ $investment->amount }}</div>
                                            </td>
                                            <td>
                                                <div class="th-content">{{ $investment->roi }}%</div>
                                            </td>
                                            <td>
                                                <div class="th-content">$
                                                    {{ ($investment->roi / 100) * $investment->amount }}</div>
                                            </td>
                                            <td>
                                                <div class="th-content">{{ $investment->created_at }}</div>
                                            </td>
                                            <td>
                                                <div class="th-content">
                                                    @if ($investment->status == 'running')
                                                        <span class="badge badge-success">Running</span>
                                                    @elseif ($investment->status == 'completed')
                                                        <span class="badge badge-success">Completed</span>
                                                    @elseif ($investment->status == 'pending')
                                                        <span class="badge badge-warning">Pending</span>
                                                    @else
                                                        <span class="badge badge-danger">Cancelled</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="th-content">{{ $investment->time_left }} days</div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="col text-center" colspan="7">
                                                No Investments yet
                                                <br>
                                                <br>
                                                <a href="{{ url('/user/invests/buy') }}"
                                                    class="btn btn-outline-primary">Invest Now</a>

                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="col-sm-12 col-md-6 layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
                <div class="widget-heading">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_1ad55"></div>
                        <div class="tradingview-widget-copyright"><a href="" rel="noopener"><span
                                    class="blue-text">Market Cap</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget({
                                "symbols": [
                                    [
                                        "BINANCE",
                                        "BINANCE:BTCUSDT|1D"
                                    ],

                                ],
                                "chartOnly": false,
                                "width": "100%",
                                "height": "350",
                                "locale": "en",
                                "colorTheme": "dark",
                                "gridLineColor": "rgba(42 ,46, 57, 0)",
                                "fontColor": "#787B86",
                                "isTransparent": true,
                                "autosize": true,
                                "showFloatingTooltip": true,
                                "scalePosition": "no",
                                "scaleMode": "Normal",
                                "fontFamily": "Trebuchet MS, sans-serif",
                                "noTimeScale": false,
                                "chartType": "area",
                                "lineColor": "#2962FF",
                                "bottomColor": "rgba(41, 98, 255, 0)",
                                "topColor": "rgba(41, 98, 255, 0.3)",
                                "container_id": "tradingview_1ad55"
                            });
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 layout-spacing">
            <div class="widget">
                <div class="widget-heading">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                            async>
                            {
                                "symbol": "FX:EURUSD",
                                "width": "100%",
                                "height": "350",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "dark",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": true,
                                "autosize": true,
                                "largeChartUrl": ""
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
        <style>
            .list-group-item {
                background-color: #0e1726;
            }

            .same {
                height: 260px;
            }
        </style>
        <div class="col-sm-12 col-md-6 layout-spacing same">
            <div class="widget">
                <div class="widget-heading">
                    <h6>We are global</h6>
                    <div id="chartdiv"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 layout-spacing same">
            <div class="widget">
                <h6>Countries</h6>
                {{-- <h6>Total Countries: {{ count($countires)}}</h6> --}}
                <div class="widget-heading" style="height: 150px; overflow-y:auto;">
                    <ol class="list-group list-group-numbered bg-primary text-light">

                        @foreach ($countires as $country)
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $country }}</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $numbers[$num] }}</span>
                                <!--{{ $num++ }}-->
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

       
    </div>
    <div class="mgm" style="display: none;">
        <div class="txt" style="color:white;"></div>
    </div>
















     <div id="referral-system-component">
  <div class="container-xl p-3 p-md-5">
    <header class="text-center">
        <p class="mt-2 fs-5 text-secondary">Visualize your downline and track your commissions.</p>
    </header>

    <main class="mt-5">
      <div class="card p-4 shadow-lg">
        <div class="card-body">
          <label for="referral-link-input" class="form-label text-secondary mb-2">Your Unique Referral Link</label>
          <div class="d-sm-flex gap-2">
            <input id="referral-link-input" type="text" readOnly value="{{ Auth::User()->referral_link }}" class="form-control bg-dark text-light border-secondary" />
            <button id="copy-button" class="btn btn-info d-flex align-items-center justify-content-center w-100 w-sm-auto mt-2 mt-sm-0">
              <i class="bi bi-clipboard me-2"></i>
              <span id="copy-button-text">Copy Link</span>
            </button>
          </div>
        </div>
      </div>

      <div class="mt-5 card p-4 p-lg-5 shadow-lg">
        <h2 class="fw-bold text-info mb-4">Referral Tree</h2>
        <div class="overflow-x-auto">
          <!-- Level 0: Root User -->
          <div class="position-relative ps-4">
            <div class="card" style="max-width: 24rem;">
              <div class="card-body d-flex">
                <img src="https://picsum.photos/seed/alex/100" alt="Alex Thompson" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;"/>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-white">Alex Thompson</h5>
                    <span class="badge rounded-pill bg-primary fs-7">You</span>
                  </div>
                  <div class="mt-2 text-secondary small">
                    <div class="d-flex align-items-center mb-1">
                      <i class="bi bi-envelope me-2"></i>
                      <span>alex.t@example.com</span>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                      <i class="bi bi-hash me-2"></i>
                      <span>usr-1001</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-globe me-2"></i>
                      <img src="https://flagcdn.com/16x12/us.png" alt="USA flag" class="me-2" />
                      <span>USA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Level 1 Referrals -->
            <div class="position-relative mt-2 ps-5 border-start border-secondary">
              <!-- Node Wrapper -->
              <div class="position-relative pt-4">
                <!-- Connector Line -->
                <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                <div class="card" style="max-width: 24rem;">
                  <div class="card-body d-flex">
                    <img src="https://picsum.photos/seed/maria/100" alt="Maria Garcia" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                    <div class="flex-grow-1 ms-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-white">Maria Garcia</h5>
                        <span class="badge rounded-pill bg-success fs-7">5%</span>
                      </div>
                      <!-- Details Removed for Brevity -->
                    </div>
                  </div>
                </div>
                <!-- Level 2 Referrals -->
                <div class="position-relative mt-2 ps-5 border-start border-secondary">
                  <div class="position-relative pt-4">
                     <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                    <div class="card" style="max-width: 24rem;">
                      <div class="card-body d-flex">
                        <img src="https://picsum.photos/seed/chen/100" alt="Chen Wei" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-0 text-white">Chen Wei</h5>
                          <span class="badge rounded-pill bg-info fs-7">3%</span>
                        </div>
                      </div>
                    </div>
                     <!-- Level 3 Referrals -->
                    <div class="position-relative mt-2 ps-5 border-start border-secondary">
                       <div class="position-relative pt-4">
                         <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                         <div class="card" style="max-width: 24rem;">
                          <div class="card-body d-flex">
                            <img src="https://picsum.photos/seed/david/100" alt="David Kim" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                            <div class="flex-grow-1 ms-3">
                              <h5 class="mb-0 text-white">David Kim</h5>
                              <span class="badge rounded-pill bg-warning fs-7">1%</span>
                            </div>
                          </div>
                         </div>
                       </div>
                    </div>
                  </div>
                   <div class="position-relative pt-4">
                     <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                     <div class="card" style="max-width: 24rem;">
                       <div class="card-body d-flex">
                         <img src="https://picsum.photos/seed/fatima/100" alt="Fatima Al-Fassi" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                         <div class="flex-grow-1 ms-3">
                           <h5 class="mb-0 text-white">Fatima Al-Fassi</h5>
                           <span class="badge rounded-pill bg-info fs-7">3%</span>
                         </div>
                       </div>
                     </div>
                   </div>
                </div>
              </div>
              <!-- Node Wrapper -->
              <div class="position-relative pt-4">
                <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                <div class="card" style="max-width: 24rem;">
                   <div class="card-body d-flex">
                    <img src="https://picsum.photos/seed/john/100" alt="John Smith" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0 text-white">John Smith</h5>
                      <span class="badge rounded-pill bg-success fs-7">5%</span>
                    </div>
                  </div>
                </div>
                 <!-- Level 2 Referrals -->
                <div class="position-relative mt-2 ps-5 border-start border-secondary">
                   <div class="position-relative pt-4">
                     <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                     <div class="card" style="max-width: 24rem;">
                      <div class="card-body d-flex">
                        <img src="https://picsum.photos/seed/yuki/100" alt="Yuki Tanaka" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-0 text-white">Yuki Tanaka</h5>
                          <span class="badge rounded-pill bg-info fs-7">3%</span>
                        </div>
                      </div>
                     </div>
                   </div>
                </div>
              </div>
               <!-- Node Wrapper -->
              <div class="position-relative pt-4">
                 <span class="position-absolute top-50 start-0 bg-secondary" style="height: 1px; width: 3rem;"></span>
                 <div class="card" style="max-width: 24rem;">
                   <div class="card-body d-flex">
                    <img src="https://picsum.photos/seed/priya/100" alt="Priya Sharma" class="rounded-circle border border-2 border-secondary" style="width: 64px; height: 64px; object-fit: cover;" />
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0 text-white">Priya Sharma</h5>
                      <span class="badge rounded-pill bg-success fs-7">5%</span>
                    </div>
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>



@endsection

@section('script')
    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_dark);
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create map instance
            var chart = am4core.create("chartdiv", am4maps.MapChart);

            // Set map definition
            chart.geodata = am4geodata_worldLow;

            // Set projection
            chart.projection = new am4maps.projections.Miller();

            // Create map polygon series
            var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

            // Exclude Antartica
            polygonSeries.exclude = ["AQ"];

            // Make map load polygon (like country names) data from GeoJSON
            polygonSeries.useGeodata = true;

            // Configure series
            var polygonTemplate = polygonSeries.mapPolygons.template;
            polygonTemplate.tooltipText = "{name}";
            polygonTemplate.polygon.fillOpacity = 0.6;


            // Create hover state and set alternative fill color
            var hs = polygonTemplate.states.create("hover");
            hs.properties.fill = chart.colors.getIndex(0);

            // Add image series
            var imageSeries = chart.series.push(new am4maps.MapImageSeries());
            imageSeries.mapImages.template.propertyFields.longitude = "longitude";
            imageSeries.mapImages.template.propertyFields.latitude = "latitude";
            imageSeries.mapImages.template.tooltipText = "{title}";
            imageSeries.mapImages.template.propertyFields.url = "url";

            var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
            circle.radius = 3;
            circle.propertyFields.fill = "color";
            circle.nonScaling = true;

            var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
            circle2.radius = 3;
            circle2.propertyFields.fill = "color";


            circle2.events.on("inited", function(event) {
                animateBullet(event.target);
            })


            function animateBullet(circle) {
                var animation = circle.animate([{
                    property: "scale",
                    from: 1 / chart.zoomLevel,
                    to: 5 / chart.zoomLevel
                }, {
                    property: "opacity",
                    from: 1,
                    to: 0
                }], 800, am4core.ease.circleOut);
                animation.events.on("animationended", function(event) {
                    animateBullet(event.target.object);
                })
            }

            var colorSet = new am4core.ColorSet();

            imageSeries.data = [{
                "title": "Brussels",
                "latitude": 50.8371,
                "longitude": 4.3676,
                "color": colorSet.next()
            }, {
                "title": "Copenhagen",
                "latitude": 55.6763,
                "longitude": 12.5681,
                "color": colorSet.next()
            }, {
                "title": "Paris",
                "latitude": 48.8567,
                "longitude": 2.3510,
                "color": colorSet.next()
            }, {
                "title": "Reykjavik",
                "latitude": 64.1353,
                "longitude": -21.8952,
                "color": colorSet.next()
            }, {
                "title": "Moscow",
                "latitude": 55.7558,
                "longitude": 37.6176,
                "color": colorSet.next()
            }, {
                "title": "Madrid",
                "latitude": 40.4167,
                "longitude": -3.7033,
                "color": colorSet.next()
            }, {
                "title": "London",
                "latitude": 51.5002,
                "longitude": -0.1262,
                "url": "http://www.google.co.uk",
                "color": colorSet.next()
            }, {
                "title": "Peking",
                "latitude": 39.9056,
                "longitude": 116.3958,
                "color": colorSet.next()
            }, {
                "title": "New Delhi",
                "latitude": 28.6353,
                "longitude": 77.2250,
                "color": colorSet.next()
            }, {
                "title": "Tokyo",
                "latitude": 35.6785,
                "longitude": 139.6823,
                "url": "http://www.google.co.jp",
                "color": colorSet.next()
            }, {
                "title": "Ankara",
                "latitude": 39.9439,
                "longitude": 32.8560,
                "color": colorSet.next()
            }, {
                "title": "Buenos Aires",
                "latitude": -34.6118,
                "longitude": -58.4173,
                "color": colorSet.next()
            }, {
                "title": "Brasilia",
                "latitude": -15.7801,
                "longitude": -47.9292,
                "color": colorSet.next()
            }, {
                "title": "Ottawa",
                "latitude": 45.4235,
                "longitude": -75.6979,
                "color": colorSet.next()
            }, {
                "title": "Washington",
                "latitude": 38.8921,
                "longitude": -77.0241,
                "color": colorSet.next()
            }, {
                "title": "Kinshasa",
                "latitude": -4.3369,
                "longitude": 15.3271,
                "color": colorSet.next()
            }, {
                "title": "Cairo",
                "latitude": 30.0571,
                "longitude": 31.2272,
                "color": colorSet.next()
            }, {
                "title": "Pretoria",
                "latitude": -25.7463,
                "longitude": 28.1876,
                "color": colorSet.next()
            }];



        }); // end am4core.ready()
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.logoutbtn', function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/logout",
                    data: "{{ csrf_token() }}",
                    success: function(response) {

                    }
                });
            });
        });

        function myFunction(address) {

            var TempText = document.createElement("input");
            TempText.value = address;
            document.body.appendChild(TempText);
            TempText.select();

            document.execCommand("copy");
            document.body.removeChild(TempText);

            alert("Referral link copied: " + address);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            setTimeout(nextNotice, 15000);

            function nextNotice() {
                var numRand = Math.floor(Math.random() * 1010);
                var items = ['10000', '2000', '15000', '11540', '800', '20000'];
                var doRand = items[Math.floor(Math.random() * items.length)];
                $.notify("  ID00" + numRand + " Just Earned $" + doRand, {
                    align: "left",
                    verticalAlign: "bottom",
                    animation: true,
                    animationType: "scale",
                    blur: 0.2,
                    icon: "map-marker-alt",
                    color: "#009688",
                    delay: 5000
                });
                setTimeout(nextNotice, 15000);
            }
        });





(function() {
    const component = document.getElementById('referral-system-component');
    if (!component) {
      console.error('Referral system component not found.');
      return;
    }

    const copyButton = component.querySelector('#copy-button');
    const copyButtonText = component.querySelector('#copy-button-text');
    const referralLinkInput = component.querySelector('#referral-link-input');

    if (copyButton && copyButtonText && referralLinkInput) {
      copyButton.addEventListener('click', () => {
        navigator.clipboard.writeText(referralLinkInput.value).then(() => {
          copyButtonText.textContent = 'Copied!';
          copyButton.classList.remove('btn-info');
          copyButton.classList.add('btn-success');
          
          setTimeout(() => {
            copyButtonText.textContent = 'Copy Link';
            copyButton.classList.remove('btn-success');
            copyButton.classList.add('btn-info');
          }, 2000);
        }).catch(err => {
          console.error('Failed to copy text: ', err);
        });
      });
    }
  })();






    
    </script>
@endsection
