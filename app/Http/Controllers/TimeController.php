<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;

class TimeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function getTimeZone($timezone){
        if (!empty($timezone)) {

            // Khởi tạo giá trị giờ theo múi giờ UTC
            $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

            // Thay đổi về múi giờ được chọn
            $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

            // Hiển thị giờ theo định dạng mong muốn
            echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
        }
        return view('index');
    }
}

