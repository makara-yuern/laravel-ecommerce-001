window.toggleUserDropdown = function(e) {
    e.stopPropagation();
    const userInfo = e.target.closest('.user-info');
    const dropdown = userInfo.querySelector('.user-dropdown');
    const isOpen = dropdown.style.display === 'block';
    document.querySelectorAll('.user-dropdown').forEach(function(d) {
        d.style.display = 'none';
    });
    dropdown.style.display = isOpen ? 'none' : 'block';
}

window.addEventListener('click', function() {
    document.querySelectorAll('.user-dropdown').forEach(function(d) {
        d.style.display = 'none';
    });
});
