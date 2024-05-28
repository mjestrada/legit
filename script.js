document.addEventListener('DOMContentLoaded', function() {
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signUpForm = document.getElementById('signup');
    const signInForm = document.getElementById('signIn');

    signUpButton.addEventListener('click', function() {
        signUpForm.style.display = 'block';
        signInForm.style.display = 'none';
    });

    signInButton.addEventListener('click', function() {
        signUpForm.style.display = 'none';
        signInForm.style.display = 'block';
    });
});