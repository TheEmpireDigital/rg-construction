# RG Plumbing & Home Improvements Website

<div align="center">
  <img src="public/images/brand/placeholder-logo.svg" alt="RG Plumbing & Home Improvements" width="300">
</div>

## 📋 Overview

A modern, responsive website for RG Plumbing & Home Improvements, showcasing their professional plumbing and construction services in Johannesburg. The website features a clean design, intuitive navigation, and comprehensive service information.

## 🛠️ Tech Stack

- **Framework:** Laravel 11.x
- **Frontend:**
  - Tailwind CSS 3.x
  - Alpine.js 3.x
  - Blade Templates
- **Database:** MySQL 8.0
- **Server Requirements:**
  - PHP >= 8.2
  - Composer
  - Node.js & NPM
  - MySQL

## ✨ Features

- 🏠 Modern, responsive design
- 📱 Mobile-first approach
- 🖼️ Interactive image gallery with categories
- 📝 Dynamic service pages
- 📞 Contact form with email integration
- 🔄 Smooth animations and transitions
- 🎨 Custom styling with Tailwind CSS
- 🔧 Easy maintenance and updates

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone [repository-url]
   cd [project-folder]
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database in `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Configure email settings in `.env`**
   ```env
   MAIL_MAILER=smtp
   MAIL_SCHEME=null
   MAIL_HOST=sandbox.smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=********
   MAIL_PASSWORD=*********
   MAIL_FROM_ADDRESS="inquiry@rgplumbing.co.za"
   MAIL_FROM_NAME="${APP_NAME}"

   # Note: These settings use Mailtrap for development/testing
   # For production, you'll need to update these with your production mail server details
   # Mailtrap is a testing service that catches all emails sent from your application
   # This prevents accidental emails from being sent to real users during development
   ```

7. **Run migrations**
   ```bash
   php artisan migrate
   ```

8. **Build assets**
   ```bash
   npm run dev
   ```

## 🏃‍♂️ Running the Application

1. **Start the development server**
   ```bash
   php artisan serve
   ```

2. **Watch for asset changes**
   ```bash
   npm run watch
   ```

3. **Access the website**
   ```
   http://localhost:8000
   ```

## 📱 Mobile Testing

The website is fully responsive and can be tested on mobile devices:
1. Ensure your development device and mobile device are on the same network
2. Use your local IP address instead of localhost
3. Access the website on your mobile device using:
   ```
   http://[your-local-ip]:8000
   ```

## 🔧 Maintenance

Regular maintenance tasks include:
- Updating Laravel and dependencies
- Monitoring error logs
- Database backups
- Content updates
- Security patches

## 🐛 Bug Reporting

Found a bug? Please report it to:
- 📧 Email: mugopower@gmail.com
- Include:
  - Detailed description of the issue
  - Steps to reproduce
  - Screenshots if applicable
  - Browser/device information

## 📄 License

**Private Codebase - All Rights Reserved**

This codebase is proprietary and confidential. Unauthorized copying, modification, distribution, or use of this codebase, via any medium, is strictly prohibited.

Developed and maintained by:
- **Mugove Machaka**
- **The Empire Digital**
- Website: [https://vakara.africa](https://vakara.africa)

## 📞 Contact

For any inquiries about the website or services:
- **RG Plumbing & Home Improvements**
  - 📞 Phone: 071 752 0270 | 083 980 5130
  - 📧 Email: rgplumbimprove@gmail.com

For technical support or website maintenance:
- **The Empire Digital**
  - 📧 Email: mugopower@gmail.com
  - 🌐 Website: [https://vakara.africa](https://vakara.africa)
