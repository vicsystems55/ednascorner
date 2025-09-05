<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = 'Home | Your Favorite Vendor';
        $description = 'Welcome to YFV, your gateway to growth, style & success.';

        return view('pages.home', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function about()
    {
        $title = 'About Me | Your Favorite Vendor';
        $description = 'Learn more about YFV and the ecosystem of brands.';

        return view('pages.about', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function contact()
    {
        $title = 'Contact Me | Your Favorite Vendor';
        $description = 'Get in touch for consulting, design, fashion, or travel services.';

        return view('pages.contact', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function portfolio()
    {
        $title = 'Portfolio | Your Favorite Vendor';
        $description = 'Explore my works across design, fashion, and business projects.';

        return view('pages.portfolio', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function services()
    {
        $title = 'Services | Your Favorite Vendor';
        $description = 'Discover coaching, design, entrepreneurship, fashion, and travel services.';

        return view('pages.services', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function terms()
    {
        $title = 'Terms & Conditions | Your Favorite Vendor';
        $description = 'Read the terms and conditions for using YFV services and website.';

        return view('pages.terms', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function privacy()
    {
        $title = 'Privacy Policy | Your Favorite Vendor';
        $description = 'Understand how YFV collects, uses, and protects your data.';

        return view('pages.privacy', [
            'title' => $title,
            'description' => $description,
        ]);
    }
}
