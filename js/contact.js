function id() {
    var nm = document.getElementById("idNome").value;
    if (nm == "") {
        document.getElementById("idNome").style.borderColor = "#FF0000";
        window.alert("Digite seu Nome");
    } else {
        console.log("Nome OK");
    }

    var em = document.getElementById("Email").value;
    if (em == "") {
        document.getElementById("Email").focus();
        document.getElementById("Email").style.borderColor = "#FF0000";
        window.alert("Digite seu E-mail");
    } else if (em.indexOf("@") == -1 || em.indexOf(".") == -1) {
        document.getElementById("Email").style.borderColor = "#FF0000";
        window.alert("Digite um Email Válido");
    } else {
        console.log("Email OK");
        document.getElementById("Email").style.borderColor = ""; // Remover a borda vermelha se o email for válido
    }
}