// Function to simulate loading process
function simulateLoading() {
    const loadingContainer = document.getElementById('loading-container');
        setTimeout(function () {
            document.getElementById('text').innerText = 'Loading finished';
            loadingContainer.style.backgroundColor = '#ba79f1';
        }, 1000);
}
window.onload = function () {
    simulateLoading();
};
