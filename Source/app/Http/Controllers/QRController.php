<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QRController extends Controller
{
    public function  QRgenarate(Request $request)

{

    if(isset($_POST['submit']) ) {
        $tempDir = 'temp/';
        $phoneNumber = $_POST['phoneNumber'];
        $body =  $_POST['msg'];
        $filename = getUsernameFromEmail($phoneNumber);
        $subject =  $_POST['subject'];


        $codeContents = 'Phoneto:'.$phoneNumber .'&body='.urlencode($body).'?subject='.urlencode($subject);

        QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
    }
}
}
