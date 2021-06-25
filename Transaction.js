function showInfo(str) {
    var elements = ["Contact", "Email", "Balance"];
    var i;
    var request = new XMLHttpRequest();
    request.open('GET', 'connection.php?b=' + str, false);

    if (str == 0) {
        for (i = 0; i < elements.length; i++) {
            document.getElementById(elements[i]).innerHTML = "";
        }
    }

    else {
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var jsonvar = this.response;
                jsonvar = JSON.parse(jsonvar);
                for (i = 0; i < elements.length; i++) {
                    document.getElementById(elements[i]).innerHTML = jsonvar[i];
                }
            }
        };

        request.send();
    }
}

function showToInfo(str) {
    var elements = ["TContact", "TEmail", "TBalance"];
    var i;
    var request = new XMLHttpRequest();
    request.open('GET', 'connection.php?b=' + str, false);

    if (str == 0) {
        for (i = 0; i < elements.length; i++) {
            document.getElementById(elements[i]).innerHTML = "";
        }
    }

    else {
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var jsonvar = this.response;
                jsonvar = JSON.parse(jsonvar);
                for (i = 0; i < elements.length; i++) {
                    document.getElementById(elements[i]).innerHTML = jsonvar[i];
                }
            }
        };

        request.send();
    }
}

function updateBalance() {
    var senderC = document.getElementById("Email").innerHTML;
    var recC = document.getElementById("TEmail").innerHTML;
    var balC = document.getElementById("Cbal").value;


    if (!(balC > 0))
        alert("Enter a valid amount");
    else if (senderC.length == 0)
        alert("Please select a beneficiary.");
    else if (recC.length == 0)
        alert("Please select a recepient.");
    else if (senderC == recC)
        alert("Beneficiary and recepient cannot be the same person.");
    else {
        var request = new XMLHttpRequest();
        request.open('GET', 'updatebalance.php?s=' + senderC + "&r=" + recC + "&bal=" + balC, false);


        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert(request.responseText);
                location.reload()
            }
        };

        request.send();
    }

}

function openDrop() {
    var ul = document.getElementById("navbaritemsid");
    var logo = document.getElementById("logoid");
    var butt = document.getElementById("dropDownB");
    if ((ul.className === "navbaritems") && (logo.className === "logo")) {
        ul.className = ul.className + " responsive";
        logo.className = logo.className + " responsive";
        butt.className = butt.className + " responsive";
    }
    else {
        ul.className = "navbaritems";
        logo.className = "logo";
        butt.className = "dropDown";
    }
}
