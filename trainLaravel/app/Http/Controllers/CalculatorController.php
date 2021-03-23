<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getFormCalculator(){
        return view('calculator.index');
    }

    
    public function storeDataFormCalculate(Request $request){
        $number_1 = $request->input('number_1');
        $number_2 = $request->input('number_2');
        $operator = $request->input('operator');
        //truyền tham số sag 1 trag khác để hiển thị kết quả
        $textDisplay = ''; // đặt làm string rỗng để hứng dl
        switch($operator) {
            case '+':
                $result = $number_1 + $number_2;
                $textDisplay = "Tổng của 2 số {$number_1} và {$number_2} là";
            break;
            case '-':
                $result = $number_1 - $number_2;
                $textDisplay = "Hiệu của 2 số {$number_1} và {$number_2} là";
            
            break;
            case '*':
                $result = $number_1 * $number_2;
                $textDisplay = "Tích của 2 số {$number_1} và {$number_2} là";
            
            break;
            case '/':
                $result = $number_1 / $number_2;
                $textDisplay = "Thương của 2 số {$number_1} và {$number_2} là";
            break;
     
        }
            return view('calculator.result',[
                'textDisplay' => $textDisplay,
                'result' => $result,
            ]); //muốn truyền tham số vào file khác thì thêm vào ở tham số thứ 2 
    }
}
 