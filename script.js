document.getElementById('clientForm').addEventListener('submit', function (e) {
    const nom = document.getElementById('nom').value.trim();
    const email = document.getElementById('email').value.trim();
    const telephone = document.getElementById('telephone').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!nom || !email || !telephone || !message) {
        alert("Veuillez remplir tous les champs.");
        e.preventDefault(); // Empêche l'envoi du formulaire
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Veuillez entrer une adresse email valide.");
        e.preventDefault();
    }
});
