<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz Rezerwacji Hotelu</title>
    <script>
        function updateForm() {
            var numPeople = document.getElementById("people").value;
            var peopleDiv = document.getElementById("peopleDiv");

            while (peopleDiv.children.length > 0) {
                peopleDiv.removeChild(peopleDiv.lastChild);
            }

            for (var i = 1; i <= numPeople; i++) {
                var personHeader = document.createElement("h3");
                personHeader.textContent = "Gość " + i;
                peopleDiv.appendChild(personHeader);

                var personDiv = document.createElement("div");
                peopleDiv.appendChild(personDiv);

                var firstNameLabel = document.createElement("label");
                firstNameLabel.style.marginRight = "4px";
                firstNameLabel.textContent = "Imię:";
                personDiv.appendChild(firstNameLabel);

                var firstNameInput = document.createElement("input");
                firstNameInput.type = "text";
                firstNameInput.name = "firstName" + i;
                personDiv.appendChild(firstNameInput);

                personDiv.appendChild(document.createElement("br"));
                personDiv.appendChild(document.createElement("br"));

                var lastNameLabel = document.createElement("label");
                lastNameLabel.style.marginRight = "4px";
                lastNameLabel.textContent = "Nazwisko:";
                personDiv.appendChild(lastNameLabel);

                var lastNameInput = document.createElement("input");
                lastNameInput.type = "text";
                lastNameInput.name = "lastName" + i;
                personDiv.appendChild(lastNameInput);
            }
            peopleDiv.appendChild(document.createElement("br"));
        }
    </script>
</head>
<body>

<h2>Formularz Rezerwacji Hotelu</h2>
<form action="zad3summary.php" method="post">
    <label for="people">Ilość gości:</label>
    <select id="people" name="people" onchange="updateForm()" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>

    <div id="peopleDiv">
        <h3>Gość 1</h3>
        <div>
            <label for="firstName1">Imię:</label>
            <input type="text" id="firstName1" name="firstName1" required><br><br>
            <label for="lastName1">Nazwisko:</label>
            <input type="text" id="lastName1" name="lastName1" required><br><br>
        </div>
    </div>

    <div id="reservationData">
        <h3>Szczegóły rezerwacji</h3>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Numer telefonu:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="address">Adres:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="checkinDate">Data zameldowania:</label>
        <input type="date" id="checkinDate" name="checkinDate" required><br><br>

        <label for="checkoutDate">Data wymeldowania:</label>
        <input type="date" id="checkoutDate" name="checkoutDate" required><br><br>

        <input type="checkbox" id="extraBed" name="extraBed">
        <label for="extraBed">Dostawka (dodatkowe łóżko)</label><br><br>

        <label for="amenities">Udogodnienia:</label><br>
        <select id="amenities" name="amenities[]" multiple required>
            <option value="Parking">Parking</option>
            <option value="Śniadanie">Śniadanie</option>
            <option value="Pakiet dla zwierzaków">Pakiet dla zwierzaka</option>
        </select><br><br>
    </div>

    <input type="submit" value="Wyślij Rezerwację">
</form>

</body>
</html>
