// Gestion des onglets
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const tab = this.getAttribute('data-tab');
        
        document.querySelectorAll('.tab-content').forEach(section => {
            section.classList.remove('active');
        });

        document.getElementById(tab).classList.add('active');
    });
});

// Mode sombre
const toggle = document.getElementById('darkModeToggle');
toggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});