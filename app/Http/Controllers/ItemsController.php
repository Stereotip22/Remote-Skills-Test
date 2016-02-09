<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Items;
use SoapBox\Formatter\Formatter;

class ItemsController extends Controller
{
    public function addItem(Request $request)
    {
        Items::create($request->input());
        return redirect()->back();
    }

    public function itemsToXml()
    {
        $result = Items::all();

        $object = Formatter::make( (array) $result, Formatter::XML);
        $response = response($object->toXml());
        $fileName = 'gis.xml';
        $contentType = 'text/xml';

        $response->header('Cache-Control', 'public');
        $response->header('Content-Description', 'File Transfer');
        $response->header('Content-Disposition', 'attachment; filename=' . $fileName);
        $response->header('Content-Transfer-Encoding', 'binary');
        $response->header('Content-Type', $contentType);
        return $response;
    }

    public function itemsToJson()
    {
        $result = Items::all();

        $object = Formatter::make($result, Formatter::JSON);
        $response = response($object->toJson());
        $fileName = 'gis.json';
        $contentType = 'text/json';

        $response->header('Cache-Control', 'public');
        $response->header('Content-Description', 'File Transfer');
        $response->header('Content-Disposition', 'attachment; filename=' . $fileName);
        $response->header('Content-Transfer-Encoding', 'binary');
        $response->header('Content-Type', $contentType);
        return $response;
    }
}
