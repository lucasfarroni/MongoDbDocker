<?php
//phpinfo();



$manager = new MongoDB\Driver\Manager("mongodb://
USER:PASSWORD@localhost:27017");
var_dump($manager);


// Code source permettant d'accéder aux données parking du Grand Nancy

/*db.createUser (
    {
        user : "pnourrissier",
        pwd : "pwdXXX1234",
        roles : [
            {
                role : "readWrite",
                db : "firstmongodb"
            }
        ]
    }
)*/
?>