<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private function getServiceData($service)
    {
        $services = [
            'plumbing' => [
                'slug' => 'plumbing',
                'title' => 'Plumbing Services',
                'subtitle' => 'Expert Plumbing Solutions for Commercial & Industrial',
                'banner_image' => 'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>At RG Plumbing & Home Improvements, we provide comprehensive plumbing services for commercial and industrial properties. Our expert team handles everything from emergency repairs to complete system installations.</p>
                    <p>We specialize in leak detection, pipe repairs, drain cleaning, and bathroom installations, ensuring minimal disruption to your business operations.</p>
                ',
                'features' => [
                    [
                        'title' => 'Emergency Repairs',
                        'description' => 'Fast response for pipe leaks and plumbing emergencies',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>'
                    ],
                    [
                        'title' => 'System Maintenance',
                        'description' => 'Professional drain cleaning and preventive maintenance',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'Drain Cleaning & Maintenance',
                    'Pipe Leak Repairs',
                    'Advanced Leak Detection',
                    'Bathroom Installations',
                    'Sewer Line Services',
                    'Commercial Plumbing Systems'
                ]
            ],
            'water-solutions' => [
                'slug' => 'water-solutions',
                'title' => 'Water Solutions',
                'subtitle' => 'Complete Water Management Systems',
                'banner_image' => 'https://images.unsplash.com/photo-1584267385494-9fdd9a71ad75?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>Our water solutions division specializes in comprehensive water management systems for commercial and industrial properties. We offer complete installation and maintenance of water storage and heating systems.</p>
                    <p>From JoJo tanks to solar geysers and heat pumps, we provide efficient and sustainable solutions for all your water needs.</p>
                ',
                'features' => [
                    [
                        'title' => 'Storage Solutions',
                        'description' => 'JoJo Tanks and water storage systems',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>'
                    ],
                    [
                        'title' => 'Heating Systems',
                        'description' => 'Solar geysers and heat pump installations',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'JoJo Tank Installation',
                    'Solar Geyser Systems',
                    'Heat Pump Installation',
                    'Borehole Installation',
                    'Septic Tank Services',
                    'Water System Maintenance'
                ]
            ],
            'construction' => [
                'slug' => 'construction',
                'title' => 'Construction & Steel Works',
                'subtitle' => 'Professional Construction Solutions',
                'banner_image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>RG Plumbing & Home Improvements delivers comprehensive construction and steel work services for commercial and industrial clients. From building renovations to custom steel fabrications, we ensure quality workmanship.</p>
                    <p>Our construction division handles everything from building works and painting to steel fabrication and installations.</p>
                ',
                'features' => [
                    [
                        'title' => 'Construction Services',
                        'description' => 'Complete building and renovation solutions',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'
                    ],
                    [
                        'title' => 'Steel Works',
                        'description' => 'Custom steel fabrication and installations',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'Building & Renovations',
                    'Professional Painting',
                    'Paving Solutions',
                    'Roof Repairs & Installation',
                    'Steel Work Construction',
                    'Carports & Gates Installation'
                ]
            ],
            'emergency' => [
                'slug' => 'emergency',
                'title' => '24/7 Emergency Services',
                'subtitle' => 'Round-the-Clock Emergency Response',
                'banner_image' => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>Our emergency response team is available 24/7 to handle urgent plumbing and construction issues. We understand that emergencies don\'t wait for business hours, and neither do we.</p>
                    <p>From burst pipes to major leaks, our skilled team responds quickly to minimize damage and restore your systems.</p>
                ',
                'features' => [
                    [
                        'title' => 'Rapid Response',
                        'description' => '24/7 emergency plumbing and repair services',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                    ],
                    [
                        'title' => 'Emergency Repairs',
                        'description' => 'Immediate solutions for urgent problems',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'Burst Pipe Repairs',
                    'Emergency Leak Detection',
                    'Geyser Emergencies',
                    'Drain Blockage Clearing',
                    'Roof Leak Emergency Repairs',
                    'After-Hours Service'
                ]
            ],
            'maintenance' => [
                'slug' => 'maintenance',
                'title' => 'Maintenance Services',
                'subtitle' => 'Preventive Maintenance Solutions',
                'banner_image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>Regular maintenance is key to preventing costly repairs and system failures. Our maintenance services keep your plumbing and construction systems running efficiently.</p>
                    <p>We offer comprehensive maintenance plans tailored to your specific needs, ensuring long-term reliability and performance.</p>
                ',
                'features' => [
                    [
                        'title' => 'Preventive Maintenance',
                        'description' => 'Regular inspections and maintenance services',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>'
                    ],
                    [
                        'title' => 'System Optimization',
                        'description' => 'Performance tuning and efficiency improvements',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'Regular System Inspections',
                    'Preventive Maintenance',
                    'Equipment Servicing',
                    'Performance Optimization',
                    'Scheduled Maintenance Plans',
                    'System Health Checks'
                ]
            ],
            'specialized' => [
                'slug' => 'specialized',
                'title' => 'Specialized Solutions',
                'subtitle' => 'Custom Industrial & Commercial Solutions',
                'banner_image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
                'description' => '
                    <p>We offer specialized solutions for unique industrial and commercial requirements. Our team has the expertise to handle complex installations and custom projects.</p>
                    <p>From custom steel fabrication to specialized plumbing systems, we deliver tailored solutions that meet your specific needs.</p>
                ',
                'features' => [
                    [
                        'title' => 'Custom Solutions',
                        'description' => 'Tailored services for unique requirements',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>'
                    ],
                    [
                        'title' => 'Expert Consultation',
                        'description' => 'Professional advice and project planning',
                        'icon' => '<svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>'
                    ]
                ],
                'services_list' => [
                    'Custom Steel Fabrication',
                    'Industrial Plumbing Systems',
                    'Specialized Equipment Installation',
                    'Complex Project Management',
                    'Technical Consultations',
                    'System Integration Services'
                ]
            ]
        ];

        return $services[$service] ?? abort(404);
    }

    public function plumbing()
    {
        $service = $this->getServiceData('plumbing');
        return view('services.template', compact('service'));
    }

    public function waterSolutions()
    {
        $service = $this->getServiceData('water-solutions');
        return view('services.template', compact('service'));
    }

    public function construction()
    {
        $service = $this->getServiceData('construction');
        return view('services.template', compact('service'));
    }

    public function emergency()
    {
        $service = $this->getServiceData('emergency');
        return view('services.template', compact('service'));
    }

    public function maintenance()
    {
        $service = $this->getServiceData('maintenance');
        return view('services.template', compact('service'));
    }

    public function specialized()
    {
        $service = $this->getServiceData('specialized');
        return view('services.template', compact('service'));
    }
} 