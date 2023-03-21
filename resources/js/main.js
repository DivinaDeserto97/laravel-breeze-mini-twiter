  // Funktion zum Umschalten des Passwort-Feldtyps
  function togglePasswordVisibility(inputId, buttonId) {
    const input = document.getElementById(inputId);
    const button = document.getElementById(buttonId);

    button.addEventListener('click', () => {
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      button.textContent = type === 'password' ? 'show' : 'hide';
    });
  }

  // Verwenden Sie die Funktion für jedes Passwort-Feld
  togglePasswordVisibility('password', 'password_show');
  togglePasswordVisibility('password_confirmation', 'password_confirmation_show');