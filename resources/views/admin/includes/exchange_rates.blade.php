<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="eur-tab" data-toggle="tab" href="#eur" role="tab" aria-controls="home" aria-selected="true">EUR</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="usd-tab" data-toggle="tab" href="#usd" role="tab" aria-controls="usd" aria-selected="false">USD</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="gbp-tab" data-toggle="tab" href="#gbp" role="tab" aria-controls="gbp" aria-selected="false">GBP</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="rub-tab" data-toggle="tab" href="#rub" role="tab" aria-controls="rub" aria-selected="false">RUB</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="eur" role="tabpanel" aria-labelledby="eur-tab">
      @include(
        'admin.includes.currency_rates_table', 
        ['rates' => $eur_data->rates])
  </div>

  <div class="tab-pane fade" id="usd" role="tabpanel" aria-labelledby="usd-tab">
      @include(
        'admin.includes.currency_rates_table', 
        ['rates' => $usd_data->rates])
  </div>

  <div class="tab-pane fade" id="gbp" role="tabpanel" aria-labelledby="gbp-tab">
    @if(isset($gbp_data))
      @include(
        'admin.includes.currency_rates_table', 
        ['rates' => $gbp_data->rates])
    @endif
  </div>

  <div class="tab-pane fade" id="rub" role="tabpanel" aria-labelledby="rub-tab">
    @if(isset($rub_data))
      @include(
        'admin.includes.currency_rates_table', 
        ['rates' => $rub_data->rates])
    @endif
  </div>
</div>
