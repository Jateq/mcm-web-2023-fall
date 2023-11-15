// Function to update the loading indicator text
function updateLoadingIndicator() {
    const indicator = document.getElementById('loading-indicator');
    indicator.innerText += '.';
}

// Function to simulate loading process
function simulateLoading() {
    // Simulate a task that takes time to complete
    setTimeout(function () {
        updateLoadingIndicator();
        // Check if loading is complete (you can replace this condition with your own logic)
        if (document.readyState === 'complete') {
            document.getElementById('loading-indicator').innerText = 'Loading Complete';
        } else {
            // Continue simulating loading
            simulateLoading();
        }
    }, 100); // Update every 100 milliseconds
}

// Start the loading simulation when the page loads
window.onload = function () {
    simulateLoading();
};