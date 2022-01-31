# PACKAGES

Aplikacja działa na podobnej zasadzie co BlaBlaCar


Aplikacja pozwala nowemu użytkownikowi na zarejestrowanie się w bazie użytkowników. 
Istniejący użytkownik może zalogować się do swojego konta podając adres email oraz hasło.
Po zalogowaniu tworzona jest nowa sesja która pozostaje aktywna do momentu wylogowania bądź zamknięcia okna przeglądarki.
Użytkownik może dodać nową przesyłkę bądź przejazd, podejrzeć dodane już przez siebie paczki czy przejazdy, wyszukać
przejazd podając miasto startowe, przejrzeć listę FAQ oraz zobaczyć dane swojego konta. Użytkownik może się wylogować 
ze swojego konta, co powoduje zamknięcie aktywnej wcześniej sesji oraz brak możliwości dostania się na poszczególne
podstrony bez wcześniejszego zalogowania się. 
 
Hasło użytkownika przechowywane jest w bazie danych po uprzednim zabezpieczeniu go algorytmem hashującym sha512.



``````
W skład aplikacji wchodzi 11 widoków:
- register.php
- login.php
- mojeKonto.php
- nowaPrzesyłka.php
- nowyPrzejazd.php
- wyszukajPrzejazd.php
- mojePrzejazdy.php
- mojePrzesyłki.php
- FAQ.php
- nav.php
- footer.php

5 kontrolerów:
- AppController.php
- DefaultController.php
- PackageController.php
- RideController.php
- SecurityController.php

3 modele:
- Package.php
- Ride.php
- User.php

4 repozytoria:
- PackageRepository.php
- Repository.php
- RideRepository.php
- UserRepository.php

2 skrypty JavaScript:
- script.js
- search.js

Pozostałe pliki
- style.css
- config.php - zawierający dane pozwalające połączyć się z bazą danych
- Database.php - plik inicjalizujący połączenie z bazą danych
- index.php - zawierający routing
- routing.php

Oraz baza danych PostgreSQL zawierająca 6 tabel.