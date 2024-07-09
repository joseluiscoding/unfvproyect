const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
        alert('El usuario no está registrado. Por favor, inténtelo de nuevo.');
    }