<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\TranslationLoader\LanguageLine;

class LanguageController extends Controller
{
    public function index($locale) {
            $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

            $strings = [];

            $all = LanguageLine::get();
            foreach ($all as $row) {
                $strings[$row->group][$row->key] = $row->text[$locale];
            }


            $contents = 'window.i18n = ' . json_encode($strings, config('app.debug', false) ? JSON_PRETTY_PRINT : 0) . ';';
            $response = Response::make($contents, 200);
            $response->header('Content-Type', 'application/javascript');
            return $response;
    }
}
