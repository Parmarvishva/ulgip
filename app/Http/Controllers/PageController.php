<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\CyberAlert;

class PageController extends Controller
{
    public function home()
    {
        $latestCirculars = Document::where('category', 'circular')
            ->orderBy('published_date', 'desc')->take(3)->get();

        $latestLegal = Document::where('category', 'legal')
            ->orderBy('published_date', 'desc')->take(3)->get();

        $latestAlerts = CyberAlert::active()
            ->orderBy('alert_date', 'desc')->take(3)->get();

        return view('welcome', compact('latestCirculars', 'latestLegal', 'latestAlerts'));
    }

    public function aiAssistant()
    {
        return view('pages.ai-assistant');
    }

    public function legalLibrary(Request $request)
    {
        $category = $request->get('category', 'all');
        $sort     = $request->get('sort', 'latest');
        $search   = $request->get('q', '');

        $query = Document::whereIn('category', ['legal', 'sop', 'act', 'rule']);

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        if ($search) {
            $query->search($search);
        }

        if ($sort === 'latest') {
            $query->orderBy('published_date', 'desc');
        } elseif ($sort === 'oldest') {
            $query->orderBy('published_date', 'asc');
        } elseif ($sort === 'title') {
            $query->orderBy('title', 'asc');
        } elseif ($sort === 'downloads') {
            $query->orderBy('download_count', 'desc');
        }

        $documents = $query->paginate(9)->withQueryString();

        $counts = [
            'all'  => Document::whereIn('category', ['legal', 'sop', 'act', 'rule'])->count(),
            'legal'=> Document::where('category', 'legal')->count(),
            'sop'  => Document::where('category', 'sop')->count(),
            'act'  => Document::where('category', 'act')->count(),
            'rule' => Document::where('category', 'rule')->count(),
        ];

        return view('pages.legal-library', compact('documents', 'category', 'sort', 'search', 'counts'));
    }

    public function circulars(Request $request)
    {
        $category = $request->get('category', 'all');
        $search   = $request->get('q', '');
        $sort     = $request->get('sort', 'latest');

        $query = Document::where('category', 'circular');

        if ($category !== 'all') {
            $query->where('sub_category', $category);
        }

        if ($search) {
            $query->search($search);
        }

        if ($sort === 'latest') {
            $query->orderBy('published_date', 'desc');
        } elseif ($sort === 'oldest') {
            $query->orderBy('published_date', 'asc');
        }

        $circulars = $query->paginate(9)->withQueryString();

        return view('pages.circulars', compact('circulars', 'category', 'search', 'sort'));
    }

    public function search(Request $request)
    {
        $query    = $request->get('q', '');
        $category = $request->get('category', 'all');
        $type     = $request->get('type', 'all');
        $results  = collect();
        $total    = 0;

        if ($query) {
            $docQuery = Document::search($query);

            if ($category !== 'all') {
                $docQuery->where('category', $category);
            }

            $results = $docQuery->paginate(10)->withQueryString();
            $total   = $results->total();
        }

        return view('pages.search', compact('query', 'category', 'type', 'results', 'total'));
    }

    public function cyberAlerts(Request $request)
    {
        $severity = $request->get('severity', 'all');
        $category = $request->get('category', 'all');

        $query = CyberAlert::active()->orderBy('alert_date', 'desc');

        if ($severity !== 'all') {
            $query->where('severity', $severity);
        }

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        $alerts = $query->paginate(10)->withQueryString();

        $stats = [
            'critical' => CyberAlert::active()->where('severity', 'critical')->count(),
            'high'     => CyberAlert::active()->where('severity', 'high')->count(),
            'medium'   => CyberAlert::active()->where('severity', 'medium')->count(),
            'low'      => CyberAlert::active()->where('severity', 'low')->count(),
            'total'    => CyberAlert::active()->count(),
        ];

        return view('pages.cyber-alerts', compact('alerts', 'severity', 'category', 'stats'));
    }

    public function resources(Request $request)
    {
        $category = $request->get('category', 'all');
        $search   = $request->get('q', '');

        $query = Document::query();

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        if ($search) {
            $query->search($search);
        }

        $resources = $query->orderBy('published_date', 'desc')->paginate(12)->withQueryString();

        $categoryCounts = [
            'all'      => Document::count(),
            'legal'    => Document::where('category', 'legal')->count(),
            'circular' => Document::where('category', 'circular')->count(),
            'sop'      => Document::where('category', 'sop')->count(),
        ];

        return view('pages.resources', compact('resources', 'category', 'search', 'categoryCounts'));
    }

    public function about()
    {
        $stats = [
            'documents' => Document::count() ?: 5000,
            'circulars' => Document::where('category', 'circular')->count() ?: 250,
            'sops'      => Document::where('category', 'sop')->count() ?: 100,
            'alerts'    => CyberAlert::count() ?: 500,
        ];

        return view('pages.about', compact('stats'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function settings()
    {
        return view('pages.settings');
    }
}
