<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Calculator</title>
    </head>
    <body class="min-h-screen w-full flex flex-col px-5 md:px-0">
        <div class="flex flex-col gap-2 m-auto md:w-[700px] w-full">
            <!-- notice -->
            @if(session('error'))
            <div class="bg-red-500 text-white w-full m-auto p-3 rounded">
                {{ session('error') }}
            </div> 
            @endif
            <form method="POST" action="/calculator" class="flex flex-col md:flex-row w-full gap-3 rounded border m-auto px-3 py-5  items-center">
                @csrf 
                <!-- number 1 -->
                <input required type="number" step="0.01" id="number_1" name="number_1" class="border p-1 rounded w-full md:w-auto" placeholder="Entrez un nombre" value="{{ isset($number1) ? $number1 : ''  }}">
                <!-- operator -->
                <select required name="operator" id="operator" class="border p-1 rounded w-full md:w-auto">
                    <option value="add" {{ ( isset($operator) and  $operator == "add") ? 'selected' : '' }}>+</option>
                    <option value="sub" {{ ( isset($operator) and $operator == "sub") ? 'selected' : '' }}>-</option>
                    <option value="mul" {{ ( isset($operator) and $operator == "mul") ? 'selected' : '' }}>*</option>
                    <option value="div" {{ ( isset($operator) and $operator == "div") ? 'selected' : '' }}>/</option>
                </select>
                <!-- number 2 -->
                <input required type="number" step="0.01" id="number_2" name="number_2" class="border p-1 rounded w-full md:w-auto" placeholder="Entrez un nombre" value="{{ isset($number2) ? $number2 : ''  }}">
                <button type="submit" class=" rounded p-1 px-5 bg-orange-500 hover:bg-orange-500/80 duration-300 text-white w-full md:w-auto">=</button>
                <!-- result -->
                <span class="w-full">
                    @if(isset($result))
                        <input type="text" value="{{ $result }}" class="border p-1 rounded w-full" readonly>
                    @endif
                </span>
            </form>
        </div>
    </body>
</html>
