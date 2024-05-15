<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // return view('calculator');
    public function index()
    {
        return view('calculator');
    }

    // post method
    public function calculate(Request $request)
    {
        $number1 = $request->input('number_1');
        $number2 = $request->input('number_2');
        $operator = $request->input('operator');

        switch ($operator) {
            case 'add':
                $result = $number1 + $number2;
                $operation = "$number1 + $number2";
                break;
            case 'sub':
                $result = $number1 - $number2;
                $operation = "$number1 - $number2";
                break;
            case 'mul':
                $result = $number1 * $number2;
                $operation = "$number1 * $number2";
                break;
            case 'div':
                if ($number2 == 0) {
                    return redirect()->back()->with('error', 'Division par zéro est impossible.');
                }
                $result = $number1 / $number2;
                $operation = "$number1 / $number2";
                break;
            default:
                return redirect()->back()->with('error', 'Opérateur non valide.');
        }

        return view('calculator', compact('result', 'number1', 'number2', 'operator'));
    }
}
