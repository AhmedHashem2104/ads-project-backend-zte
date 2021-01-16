<?php

class HomePageController extends Controller
{

    public function index($response, $request)
    {
        $info = Info::query()->first();

        $sliders = Slider::query()->whereNotLike('page', '%team%')->whereNotLike('page', '%services%')->fetch();

        $categories = Category::query()->fetch();

        $about = About::query()->where('id', 1)->first();

        $statistics = Statistic::query()->fetch();

        $features = Feature::query()->fetch();

        $abouts = About::query()->where('page', 'team')->fetch();

        $teams = Team::query()->fetch();

        $clients = Client::query()->orderBy('id', 'DESC')->fetch();

        $partners = Partner::query()->orderBy('id', 'DESC')->fetch();

        $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();

        return $response->view(
            'index',
            [
                'info' => $info,
                'sliders' => $sliders,
                'categories' => $categories,
                'about' => $about,
                'statistics' => $statistics,
                'features' => $features,
                'abouts' => $abouts,
                'teams' => $teams,
                'clients' => $clients,
                'partners' => $partners,
                'experiences' => $experiences,
                'lang' => $request->input('lang')
            ]
        );
    }
}
