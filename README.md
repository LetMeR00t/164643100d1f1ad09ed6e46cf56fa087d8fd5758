#################################################################
#                                                		#
#                    Challenge Root-Me                        	#
#                Nom du challenge :                         	#
#                                               		#
#################################################################

## Intitulé du challenge : ##
Éric(André) est confiant dans son nouveau système d’authentification…


## Catégorie du challenge : ##
 - Réaliste ?
    - Web Serveur


## Objectif(s) du challenge : ##
    - Étudier une injection SQL basée sur un parser SQL en PHP.


## Outils utilisés : ##
    - Utilisation de PHP SQL Parser : https://code.google.com/p/php-sql-parser/


## Idées d'exploitations supplémentaires : ##
    - Récupération de code source PHP via un autre procédé (ci-dessous une liste non exhaustive)
        -> Utilisation de PHP Wrapper
        -> Fichier de sauvegarde oublié
        -> LFI/RFI
        -> Une nouvelle idée !
    - Affichage de la requête reçue après interprétation en cas d'erreur (afin de pouvoir tester et comprendre ce qui ne va pas).
-> Voir wordpress / thumb truc


## Documentations fournies : ##
    - https://code.google.com/p/php-sql-parser/
    - http://citeseer.ist.psu.edu/viewdoc/download;jsessionid=0E39412E052CCEFE6DCCAADE4EB7BB2C?doi=10.1.1.120.9618&rep=rep1&type=pdf
    - http://www.ajol.info/index.php/wajiar/article/viewFile/87436/77128
    - https://www.ecs.csus.edu/csc/iac/docs/publications/JIN_CATA12.pdf



## Déroulement du challenge : ##    
L’utilisateur doit réussir à passer l’authentification mise en place.
Il se connecte au challenge via http et se retrouve sur un site (plus complet que la simple authentification).
Plusieurs failles peuvent être présentes mais sans succès d’exploitation (ex: LFI)
Site d’adorateurs du projet IDA : 

## Proposition de solution : ##



