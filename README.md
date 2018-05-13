# Poštne številke (Woocommerce checkout)

Ob vnosu poštne številke ob zaključku nakupa bo vtičnik samodejno izpolnil polje "Mesto".

### Namestitev in uporaba
Prenesete lahko ZIP arhiv direktno iz Github-a ali pa ga namestite s pomočjo "git clone" ukaza:
```sh
$ git clone https://github.com/Jurero123/woo-postne-stevilke.git
```

Ko je vtičnik enkrat aktiviran, ni potrebno ničesar več urejati ali nastavljati.
Skripta se bo naložila le na strani "checkout"-a s pomočjo funkcije "is_checkout()".

### Omejitve
Vtičnik zaenkrat deluje le za slovenske poštne številke in **nima nastavljenih dodatnih check-ov za preverjanje trenutnega jezika strani**.
V kolikor produkte **prodajate v več držav, zaenkrat odsvetujemo uporabo**, saj lahko različne države uporabljajo enake poštne številke.
V primeru večjega interesa se kasneje lahko doda možnost tudi za druge države.