<x-layout>
      <x-page-heading>Register</x-page-heading>
      <form id="register-form" method="POST" enctype="multipart/form-data">
          @csrf
          <x-forms.input label="Your_name" name="name" />
          <x-forms.input label="email" name="email" type="email" />
          <x-forms.input label="password" name="password" type="password" />
          <x-forms.input label="password_confirmation" name="password_confirmation" type="password" />
          <x-forms.divider/>
          <x-forms.input label="employer_name" name="employer" />
          <x-forms.input label="employer_logo" name="logo" type="file" />
          <x-forms.button>Create Account</x-forms.button>
      </form>
  
      <script>
          document.getElementById('register-form').addEventListener('submit', function(event) {
              event.preventDefault(); // Prevent the default form submission
  
              const formData = new FormData(this);
              const token = document.querySelector('input[name="_token"]').value;
  
              fetch('/register', {
                  method: 'POST',
                  headers: {
                      'X-CSRF-TOKEN': token, // Include CSRF token
                      'Accept': 'application/json',
                  },
                  body: formData,
              })
              .then(response => {
                  if (!response.ok) {
                      return response.json().then(err => { throw err; });
                  }
                  return response.json();
              })
              .then(data => {
                  console.log(data);
                  // Handle successful registration (e.g., redirect or show a message)
                  window.location.href = '/'; // Redirect on success
              })
              .catch(error => {
                  console.error('There was a problem with the registration:', error);
                  // Handle validation errors or other issues
              });
          });
      </script>
  </x-layout>
  