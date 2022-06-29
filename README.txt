Pour que le formulaire fonctionne et envoie réellement le mail, il est nécessaire de modifier certains fichiers de notre installation PHP.
Pour réaliser ce formulaire, je me suis servi de XAMPP.

# Configuration de php.ini 
## (C:\xampp\php\php.ini)

```
[mail function]
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from =[notre-adresse-email]
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
```
# Configuration de sendmail 
## (C:\xampp\sendmail\sendmail.ini)

```
[sendmail]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=[notre-adresse-email]
auth_password=[less-secure-app-access-password]
force_sender=[notre-adresse-email](optionnel)
```

L'adresse que j'ai utilisée étant chez GMAIL, j'ai dû créer un mot de passe d'application "Less secure app access", que je renseigne en tant que "auth_password".
Une fois que tout cela est configuré, le formulaire envoi bien le contenu du formulaire, à l'adresse cyprien.prouvot@gmail.com.
