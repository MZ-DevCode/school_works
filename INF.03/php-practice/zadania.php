<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog kursów informatycznych – zadanie PHP</title>
    <style> 
		body {
			font-family: Arial;
			background-color: lightblue;
		}

		header, footer {
			background-color: steelblue;
			color: white;
			text-align: center;
			padding: 15px;
		}

		nav {
			background-color: skyblue;
			padding: 10px;
		}

		nav a {
			margin: 10px;
		}

		section, aside {
			background-color: white;
			padding: 15px;
			margin: 15px;
		}

		article {
			border: 1px solid gray;
			padding: 10px;
			margin: 10px;
		}
 
    </style>
</head>
<body id="start">
    <!--
	KATALOG KURSÓW INFORMATYCZNYCH
    Temat: tablice wielowymiarowe i asocjacyjne, foreach, if, formularze GET i POST. Maksymalna liczba punktów: 30

    INSTRUKCJA: 
	Znaczniki semantyczne HTML i style CSS są gotowe. Nie zmieniaj ich. Uzupełnij wyłącznie oznaczone fragmenty PHP.

    CZĘŚĆ I – TABLICA I LISTA KURSÓW (10 pkt)
    1. Korzystając z tablicy $kursy, wyświetl w pierwszej sekcji wszystkie kursy za pomocą pętli foreach. (3 pkt)
    2. Dla każdego kursu utwórz wewnątrz pętli <article>, w którym wyświetlisz:
		- nazwę kursu w <h3>, 
		- prowadzącego, 
		- liczbę godzin 
		- cenę w zł. 
		(5 pkt)
    3. Przy kursie wyświetl napis "Dostępny", gdy pole dostepny ma wartość true, w przeciwnym razie "Brak miejsc". Użyj if. (2 pkt)

    CZĘŚĆ II – FORMULARZ POST W <aside> (10 pkt)
    4. Odczytaj przesłane metodą POST imię i nazwisko użytkownika. (4 pkt)
    5. Po przesłaniu formularza wyświetl w <aside> komunikat
       "Witaj, IMIĘ NAZWISKO!", podstawiając wpisane dane. (4 pkt)
    6. Komunikat wyświetlaj wyłącznie wtedy, gdy oba pola nie są puste. (2 pkt)

    CZĘŚĆ III – FORMULARZ GET W DRUGIEJ <section> (10 pkt)
    7. Odczytaj przekazany metodą GET numer kursu z pola id. (3 pkt)
    8. Sprawdź, czy kurs o takim numerze istnieje w tablicy. (3 pkt)
    9. Jeśli istnieje, wyświetl jego nazwę i cenę. Jeśli nie – komunikat "Nie znaleziono kursu". (4 pkt)
    -->
    <?php
    $kursy = [
        1 => [
			"nazwa" => "Podstawy HTML", 
			"prowadzacy" => "Anna Nowak", 
			"godziny" => 12, 
			"cena" => 150, 
			"dostepny" => true
		],
        2 => [
			"nazwa" => "Programowanie w Pythonie", 
			"prowadzacy" => "Jan Kowalski", 
			"godziny" => 20, 
			"cena" => 300, 
			"dostepny" => true
		],
        3 => [
			"nazwa" => "Bazy danych MySQL", 
			"prowadzacy" => "Ewa Zielińska", 
			"godziny" => 16, 
			"cena" => 250, 
			"dostepny" => false
		],
        4 => [
			"nazwa" => "Podstawy PHP", 
			"prowadzacy" => "Piotr Wiśniewski", 
			"godziny" => 18, 
			"cena" => 280, 
			"dostepny" => true
		]
    ];
    ?>

    <header>
        <h1>Katalog kursów informatycznych</h1>
    </header>

    <nav>
        <a href="#start">Start</a>
        <a href="#lista">Lista kursów</a>
        <a href="#szukaj">Wyszukaj kurs</a>
    </nav>

    <main>
        <section id="lista">
            <h2>Dostępne kursy</h2>

            <?php
            // ZADANIE 1–3: foreach, article, h3, dane kursu i warunek if.
            ?>
        </section>

        <aside>
            <h2>Przedstaw się</h2>
            <form method="post" action="">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie"><br>
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko"><br>
                <button type="submit">Wyślij</button>
            </form>

            <?php
            // ZADANIE 4–6: odczytaj POST, sprawdź oba pola i wyświetl powitanie.
            // Pamiętaj o htmlspecialchars() przy wypisywaniu danych użytkownika.
            ?>
        </aside>
    </main>

    <section id="szukaj">
        <h2>Wyszukaj kurs po numerze</h2>
        <p>Numery kursów: 1, 2, 3, 4.</p>
        <form method="get" action="">
            <label for="id">Podaj numer kursu:</label>
            <input type="number" id="id" name="id" min="1" required>
            <button type="submit">Szukaj</button>
        </form>

        <?php
        // ZADANIE 7–9: odczytaj GET['id'], sprawdź istnienie klucza w tablicy $kursy i wypisz nazwę z ceną albo komunikat o braku kursu.
        ?>
    </section>

    <footer>
        <p>Katalog kursów – 2026</p>
    </footer>
</body>
</html>
