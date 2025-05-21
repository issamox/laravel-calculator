<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use App\Services\CalculatorService;
use App\ViewModels\CalculatorViewModel;

class CalculatorController extends Controller
{
    protected CalculatorService $calculator;

    public function __construct(CalculatorService $calculator)
    {
        $this->calculator = $calculator;
    }

    public function index()
    {
        return view('calculator', CalculatorViewModel::from());
    }

    public function process(CalculatorRequest $request)
    {
        $input = $request->validated()['input'];
        $expression = session('expression', '');

        if ($input === 'C') {
            session()->forget('expression');
            return view('calculator', CalculatorViewModel::from());
        }

        if ($input === '=') {
            $result = $this->calculator->evaluate($expression);
            session()->forget('expression');
            return view('calculator', CalculatorViewModel::from('', $result));
        }

        $expression .= $input;
        session(['expression' => $expression]);

        return view('calculator', CalculatorViewModel::from($expression));
    }
}
