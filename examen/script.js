function validateForm() {
    const nombre = document.getElementById("nombre").value;
    const mensaje = document.getElementById("mensaje").value;

    // Validación del campo nombre
    const nombreRegex = /^[a-zA-Z\s]+$/;
    if (!nombreRegex.test(nombre)) {
        alert("El nombre no debe contener números ni caracteres especiales.");
        return false;
    }

    // Validación de campos vacíos (HTML ya se encarga de esto con 'required')
    if (!nombre || !mensaje) {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    return true;
}
