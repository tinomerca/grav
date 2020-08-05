# Fork del progetto
### Rename del progetto sul github personale
### Clonare il progetto in locale
### Lanciare bin/grav install per installare le dipendenze




# Grav CMS + CANVAS
```
bin/gpm selfupgrade -f 
```

## Plugin da installare
### Admin
```
bin/gpm install admin  
```
User: admin@desegno.it  
Pass: D.segno11  
Config: user/accounts/admin.yaml  

### Simplesearch  
```
bin/gpm install simplesearch  
```

### Shortcode Core  
```
bin/gpm install shortcode-core  
```

### Breadcrumbs  
```
bin/gpm install breadcrumbs  
```

## Plugin opzionali
### I18n  
```
bin/gpm install langswitcher  
```
  
## Plugin gestione permessi e gruppi
```
bin/gpm install admin-addon-user-manager
```

## Plugin Cookie Banner
```
bin/gpm install cookieconsent
```



## Inizializzazione Compilatore SASS
Dalla cartella dela tema

```
$ npm install -g grunt-cli
$ grunt compile
```

## Sviluppo quotidiano

Dalla cartella del tema eseguire 
```
$ grunt
```  
Lasciare il processo del watcher in background

## Note per la personalizzazione / estensione
### Aggiunta di una tab options all'interno delle impostazioni dell'admin
Creare un file yaml all'interno della cartella /user/blueprints/config con il segunte scaffold di base
```
title: 'Titolo'
form:
       fields:
           custom:
               type: section
               title: Nome section
               underline: true

               fields:
                   nome_field:
                      label: Label
                      type: text
               ...

```
