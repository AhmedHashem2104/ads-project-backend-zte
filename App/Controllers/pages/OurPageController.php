<?php

class OurPageController
{
    public function index($response, $request)
    {
        $info = DB::rawOneQuery("SELECT * FROM company ORDER BY company_id LIMIT 1");
        $our = DB::rawOneQuery("SELECT * FROM ours WHERE our_id = " . $request->input('id'));
         $services = DB::rawQuery("SELECT * FROM services ORDER BY order_no DESC");
        return $response->view(
            'our',
            [
                'info' => $info,
                'our' => $our,
                'lang' => $request->input('lang'),
                'services' => $services
            ]
        );
    }
}
