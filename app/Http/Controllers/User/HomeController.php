<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }
    public function shop()
    {
        return view('user.shop');
    }
    public function promotion()
    {
        return view('user.promotions');
    }

    public function blog()
    {
        $featuredBlog = Blog::where('is_featured', true)->where('status', 'published')->latest()->first();
        $blogs = Blog::where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);
        $mostViewedBlogs = Blog::where('status', 'published')
            ->orderBy('views', 'desc') // Assuming 'views' column stores the blog view count
            ->take(2)
            ->get();

        return view('user.blogs', compact('featuredBlog', 'blogs', 'mostViewedBlogs'));
    }
    public function blog_detail($slug)
    {
        $blog = Blog::where('id', $slug)->firstOrFail();
        $blog->update([
            'views' => $blog->views + 1,
        ]);
        $blogs = Blog::where('is_featured', true)->where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);

        return view('user.blog', compact('blog', 'blogs'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $blogs = Blog::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->where('status', 'published')
            ->paginate(6);

        return view('user.blogs', compact('blogs'));
    }

    public function contract()
    {
        return view('user.contract');
    }

    public function delivery()
    {
        return view('user.delivery');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function promotions()
    {
        return view('user.promotions');
    }
    public function pickup()
    {
        return view('user.pickup');
    }
    public function inspection()
    {
        return view('user.inspection');
    }
    public function services()
    {
        return view('user.services');
    }
    public function job()
    {
        return view('user.job');
    }
    public function repair()
    {
        return view('user.repair');
    }
    public function service()
    {
        return view('user.service');
    }
    public function service_detail($slug)
    {
        $services = [
            'electric-repair' => 'user.service.electric_repair',
            'general-repair' => 'user.service.general_repair',
            'extended-warranty' => 'user.service.extended_warranty',
            'chinese-car' => 'user.service.chinese_car',
            'tinting' => 'user.service.tinting',
            'car-inspection' => 'user.service.car_inspection',
            'assistance' => 'user.service.assistance',
            'car-wrapping' => 'user.service.car_wrapping',
            'major-minor-service' => 'user.service.major_minor_service',
            'electric-car' => 'user.service.electric_car',
            'ceramic' => 'user.service.ceramic',
            'auto-spa' => 'user.service.auto_spa',
        ];

        if (array_key_exists($slug, $services)) {
            return view($services[$slug]);
        }

        abort(404);
    }
}
