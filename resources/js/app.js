// Clean & Minimalist Portfolio Controller for Josh Kaninda

(function () {
    // 1. Theme Management (Light / Dark)
    const initTheme = () => {
        const storedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (storedTheme === 'dark' || (!storedTheme && systemPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        updateThemeIcons();
    };

    const toggleTheme = () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        updateThemeIcons();
    };

    const updateThemeIcons = () => {
        const isDark = document.documentElement.classList.contains('dark');
        document.querySelectorAll('.theme-icon-sun').forEach(el => {
            el.classList.toggle('hidden', !isDark);
        });
        document.querySelectorAll('.theme-icon-moon').forEach(el => {
            el.classList.toggle('hidden', isDark);
        });
    };

    // 2. Language Management (FR / EN)
    let currentLocale = localStorage.getItem('portfolio_lang') || 'fr';

    const setLanguage = (lang) => {
        currentLocale = (lang === 'en') ? 'en' : 'fr';
        localStorage.setItem('portfolio_lang', currentLocale);
        document.documentElement.setAttribute('lang', currentLocale);

        const dismissPopupButton = document.getElementById('dismiss-internship-popup');
        if (dismissPopupButton) {
            dismissPopupButton.setAttribute(
                'aria-label',
                currentLocale === 'en' ? 'Close notification' : 'Fermer la notification'
            );
        }

        // Toggle visibility of language-specific elements
        document.querySelectorAll('[data-lang]').forEach(el => {
            const elLang = el.getAttribute('data-lang');
            if (elLang === currentLocale) {
                el.classList.remove('hidden');
            } else {
                el.classList.add('hidden');
            }
        });

        // Update inline text for elements with data-fr and data-en
        document.querySelectorAll('[data-fr][data-en]').forEach(el => {
            const text = currentLocale === 'en' ? el.getAttribute('data-en') : el.getAttribute('data-fr');
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.setAttribute('placeholder', text);
            } else {
                el.textContent = text;
            }
        });

        // Update segmented toggle buttons
        document.querySelectorAll('.lang-btn').forEach(btn => {
            const btnLang = btn.getAttribute('data-btn-lang');
            if (btnLang === currentLocale) {
                btn.className = 'lang-btn px-2.5 py-1 rounded-md text-xs font-semibold bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 transition-all shadow-xs';
            } else {
                btn.className = 'lang-btn px-2.5 py-1 rounded-md text-xs font-medium text-neutral-500 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-white transition-all';
            }
        });
    };

    // 3. Copy Email to Clipboard
    window.copyEmail = (email) => {
        if (navigator.clipboard) {
            navigator.clipboard.writeText(email).then(() => {
                showToast(currentLocale === 'en' ? 'Email copied to clipboard!' : 'Adresse e-mail copiée !');
            });
        }
    };

    const showToast = (message) => {
        const toast = document.getElementById('toast-notification');
        if (!toast) return;
        const textSpan = toast.querySelector('span') || toast;
        textSpan.textContent = message;
        toast.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
        toast.classList.add('opacity-100', 'translate-y-0');
        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
            toast.classList.remove('opacity-100', 'translate-y-0');
        }, 2600);
    };

    // 4. Mobile Menu
    const setupMobileMenu = () => {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('.mobile-nav-link');

        if (toggleBtn && menu) {
            toggleBtn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (menu) menu.classList.add('hidden');
            });
        });
    };

    // 5. Scroll-triggered internship popup
    const setupInternshipPopup = () => {
        const popup = document.getElementById('internship-popup');
        const dismissButton = document.getElementById('dismiss-internship-popup');
        const contactLink = document.getElementById('internship-popup-contact');

        if (!popup || !dismissButton) {
            return;
        }

        if (sessionStorage.getItem('internship-popup-dismissed') === 'true') {
            return;
        }

        const showPopupAfterScroll = () => {
            if (window.scrollY > 300) {
                popup.classList.remove('hidden');
                window.removeEventListener('scroll', showPopupAfterScroll);
            }
        };

        const dismissPopup = () => {
            popup.classList.add('hidden');
            sessionStorage.setItem('internship-popup-dismissed', 'true');
            window.removeEventListener('scroll', showPopupAfterScroll);
        };

        window.addEventListener('scroll', showPopupAfterScroll, { passive: true });
        showPopupAfterScroll();
        dismissButton.addEventListener('click', () => {
            dismissPopup();
        });
        contactLink?.addEventListener('click', dismissPopup);
    };

    // 6. Contact Form Handler
    const setupContactForm = () => {
        const form = document.getElementById('contact-form');
        const statusMsg = document.getElementById('form-status');
        if (form && statusMsg) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const name = form.querySelector('[name="name"]').value;
                statusMsg.classList.remove('hidden');
                statusMsg.textContent = currentLocale === 'en'
                    ? `Thank you ${name}! Opening your email client to send your message...`
                    : `Merci ${name} ! Ouverture de votre messagerie pour envoyer votre message...`;
                
                const subject = encodeURIComponent(`Contact Portfolio - ${name}`);
                const message = encodeURIComponent(form.querySelector('[name="message"]').value);
                setTimeout(() => {
                    window.location.href = `mailto:josh.kaninda@edu.ece.fr?subject=${subject}&body=${message}`;
                }, 700);
            });
        }
    };

    // Initialize on DOM ready
    document.addEventListener('DOMContentLoaded', () => {
        initTheme();
        setLanguage(currentLocale);
        setupMobileMenu();
        setupInternshipPopup();
        setupContactForm();

        // Theme buttons listeners
        document.querySelectorAll('.theme-toggle-btn').forEach(btn => {
            btn.addEventListener('click', toggleTheme);
        });

        // Language buttons listeners
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const targetLang = btn.getAttribute('data-btn-lang');
                if (targetLang) setLanguage(targetLang);
            });
        });

        // System theme change listener
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
                updateThemeIcons();
            }
        });
    });
})();
