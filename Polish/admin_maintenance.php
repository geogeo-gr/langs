<?php

// Language definitions used in admin_maintenance.php
// Polish (UTF-8 v1.4.5): kumiech [kumiech@gmail.com] (Polish FluxBB Support - fluxbb.orge.pl)
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Konserwacja forum',
'Rebuild index subhead'			=>	'Przebudowa indeksu wyszukiwania',
'Rebuild index info'			=>	'Jeżeli występują problemy z wyszukiwaniem lub edytowałeś/kasowałeś posty bezpośrednio w bazie danych, to należy przebudować indeks wyszukiwarki. Dla uzyskania lepszej wydajności, włącz na forum %s podczas przebudowy indeksu. <strong>Przebudowywanie indeksu potrwa dość długi czas i zwiększy obciążenie serwera!</strong>',
'Posts per cycle label'			=>	'Postów na cykl',
'Posts per cycle help'			=>	'Liczba postów na jeden cykl odświeżania, np. jeśli wprowadzisz liczbę 300, trzysta postów zostanie przetworzonych zanim strona zostanie odświeżona. Ustawienie to ma zapobiec przekroczeniu czasu wykonywania skryptu.',
'Starting post label'			=>	'Początkowe ID',
'Starting post help'			=>	'Numer ID postu, od którego rozpocznie się przebudowywanie indeksu. Domyślną wartością jest pierwsze dostępne ID w bazie.',
'Empty index label'				=>	'Wyczyść indeks',
'Empty index help'				=>	'Zaznacz to pole, jeśli chcesz wyczyścić indeks przed przebudową (patrz poniżej).',
'Rebuild completed info'		=>	'Po zakończeniu procesu przebudowywania, zostaniesz przekierowany z powrotem na tą stronę. Zalecane jest, aby w Twojej przeglądarce była włączona obsługa skryptów JavaScript (do automatycznego przekierowywania po zakończeniu cyklu). Jeśli jesteś zmuszony do przerwania procesu, zapamiętaj ostatni ID, który był przetwarzany. Następnie wprowadź numer ID+1 w polu "Początkowe ID", aby kontynuować proces przebudowy (pole "Wyczyść indeks" musi być odznaczone).',
'Rebuild index'					=>	'Przebuduj indeks',
'Rebuilding search index'		=>	'Przebudowa indeksu wyszukiwania - proces w trakcie…',
'Rebuilding index info'			=>	'Przebudowywanie indeksu. Zrób sobie przerwę na kawę :-)',
'Processing post'				=>	'Przebudowywanie w trakcie - post ID <strong>%s</strong>',
'Click here'					=>	'Kliknij tutaj',
'Javascript redirect failed'	=>	'Przekierowanie za pomocą skryptu JavaScript nie powiodło się. %s, aby kontynuować…',
'Posts must be integer message' =>  'Liczba postów na cykl musi być liczbą naturalną.',
'Days must be integer message'  =>  'Liczba dni musi być liczbą naturalną.',
'No old topics message'         =>  'Na forum nie ma wątków z postami starszymi niż %s dni. Zmniejsz wartość w polu "Ilość dni wstecz" i spróbuj ponownie.',
'Posts pruned redirect'         =>  'Forum zostało wyczyszczone. Przekierowywanie…',
'Prune head'                    =>  'Czyszczenie forum',
'Prune subhead'                 =>  'Usuwanie starych wątków',
'Days old label'                =>  'Ilość dni wstecz',
'Days old help'                 =>  'Liczba dni wstecz, od których starsze wątki będą czyszczone (np. jeśli wpiszesz 30, każdy wątek, w którym ostatni post napisany został więcej niż 30 dni temu, zostanie usunięty).',
'Prune sticky label'            =>  'Usuń przyklejone wątki',
'Prune sticky help'             =>  'Kiedy opcja jest włączona, przyklejone wątki zostaną usunięte z forum.',
'Prune from label'              =>  'Wybierz forum',
'All forums'                    =>  'Wszystkie fora',
'Prune from help'               =>  'Forum, z którego mają zostać usunięte stare wątki.',
'Prune info'                    =>  'Używaj tej funkcji z ostrożnością. <strong>Wyczyszczonych wątków i postów nie można przywrócić.</strong> Dla lepszej wydajności, włącz na forum funkcję %s podczas czyszczenia.',
'Confirm prune subhead'         =>  'Potwierdź czyszczenie forum',
'Confirm prune info'            =>  'Czy jesteś pewny, że chcesz wyczyścić wątki starsze niż %s dni z forum "%s" (%s wątków)?',
'Confirm prune warn'            =>  'OSTRZEŻENIE! Wyczyszczonych postów i wątków nie można przywrócić.',

);