// Advanced School Management System - JavaScript

document.addEventListener('DOMContentLoaded', function () {
    // Update current date and time
    function updateDateTime() {
        const dateElement = document.getElementById('current-date');
        const timeElement = document.getElementById('current-time');

        if (dateElement || timeElement) {
            const now = new Date();
            const dateStr = now.toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            const timeStr = now.toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            if (dateElement) dateElement.textContent = dateStr;
            if (timeElement) timeElement.textContent = timeStr;
        }
    }

    // Update date/time on load and every second
    updateDateTime();
    setInterval(updateDateTime, 1000);

    // Toggle sidebar on button click
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar-wrapper');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('d-none');
        });
    }

    // Add animation to stat cards
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';

        setTimeout(() => {
            card.style.transition = 'all 0.5s ease-in-out';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('a.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            // Add active class to clicked link
            this.classList.add('active');
        });
    });

    // Add hover effects to table rows
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function () {
            this.style.backgroundColor = '#f3f4f6';
            this.style.transition = 'background-color 0.3s ease';
        });
        row.addEventListener('mouseleave', function () {
            this.style.backgroundColor = '';
        });
    });

    // Responsive design adjustments
    function handleResize() {
        const width = window.innerWidth;
        const sidebar = document.getElementById('sidebar-wrapper');

        if (width < 768 && sidebar) {
            sidebar.classList.add('d-none');
        } else if (width >= 768 && sidebar) {
            sidebar.classList.remove('d-none');
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize(); // Call on initial load

    // Auto-hide mobile menu when clicking a nav link
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (window.innerWidth < 768 && sidebar) {
                sidebar.classList.add('d-none');
            }
        });
    });
});
