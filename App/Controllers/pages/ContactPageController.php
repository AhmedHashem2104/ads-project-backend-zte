<?php

class ContactPageController
{
    public function index($response, $request)
    {
        $info = Info::query()->first();
        $experiences = Experience::query()->whereNotIn('id', [1, 2, 3])->fetch();

        return $response->view(
            'contact',
            [
                'info' => $info,
                'experiences' => $experiences,
                'lang' => $request->input('lang')
            ]
        );
    }

    public function sendMail($response, $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'subject', 'message']);
        $data = $request->validateAll($data, [
            'name' => 'required|string|min:5|max:100',
            'email' => 'required|string|min:5|max:100',
            'phone' => 'required|min:11|max:15',
            'subject' => 'required|string|min:5|max:255',
            'message' => 'required|string|min:5'
        ]);

        if ($request->errors()) {
            return $request->errors();
        }
        $data->created_at = date("Y-m-d H:i:s");
        $data->updated_at = date("Y-m-d H:i:s");
        Email::create($data);
        return $response->json(array('message' => 'Email sent successfully.'));
    }
}
