<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ExchangeRatesService;

class HomeController extends Controller
{
    private $eur_data;
    private $usd_data;
    private $gbp_data;
    private $rub_data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $exchange_rates = new ExchangeRatesService();

        $res = $exchange_rates->get('EUR');
        if($res->getStatusCode() === 200)
            $this->eur_data = json_decode( $res->getBody() );
        
        $res = $exchange_rates->get('USD');
        if($res->getStatusCode() === 200)
            $this->usd_data = json_decode( $res->getBody() );

        $res = $exchange_rates->get('GBP');
        if($res->getStatusCode() === 200)
            $this->gbp_data = json_decode( $res->getBody() );

        $res = $exchange_rates->get('RUB');
        if($res->getStatusCode() === 200)
            $this->rub_data = json_decode( $res->getBody() );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'eur_data' => $this->eur_data,
            'usd_data' => $this->usd_data,
            'gbp_data' => $this->gbp_data,
            'rub_data' => $this->rub_data,
        ];
        
        return view('admin.home', $data);
    }
}
