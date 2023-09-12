const nameInput = document.getElementById('name');
const slugInput = document.getElementById('slug');

nameInput.addEventListener('input', function() {
    const value = nameInput.value;
    const slug = value.toLowerCase().replace(/ /g, '-');
    slugInput.value = slug;
});
