document.addEventListener('DOMContentLoaded', function() {
    var profileInput = document.getElementById('profile');
    var profilePreview = document.getElementById('profile-preview');
    if (profileInput && profilePreview) {
        profilePreview.style.display = 'none';
        profileInput.addEventListener('change', function(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profilePreview.src = e.target.result;
                    profilePreview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                profilePreview.src = '#';
                profilePreview.style.display = 'none';
            }
        });
    }
});