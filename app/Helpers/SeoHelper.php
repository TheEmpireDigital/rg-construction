<?php

namespace App\Helpers;

class SeoHelper
{
    /**
     * Generate LocalBusiness schema for the homepage
     *
     * @return string
     */
    public static function getLocalBusinessSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'RG Plumbing & Home Improvements',
            'image' => asset('images/brand/placeholder-logo.svg'),
            'description' => 'Professional plumbing and construction services in Johannesburg. Available 24/7 for emergency services.',
            'url' => url('/'),
            'telephone' => '+27717520270',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Johannesburg',
                'addressCountry' => 'ZA',
                'addressRegion' => 'Gauteng'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '-26.2041',
                'longitude' => '28.0473'
            ],
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => [
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday',
                        'Saturday',
                        'Sunday'
                    ],
                    'opens' => '00:00',
                    'closes' => '23:59'
                ]
            ],
            'sameAs' => [
                'https://www.facebook.com/rgplumbing',
                'https://www.instagram.com/rgplumbing'
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Generate Service schema for service pages
     *
     * @param string $serviceName
     * @param string $description
     * @param string $image
     * @return string
     */
    public static function getServiceSchema($serviceName, $description, $image)
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $serviceName,
            'description' => $description,
            'provider' => [
                '@type' => 'LocalBusiness',
                'name' => 'RG Plumbing & Home Improvements',
                'image' => asset('images/brand/placeholder-logo.svg')
            ],
            'image' => $image,
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Johannesburg'
            ],
            'offers' => [
                '@type' => 'Offer',
                'availability' => 'https://schema.org/24-7'
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Generate ContactPoint schema for contact page
     *
     * @return string
     */
    public static function getContactPointSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Contact RG Plumbing & Home Improvements',
            'description' => 'Get in touch with RG Plumbing & Home Improvements for professional plumbing and construction services in Johannesburg.',
            'url' => url('/contact'),
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+27717520270',
                    'contactType' => 'customer service',
                    'availableLanguage' => ['English'],
                    'areaServed' => 'ZA',
                    'contactOption' => 'TollFree'
                ],
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+27839805130',
                    'contactType' => 'emergency service',
                    'availableLanguage' => ['English'],
                    'areaServed' => 'ZA',
                    'contactOption' => 'TollFree'
                ]
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Generate FAQPage schema for FAQ sections
     *
     * @param array $faqs
     * @return string
     */
    public static function getFaqSchema($faqs)
    {
        $mainEntity = [];
        
        foreach ($faqs as $faq) {
            $mainEntity[] = [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer']
                ]
            ];
        }
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $mainEntity
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
} 