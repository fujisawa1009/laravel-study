<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function omikuji()
    {
        $fortunes = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];
        $resultIndex = array_rand($fortunes);
        $result = $fortunes[$resultIndex];
        return view('omikuji', ['result' => $result]);    
    }

    public function montyHall()
    {
        $results = [];
    for ($i = 0; $i < 1000; $i++) {
        $options = [true, false, false];
        shuffle($options);

        $selectedIndex = array_rand($options);
        $notSelectedIndexes = array_filter($options, fn($index) => $index !== $selectedIndex, ARRAY_FILTER_USE_KEY);
        $removeIndex = array_search(false, $notSelectedIndexes);
        unset($notSelectedIndexes[$removeIndex]);

        $changedIndex = key($notSelectedIndexes);
        $results[] = $options[$changedIndex];
    }
    $wonCount = count(array_filter($results, fn($result) => $result));
    return view('monty-hall', ['results' => $results, 'wonCount' => $wonCount]);
    }
}
