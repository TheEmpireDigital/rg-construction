# RG Plumbing & Home Improvements - Deployment Checklist

## Pre-Deployment Tasks

1. **Environment Configuration**
   - [ ] Copy `.env.example` to `.env` on the production server
   - [ ] Generate a new application key: `php artisan key:generate`
   - [ ] Set the correct database credentials
   - [ ] Set the correct mail server credentials
   - [ ] Ensure `APP_DEBUG=false` is set

2. **Database**
   - [ ] Create the database if it doesn't exist
   - [ ] Run migrations: `php artisan migrate`
   - [ ] Seed the database if needed: `php artisan db:seed`

3. **Assets**
   - [ ] Build assets for production: `npm run build`
   - [ ] Ensure all images are optimized for web
   - [ ] Check that all favicon files exist in the correct locations

4. **File Permissions**
   - [ ] Set correct permissions on storage and bootstrap/cache directories:
     ```
     chmod -R 775 storage bootstrap/cache
     chown -R www-data:www-data storage bootstrap/cache
     ```

5. **Cache and Configuration**
   - [ ] Clear all caches:
     ```
     php artisan cache:clear
     php artisan config:clear
     php artisan view:clear
     php artisan route:clear
     ```
   - [ ] Cache configuration for production:
     ```
     php artisan config:cache
     php artisan route:cache
     php artisan view:cache
     ```

6. **SSL Certificate**
   - [ ] Ensure SSL certificate is properly installed
   - [ ] Verify HTTPS is working correctly

7. **Domain Configuration**
   - [ ] Update DNS records if needed
   - [ ] Verify domain is pointing to the correct server

## Post-Deployment Tasks

1. **Testing**
   - [ ] Test the homepage and all main pages
   - [ ] Test the contact form
   - [ ] Test the gallery
   - [ ] Test the services pages
   - [ ] Test on mobile devices
   - [ ] Test in different browsers

2. **Performance**
   - [ ] Run a Lighthouse audit
   - [ ] Check Google Search Console for any issues
   - [ ] Verify that all assets are loading correctly

3. **Monitoring**
   - [ ] Set up error logging
   - [ ] Configure backup solution
   - [ ] Set up uptime monitoring

## Rollback Plan

If issues are encountered after deployment:

1. Keep the previous version backed up
2. Revert to the previous version if necessary
3. Document any issues encountered for future reference

## Maintenance

Regular maintenance tasks:

1. Update Laravel and dependencies regularly
2. Monitor error logs
3. Backup the database regularly
4. Check for security vulnerabilities
5. Update content as needed 