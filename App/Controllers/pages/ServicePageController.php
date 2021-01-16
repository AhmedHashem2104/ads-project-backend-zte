<?php

class ServicePageController
{
    public function index($response, $request)
    {
        $info = Info::query()->first();
        $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();
        $experience = Experience::query()->whereLike('page', '%' . urldecode($request->input('page') . '%'))->first();
        $slider = Slider::query()->whereLike('page', '%' . urldecode($request->input('page') . '%'))->first();
        return $response->view(
            'service',
            [
                'info' => $info,
                'experience' => $experience,
                'slider' => $slider,
                'experiences' => $experiences,
                'lang' => $request->input('lang')
            ]
        );
    }
}
