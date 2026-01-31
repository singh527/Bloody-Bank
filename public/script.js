// JavaScript for toggling between login and signup forms

document.addEventListener('DOMContentLoaded', () => {
    const loginContainer = document.getElementById('login-container');
    const signupContainer = document.getElementById('signup-container');

    const showRegisterLink = document.getElementById('show-register');
    const showLoginLink = document.getElementById('show-login');

    // Show Signup Form
    showRegisterLink.addEventListener('click', (e) => {
        e.preventDefault();
        loginContainer.classList.add('hidden');
        signupContainer.classList.remove('hidden');
    });

    // Show Login Form
    showLoginLink.addEventListener('click', (e) => {
        e.preventDefault();
        signupContainer.classList.add('hidden');
        loginContainer.classList.remove('hidden');
    });
});


 
// donation page js 
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('book-slot-form');
    const submitButton = document.getElementById('submit-button');

    // Form submission event
    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevent actual form submission

        // Fetch form data
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        const bloodGroup = document.getElementById('blood-group').value;
        const gender = document.getElementById('gender').value;
        const time = document.getElementById('time').value;

        // Simple validation
        if (!name || !address || !bloodGroup || !gender || !time) {
            alert('Please fill out all fields.');
            return;
        }

        // Show a confirmation alert
        alert(`Thank you, ${name}! Your slot for blood donation (${bloodGroup}) at ${time} has been successfully booked.`);

        // Reset the form after submission
        form.reset();
    });

    // Optional: Add scroll-to behavior for "Donate Now" button
    const donateButton = document.querySelector('.btn-donate');
    donateButton.addEventListener('click', (e) => {
        e.preventDefault();
        const bookSlotSection = document.getElementById('book-slot');
        bookSlotSection.scrollIntoView({ behavior: 'smooth' });
    });
});
// about us challenge
// Countdown Timer Logic
const targetDate = new Date("2025-02-27T23:59:59").getTime();

function updateCountdown() {
    
    const now = new Date().getTime();
    const distance = targetDate - now;
    console.log("Target Date:", new Date(targetDate).toLocaleString());
console.log("Current Time:", new Date(now).toLocaleString());
console.log("Time Difference:", targetDate - now);

    // Calculate time
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update HTML
    document.getElementById("days").textContent = days;
    document.getElementById("hours").textContent = hours;
    document.getElementById("minutes").textContent = minutes;
    document.getElementById("seconds").textContent = seconds;

    // Stop timer if the countdown is over
    if (distance < 0) {
        clearInterval(timerInterval);
        document.querySelector(".countdown-timer").innerHTML = "<h3>Challenge Completed!</h3>";
    }
}

// Update every second
const timerInterval = setInterval(updateCountdown, 1000);
