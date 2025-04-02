<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Professional Plumbing',
                'image' => 'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Expert plumbing services for commercial and industrial properties.',
                'features' => [
                    'Drain Cleaning & Maintenance',
                    'Pipe Leak Repairs',
                    'Advanced Leak Detection',
                    'Geyser Services',
                    'Bathroom Installations',
                    'Sewer Line Solutions'
                ],
                'route' => 'service.plumbing'
            ],
            [
                'title' => 'Water Management Systems',
                'image' => 'https://images.unsplash.com/photo-1584267385494-9fdd9a71ad75?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Complete water management solutions for your business.',
                'features' => [
                    'JoJo Tank Installation',
                    'Heat Pump Systems',
                    'Borehole Installation',
                    'Solar Geyser Solutions',
                    'Septic Tank Services',
                    'Water System Maintenance'
                ],
                'route' => 'service.water-solutions'
            ],
            [
                'title' => 'Construction & Steel Works',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Professional construction and steel work services.',
                'features' => [
                    'Building & Renovations',
                    'Professional Painting',
                    'Paving Solutions',
                    'Roof Repairs & Installation',
                    'Steel Work Construction',
                    'Carports & Gates'
                ],
                'route' => 'service.construction'
            ],
            [
                'title' => 'Emergency Services',
                'image' => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => '24/7 emergency response for urgent plumbing needs.',
                'features' => [
                    '24/7 Availability',
                    'Rapid Response',
                    'Emergency Repairs',
                    'Quick Solutions'
                ],
                'route' => 'service.emergency'
            ],
            [
                'title' => 'Maintenance Services',
                'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Regular maintenance to keep your systems running smoothly.',
                'features' => [
                    'Regular Inspections',
                    'Preventive Maintenance',
                    'System Upgrades',
                    'Quality Checks'
                ],
                'route' => 'service.maintenance'
            ],
            [
                'title' => 'Specialized Solutions',
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Custom solutions for unique industrial requirements.',
                'features' => [
                    'Custom Installations',
                    'System Design',
                    'Expert Consultation',
                    'Modern Technology'
                ],
                'route' => 'service.specialized'
            ]
        ];

        return view('home', compact('services'));
    }
} 