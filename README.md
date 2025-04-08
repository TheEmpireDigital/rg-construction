# RG Plumbing & Home Improvements Website

A modern, responsive website for RG Plumbing & Home Improvements, a professional plumbing and construction services company in Johannesburg.

## Features

- **Responsive Design**: Fully responsive website that works on all devices
- **SEO Optimized**: Proper meta tags, schema markup, and structured data
- **Progressive Web App (PWA)**: Works offline and can be installed on devices
- **Contact Form**: Easy-to-use contact form for service inquiries
- **Service Pages**: Detailed information about all services offered
- **Gallery**: Showcase of completed projects
- **Performance Optimized**: Fast loading times with proper caching

## Tech Stack

- **Backend**: Laravel 10
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Deployment**: Apache with .htaccess configuration

## Setup Instructions

1. Clone the repository
   ```
   git clone https://github.com/yourusername/rgplumbing.git
   cd rgplumbing
   ```

2. Install dependencies
   ```
   composer install
   npm install
   ```

3. Create environment file
   ```
   cp .env.example .env
   ```

4. Generate application key
   ```
   php artisan key:generate
   ```

5. Configure your database in the .env file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=rgplumbing
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. Run migrations
   ```
   php artisan migrate
   ```

7. Build assets
   ```
   npm run build
   ```

8. Start the development server
   ```
   php artisan serve
   ```

## SEO Features

- Custom meta titles and descriptions for each page
- Structured data for LocalBusiness, Service, and ContactPoint
- Canonical URLs to prevent duplicate content
- XML sitemap for better indexing
- robots.txt file to guide search engines

## PWA Features

- Service Worker for offline functionality
- Web App Manifest for installation on devices
- Offline page for when users lose connection
- Cache-first strategy for faster loading

## License

This project is proprietary and confidential. Unauthorized copying, distribution, or use is strictly prohibited.

## Contact

For any inquiries, please contact:
- Email: mugovemachaka@gmail.com
- Phone: +27 74 542 8879
