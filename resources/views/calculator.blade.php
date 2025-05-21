@extends('layouts.app')

@section('title', 'Calculatrice Laravel')

@section('content')
    @if ($errors->any())
        <div class="text-red-600 font-bold mt-2">
            {{ $errors->first('input') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-xl p-6 w-80">
        <h1 class="text-xl font-bold text-center mb-4 text-gray-800">Calculatrice Laravel</h1>

        <div class="bg-gray-200 rounded p-4 text-right text-xl font-mono mb-4 min-h-[60px]">
            {{ $expression }}
            @if($result !== null)
                <div class="text-green-600 font-bold mt-1">= {{ $result }}</div>
            @endif
        </div>

        <form method="POST" action="{{ route('calculator.process') }}">
            @csrf
            <div class="grid grid-cols-4 gap-2">
                @foreach ($buttons as $row)
                    @foreach ($row as $btn)
                        <x-calculator-button :value="$btn" />
                    @endforeach
                @endforeach
            </div>
        </form>
    </div>
@endsection
