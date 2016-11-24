# 1. Cele

 - skalowalnosc, modulowosc
 - szybki ogar przez nowa osobe przez brak skomplikowanych zaleznosci
 - latwosc doklejenia i przebudowy komponentu  


# 2. Nazwa klasy

Klasa ma format: `<NamespaceName>(-<SubNamespaceNames>)*-<ClassName>`

np. `btn-primary`, `calendar-legend-trash`

Kazda klasa musi posiadac przynajmniej jeden namespace.

Znak `-` to separator przestrzeni nazw.


# 3. Selektory

## Dozwolne:
- wedlug klasy np. `.btn-primary`
- prosta zaleznosc istnienia w innej klasie w tej samej przestrzeni np. `.btn-bar .btn-primary { display:inline-block; }`
- `,` odzielenie, zero logiki, grupuje tylko zestawy wlasnosci `.btn-primary, .btn-secondary { ...  }` 
- `.btn-primary:hover .btn-checkmark { ... }` pseudo, pseudo + mieszanie
- po atrybutach `.btn-btn[target=_blank]` 
- `:before` jak najmniej? 
- koniunkcja klas tylko ze stanem np. `.form-input.form-has-error`

## Niedozwolone:
- wedlug id, np. `#btn-primary`
- wedlug znacznika html, np. `a.btn-primary`, zmieniamy na <button> trzeba selektor zmieniac
- ze znakime `>`, `+` lub `~` - wprowadza logike ustawienia elementow w strukturze dom, przeszkadza przy modyfikacji struktury DOM
- zaleznosci pomiedzy przestrzeniami  `.form-footer .btn-secondary {  ...  }` 

# 4. Lokalizacja w plikach zrodlowych

css/btn.css
css/calendar-form.css lub css/calendar/form.css, moze programista decyduje

cos jak psr4, moga byc w roznych folderach przy jakies modulowosci i komponentach
  
# 5. Zarezerwowane namespacy pierwszego stopnia

- `default` -  zarezerowany dla resetow i defaultowych styli dla elementow, w sensie plik przy odwzo
- `js` - nie wystepuje w cssie,  sluzy do lapania elementow przez javascript
  format: `js-<NamespaceName>(-<SubNamespaceNames>)*-<ClassName>`
  namespace powiazany  

# 6. Dodakowy podzial ?

- `l` - layout, `layout`, `t`, `tpl` - opis siatki, odstepow np. `form-tpl-footer`
- `s` - stan, `is`, `has`, `state` np.

# 7. Minusy

- brak wykorzystnia wszystkich mozliwosc css np. `>`, `+`, `~`
- duzo kodu css
- duzo kodu html
- brak inteligentnej abstrakcji np. `div:nth-of-type(3) ul:last-child li:nth-of-type(odd) * { font-weight:bold }`
- selektory sa glupio proste
 
# 8. Pytania, nierozwiazane

- Media query?

