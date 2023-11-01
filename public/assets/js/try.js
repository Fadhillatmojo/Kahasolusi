let sections = document.querySelectorAll('div'); // Ganti "div" menjadi selektor yang sesuai untuk bagian-bagian Anda.
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    let scrollY = window.scrollY;

    sections.forEach(section => {
        let offset = section.offsetTop-150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if (scrollY >= offset && scrollY < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            document.querySelector('header nav a[href="#' + id + '"]').classList.add('active');
        }
    });
}
