<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(string $locale)
    {
        if (!in_array($locale, ['ar', 'en']) || !$locale) {
            App::setLocale('en');
        }
        App::setLocale($locale);

        $nav_links = [__('nav.home'), __('nav.why_choose_us'), __('nav.services'), __('nav.contact_us')];

        $why_bizoor_items = [
            ['id' => '1', 'icon' => 'fa-solid fa-flask', 'title' => __('why_bizoor.reason_1'), 'description' => __('why_bizoor.reason_1_description')],
            ['id' => '2', 'icon' => 'fa-regular fa-lightbulb', 'title' => __('why_bizoor.reason_2'), 'description' => __('why_bizoor.reason_2_description')],
            ['id' => '3', 'icon' => 'fa-solid fa-star', 'title' => __('why_bizoor.reason_3'), 'description' => __('why_bizoor.reason_3_description')],
            ['id' => '4', 'icon' => 'fa-solid fa-headset', 'title' => __('why_bizoor.reason_4'), 'description' => __('why_bizoor.reason_4_description')],
        ];

        $services = [
            ['icon' => 'fa-brands fa-slack', 'title' => __('services.service_1'), 'subtitle' => __('services.service_1_subtitle'), 'description' => __('services.service_1_description')],
            ['icon' => 'fa-solid fa-tractor', 'title' => __('services.service_2'), 'subtitle' => __('services.service_2_subtitle'), 'description' => __('services.service_2_description')],
            ['icon' => 'fa-solid fa-cubes', 'title' => __('services.service_3'), 'subtitle' => __('services.service_3_subtitle'), 'description' => __('services.service_3_description')],
            ['icon' => 'fa-solid fa-user-graduate', 'title' => __('services.service_4'), 'subtitle' => __('services.service_4_subtitle'), 'description' => __('services.service_4_description')],
        ];

        return view('home.index', compact('nav_links', 'why_bizoor_items', 'services'));
    }
}
