<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function show(string $slug): View
    {
        $services = [
            'aerial-photography' => [
                'title' => 'Aerial Photography',
                'icon' => 'camera',
                'subtitle' => 'Capture perspectives beyond the ordinary.',
                'description' => 'Professional aerial photography helps capture properties, events, destinations, and projects from a new perspective.',
                'features' => [
                    'Real estate and property photography',
                    'Event and tourism photography',
                    'Construction progress documentation',
                    'Commercial and promotional imagery',
                ],
                'benefits' => [
                    'Showcase locations from unique angles',
                    'Improve visual marketing materials',
                    'Document large areas efficiently',
                ],
            ],
            'aerial-videography' => [
                'title' => 'Aerial Videography',
                'icon' => 'video',
                'subtitle' => 'Bring your story to life from above.',
                'description' => 'Aerial videography adds dynamic perspectives to films, advertisements, events, and promotional content.',
                'features' => [
                    'Promotional and commercial videos',
                    'Event coverage',
                    'Tourism and destination videos',
                    'Real estate video presentations',
                ],
                'benefits' => [
                    'Create engaging visual content',
                    'Capture smooth aerial sequences',
                    'Enhance storytelling and promotion',
                ],
            ],
            'agricultural-services' => [
                'title' => 'Agricultural Services',
                'icon' => 'sprout',
                'subtitle' => 'Smarter perspectives for modern agriculture.',
                'description' => 'Drone-assisted agricultural services can support field monitoring, crop observation, and farm documentation.',
                'features' => [
                    'Crop and field monitoring',
                    'Farm aerial documentation',
                    'Agricultural mapping',
                    'Field condition assessment',
                ],
                'benefits' => [
                    'Observe larger agricultural areas',
                    'Support data-informed farm decisions',
                    'Improve visibility of field conditions',
                ],
            ],
            'mapping-surveying' => [
                'title' => 'Mapping & Surveying',
                'icon' => 'map',
                'subtitle' => 'Understand the bigger picture.',
                'description' => 'Drone-assisted mapping supports site documentation, land assessment, and planning through aerial data collection.',
                'features' => [
                    'Aerial site mapping',
                    'Land and terrain documentation',
                    'Construction site monitoring',
                    'Project planning support',
                ],
                'benefits' => [
                    'Improve site visibility',
                    'Support planning and documentation',
                    'Collect aerial data efficiently',
                ],
            ],
            'infrastructure-inspection' => [
                'title' => 'Infrastructure Inspection',
                'icon' => 'building-2',
                'subtitle' => 'Inspect with a broader perspective.',
                'description' => 'Drone-assisted visual inspections help document structures and hard-to-reach areas while reducing unnecessary physical access.',
                'features' => [
                    'Building exterior inspections',
                    'Roof and structural documentation',
                    'Industrial facility observation',
                    'Construction progress monitoring',
                ],
                'benefits' => [
                    'Document difficult-to-access areas',
                    'Support maintenance planning',
                    'Reduce some manual inspection exposure',
                ],
            ],
            'real-estate' => [
                'title' => 'Real Estate',
                'icon' => 'house',
                'subtitle' => 'Showcase every property from a new angle.',
                'description' => 'Aerial real estate services help present residential, commercial, and development properties with compelling visual content.',
                'features' => [
                    'Residential property photography',
                    'Commercial property coverage',
                    'Property promotional videos',
                    'Land and surrounding-area views',
                ],
                'benefits' => [
                    'Highlight property surroundings',
                    'Create stronger marketing presentations',
                    'Showcase property scale and location',
                ],
            ],
        ];

        abort_unless(isset($services[$slug]), 404);

        return view('website.services.show', [
            'service' => $services[$slug],
            'slug' => $slug,
        ]);
    }
}
