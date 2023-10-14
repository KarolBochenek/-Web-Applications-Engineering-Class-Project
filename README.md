# ManageYourBooks

## Opis

Aplikacja do zarządzania książkami. Pozwala na rejestrację, logowanie, dodawanie nowych przedmiotów i edytowanie ich.

## Uruchomienie
Aby uruchomić projekt lokalnie, postępuj zgodnie z poniższymi krokami:
1. Pobierz Dockera ze strony [Docker](https://www.docker.com/) i zainstaluj go.
2. Sklonuj repozytorium.
3. Ustaw połączenie z bazą danych w pliku `config.php`.
4. Uruchom run.cmd/run.sh (w zależności od systemu)
5. Uruchom przeglądarkę i wpisz adres: http://localhost:8080
6. By zakończyć, uruchom shudown.cmd/shudown.sh

## Funkcjonalności i charakterystyka

* Rejestracja i logowanie użytkowników
* Sesja użytkownika
* Wylogowywanie użytkownika
* Hashowanie haseł w oparciu o md5
* Dodawanie nowych przedmiotów do bazy danych
* Responsywny design i tryb mobilny

## Użyte technologie

* Php 7.4.3
* nginx 1.17.8
* HTML
* CSS
* JavaScript
* Docker

## Diagram ERD
![Entity-Relationship-Diagram](https://github.com/KarolBochenek/wdpai_2023/blob/lab01/Entity-Relationship-Diagram.png)

## Widoki
![items-page](https://github.com/KarolBochenek/wdpai_2023/blob/lab01/public/img/items-page.PNG)
![items-page](https://github.com/KarolBochenek/wdpai_2023/blob/lab01/public/img/login-page.PNG)
![items-page](https://github.com/KarolBochenek/wdpai_2023/blob/lab01/public/img/register-page.PNG)
![items-page](https://github.com/KarolBochenek/wdpai_2023/blob/lab01/public/img/phone-view.PNG)
