<?php

class ServicePageController
{
    public function index($response, $request)
    {
        $info = DB::rawOneQuery("SELECT * FROM company ORDER BY company_id LIMIT 1");
        $service = DB::rawOneQuery("SELECT * FROM services WHERE service_id = " . $request->input('id'));
         $services = DB::rawQuery("SELECT * FROM services ORDER BY order_no DESC");
        return $response->view(
            'service',
            [
                'info' => $info,
                'service' => $service,
                'lang' => $request->input('lang'),
                'services' => $services
            ]
        );
    }
}
