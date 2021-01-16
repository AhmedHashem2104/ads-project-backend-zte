<?php

class BlogPageController
{
    public function index($response, $request)
    {
        $info = Info::query()->first();
        $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();
        $experience = Experience::query()->whereLike('page', '%' . $request->input('page') . '%')->first();
        $blogs = Blog::query()->orderBy('id', 'DESC')->fetch();
        $types = Slider::rawQuery("SELECT DISTINCT (type) FROM blogs");
        return $response->view(
            'blogs',
            [
                'info' => $info,
                'experience' => $experience,
                'blogs' => $blogs,
                'types' => $types,
                'experiences' => $experiences,
                'lang' => $request->input('lang')
            ]
        );
    }

    public function blogOne($response, $request)
    {
        $info = Info::query()->first();
        $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();
        $experience = Experience::query()->where('page', $request->input('page'))->first();
        $blog = Blog::query()->whereLike('slug', '%' . urldecode($request->input('slug')) . '%')->first();
        return $response->view(
            'blogOne',
            [
                'info' => $info,
                'experience' => $experience,
                'blog' => $blog,
                'experiences' => $experiences,
                'lang' => $request->input('lang')
            ]
        );
    }
}
