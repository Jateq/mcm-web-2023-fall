function toggleNav() {
    const navList = document.querySelector('.nav-list');
    const bars = document.querySelectorAll('.bar');

    navList.classList.toggle('show');

    // Toggle the 'cross' class for each bar
    bars.forEach((bar, index) => {
        bar.classList.toggle(`cross${index + 1}`);
    });
}
