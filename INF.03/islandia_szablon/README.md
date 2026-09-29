# Islandia – szablon INF.03 bez SQL

Wersja dydaktyczna przygotowana na podstawie układu z zadania INF.03.

## Pliki

- `islandia.php` – galeria 9 zdjęć,
- `obiekty.php` – opis wybranego obiektu,
- `styl.css` – układ strony i formatowanie,
- `img/` – 9 zdjęć dostarczonych do projektu.

## Zdjęcia

Projekt wykorzystuje:

1. `strokkur.jpg`
2. `skogafoss.jpg`
3. `seljalandsfoss.jpg`
4. `godafoss.jpg`
5. `dettifoss.jpg`
6. `hekla.jpg`
7. `kirkjufell.jpg`
8. `husavik.jpg`
9. `maskonur.jpg`


## Jak działa wersja bez SQL?

Strona `islandia.php` przekazuje identyfikator obiektu metodą GET:

```text
obiekty.php?id=2
```

`obiekty.php` odczytuje:

```php
$_GET["id"]
```

i wybiera odpowiedni element z tablicy PHP `$obiekty`.

## Uruchomienie

Umieść cały folder w katalogu serwera WWW, np. w XAMPP:

```text
C:\xampp\htdocs\islandia_szablon
```

i otwórz:

```text
http://localhost/islandia_szablon_9_zdjec/islandia.php
```
