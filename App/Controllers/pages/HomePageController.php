<?php

class HomePageController extends Controller
{

    public function index($response, $request)
    {
        $info = DB::rawOneQuery("SELECT * FROM company ORDER BY company_id LIMIT 1");

        $sliders = Slider::query()->orderBy('slider_id', 'DESC')->fetch();

        $services = DB::rawQuery("SELECT * FROM services ORDER BY order_no DESC");

        $about = DB::rawOneQuery("SELECT * FROM ours WHERE our_id = 1");

        $statistics = Statistic::query()->fetch();

        $clients = DB::rawQuery("SELECT * FROM clients ORDER BY client_id DESC");

        $ours = DB::rawQuery("SELECT * FROM ours");

        $teams = Team::query()->orderBy('order_no')->fetch();

        // $clients = Client::query()->orderBy('id', 'DESC')->fetch();

        // $partners = Partner::query()->orderBy('id', 'DESC')->fetch();

        // $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();

        return $response->view(
            'index',
            [
                'info' => $info,
                'sliders' => $sliders,
                'services' => $services,
                'about' => $about,
                'statistics' => $statistics,
                'clients' => $clients,
                'ours' => $ours,
                'teams' => $teams,
                'clients' => $clients,
                'lang' => $request->input('lang')
            ]
        );
    }
}
