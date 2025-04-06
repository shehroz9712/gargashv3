<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\ServiceRequest;
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
        return view('user.body-shop');
    }
    public function promotion()
    {
        return view('user.promotions');
    }

    public function blog()
    {
        $featuredBlog = Blog::where('is_featured', true)->where('status', 'published')->latest()->first();
        $blogs = Blog::where('status', 'published')->orderBy('created_at', 'desc')->get();
        $mostViewedBlogs = Blog::where('status', 'published')
            ->orderBy('views', 'desc') // Assuming 'views' column stores the blog view count
            ->take(2)
            ->get();

        return view('user.blogs', compact('featuredBlog', 'blogs', 'mostViewedBlogs'));
    }
    public function blog_detail($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->update([
            'views' => $blog->views + 1,
        ]);
        $featuredBlogs = Blog::where('is_featured', true)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        // Split into chunks of 4 for carousel items
        $chunkedBlogs = $featuredBlogs->chunk(4);

        return view('user.blog', compact('blog', 'chunkedBlogs'));
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
            'road-side-assistance' => 'user.service.road_side_assistance',
            'car-wrapping' => 'user.service.car_wrapping',
            'major-minor-service' => 'user.service.major_minor_service',
            'electric-car' => 'user.service.electric_car',
            'ceramic' => 'user.service.ceramic',
            'auto-spa' => 'user.service.auto_spa',
            'mechanical-repair' => 'user.service.mechanical_repair',
            'european-cars' => 'user.service.european_car',
            'german-cars' => 'user.service.german-cars',
            'contract' => 'user.service.contract',
        ];

        if (array_key_exists($slug, $services)) {
            return view($services[$slug]);
        }

        abort(404);
    }


    public function submit_enquiry(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|min:3|max:50',
            'user_phone_number' => 'required|digits_between:10,15',
            'email' => 'nullable|email',
            'make' => 'nullable|string|max:30',
            'model' => 'nullable|string|max:30',
            'plate_no' => 'nullable|string|max:15',
            'service' => 'required|string',
            'location' => 'nullable|string|max:100',
        ]);

        ServiceRequest::create($request->all());
        return redirect()->back()->with('success', 'Request submitted successfully.');
    }
}
