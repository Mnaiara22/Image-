document.addEventListener('copy', function(e) {
    const selectedText = window.getSelection().toString();
    if (selectedText) {
        // Aquí podrías hacer algo con el texto copiado si lo deseas.
        console.log("Texto copiado: ", selectedText);
    }
});