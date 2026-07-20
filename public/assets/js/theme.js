/**
 * Theme Manager for Light/Dark Mode
 * 
 * Handles reading localStorage, system preference detection,
 * and applying the correct CSS variables to the document.
 * This should be loaded in the <head> to prevent flicker.
 */

(function () {
    // Function to get the preferred theme
    function getPreferredTheme() {
        const storedTheme = localStorage.getItem('theme');
        if (storedTheme) {
            return storedTheme;
        }
        // Fallback to dark theme first
        return 'dark';
    }

    // Function to set the theme on the document element
    function setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);

        // Update toggle icons if they exist (will run after DOM content loaded)
        updateToggleIcon(theme);
    }

    // Function to update the UI icons based on theme
    function updateToggleIcon(theme) {
        const lightIcon = document.getElementById('theme-icon-light');
        const darkIcon = document.getElementById('theme-icon-dark');

        if (lightIcon && darkIcon) {
            if (theme === 'dark') {
                lightIcon.style.display = 'none';
                darkIcon.style.display = 'block';
            } else {
                lightIcon.style.display = 'block';
                darkIcon.style.display = 'none';
            }
        }
    }

    // Apply theme immediately to prevent flicker
    const initialTheme = getPreferredTheme();
    setTheme(initialTheme);

    // Expose toggle function to global scope for the button click handler
    window.toggleTheme = function () {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    };

    // Listen for system theme changes if no local override
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Ensure icons are set correctly on DOMContentLoaded
    document.addEventListener('DOMContentLoaded', () => {
        updateToggleIcon(document.documentElement.getAttribute('data-theme'));
    });
})();
