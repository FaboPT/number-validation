<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $countries = $this->getCountries();

        $numbers = PhoneNumber::all();
        $items = [];
        foreach ($numbers as $item) {
            $auxSplit = explode(' ', $item->phone);
            $countryCode = substr($auxSplit[0], 0, -1);
            $countryCode = substr($countryCode, 1);
            $this->validateCountryCode($countryCode);
            $items[] = [
                'phone_number' => $auxSplit[1],
                'state' => $this->validateNumber($item->phone, $countryCode),
                'country' => $this->validateCountryCode($countryCode) ? $countries[$countryCode] : null,
                'country_code' => '+' . $countryCode

            ];

        }
        return view('home', compact('items'));
    }

    private function validateNumber($number, $countryCode): bool
    {
        switch ($countryCode) {
            case 212:
                $regular_express = "~^\(212\)\ ?[5-9] \d{8}$~";
                return (bool)preg_match($regular_express, $number);

            case 237:
                $regular_express = "~^\(237\)\ ?[2368]\d{7,8}$~";
                return (bool)preg_match($regular_express, $number);
            case 251:
                $regular_express = "~^\(251\)\ ?[1-59] \d{8}$~";
                return (bool)preg_match($regular_express, $number);
            case 256:
                $regular_express = "~^\(256\)\ ?\d{9}$~";
                return (bool)preg_match($regular_express, $number);
            case 258:
                $regular_express = "~^\(258\)\ ?[28]\d{7,8}$~";
                return (bool)preg_match($regular_express, $number);
        }
    }

    private function getCountries(): array
    {
        return [
            212 => 'Morocco',
            237 => 'Cameroon',
            251 => 'Ethiopia',
            256 => 'Uganda',
            258 => 'Mozambique'
        ];
    }

    public function validateCountryCode($code): bool
    {
        $countries = $this->getCountries();
        return isset($countries[$code]);
    }
}
