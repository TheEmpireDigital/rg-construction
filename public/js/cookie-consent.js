/**
 * Cookie Consent Manager
 * Handles user cookie preferences and applies them across the site
 */

class CookieConsentManager {
  constructor() {
    this.cookieConsent = localStorage.getItem('cookieConsent');
    this.init();
  }

  init() {
    // Apply cookie preferences based on user choice
    if (this.cookieConsent === 'false') {
      this.disableCookies();
    } else if (this.cookieConsent === 'true') {
      this.enableCookies();
    }
    
    // Listen for changes to cookie consent
    window.addEventListener('storage', (e) => {
      if (e.key === 'cookieConsent') {
        this.cookieConsent = e.newValue;
        if (e.newValue === 'false') {
          this.disableCookies();
        } else if (e.newValue === 'true') {
          this.enableCookies();
        }
      }
    });
  }

  enableCookies() {
    // Enable analytics cookies
    this.setCookie('analytics_enabled', 'true', 365);
    
    // Enable functionality cookies
    this.setCookie('functionality_enabled', 'true', 365);
    
    // Enable personalization cookies
    this.setCookie('personalization_enabled', 'true', 365);
  }

  disableCookies() {
    // Disable analytics cookies
    this.deleteCookie('analytics_enabled');
    
    // Disable functionality cookies
    this.deleteCookie('functionality_enabled');
    
    // Disable personalization cookies
    this.deleteCookie('personalization_enabled');
  }

  setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
  }

  deleteCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999; path=/';
  }

  getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }
}

// Initialize the cookie consent manager when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  window.cookieConsentManager = new CookieConsentManager();
}); 