function validateForm() {
    // Reset previous warnings
    document.getElementById('enter').innerText = '';

    // Get input values
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Check conditions
    if (username.length < 5) {
        document.getElementById('enter').innerText = 'Username should be at least 5 characters.';
    } else if (password.length < 8) {
        document.getElementById('enter').innerText = 'Password should be at least 8 characters.';
    } else {
        // Perform authentication logic here (not implemented in this example)
        alert('Authentication successful!');
    }
}
