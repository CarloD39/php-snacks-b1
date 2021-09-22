


<?php

$matches = [
    
    [
        
        "casa" => "Virtus Roma",
        "ospite" => "Fortitudo Bologna",
        "puntiCasa" => 90,
        "puntiOspite" => 100
    ],
    [
        "casa" => "Brescia",
        "ospite" => "Brindisi",
        "puntiCasa" => 80,
        "puntiOspite" => 95
    ],
    [
        "casa" => "Trieste",
        "ospite" => "Treviso",
        "puntiCasa" => 98,
        "puntiOspite" => 92

    ]
    
    
];

for($i = 0; $i < count($matches); $i++){

    echo "{$matches[$i] ['casa']} - {$matches[$i] ['ospite']} - {$matches[$i] ['puntiCasa']} - {$matches[$i] ['puntiOspite']} " ;
}


?>