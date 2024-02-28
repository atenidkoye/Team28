document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
  
    const name = document.querySelector('input[name="name"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const password = document.querySelector('input[name="password"]').value;
    const pssrepeat = document.querySelector('input[name="pssrepeat"]').value;
  
    if (!name || !email || !password || !pssrepeat) {
      alert('Please fill in all fields');
      return;
    }
  
    if (!validateEmail(email)) {
      alert('Please enter a valid email address');
      return;
    }
  
    if (password !== pssrepeat) {
      alert('Passwords do not match');
      return;
    }
  
    if (password.length < 8) {
      alert('Password must be at least 8 characters long');
      return;
    }
  
    this.submit();
  });
  
  function validateEmail(email) {
    const re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    return re.test(email);
  }
  