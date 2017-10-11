<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php   
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->abrirConta("Cc");
            $p1->setDono("cara1");
            
            $p2->abrirConta("Cp");
            $p2->setDono("cara2");
            
            $p1->depositar(222);
            $p2->depositar(333);
            
            print_r($p1);
            print_r($p2);
        
        ?>
        </pre>
    </body>
</html>
