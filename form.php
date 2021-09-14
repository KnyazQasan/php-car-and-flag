<?php

$firstname = $_REQUEST['firstname'];

$avto = [
    
    ['id' => '1',
    'model' => 'Kia',
    'country' => 'Korea',
    ],
    ['id' => '2',
    'model' => 'Hyundai',
    'country' => 'Korea',
    ],
    ['id' => '3',
    'model' => 'Bmw',
    'country' => 'Almaniya',
    ],
    ['id' => '4',
    'model' => 'Mercedes',
    'country' => 'Almaniya',
    ],
    ['id' => '5',
    'model' => 'Wolksvagen',
    'country' => 'Almaniya',
    ],
    ['id' => '6',
    'model' => 'Peugeot',
    'country' => 'Fransa',
    ],
    ['id' => '7',
    'model' => 'Chevrolet',
    'country' => 'ABSH',
    ],
    ['id' => '8',
    'model' => 'Ferrari',
    'country' => 'Italya',
    ],
];
$flg = [
    [
        'parent_id' => 'Korea',
           'flag' => "<img class='flag' src='./2.jpg'>",
       ],
       [
       'parent_id' => 'Almaniya',
       'flag' => "<img class='flag' src='./3.jpg'>",
       ],
       [
       'parent_id' => 'Fransa',
       'flag' => "<img class='flag' src='./4.jpg'>",
       ],
       [
       'parent_id' => 'ABSH',
       'flag' => "<img class='flag' src='./usa.png'>",
       ],
       [
       'parent_id' => 'Italya',
       'flag' => "<img class='flag' src='./1.jpg'>",
       ],
    ];
$Country = function($avto, $firstname = 0){
    foreach($avto as $key => $value){
        if($firstname == $value['model']){
            return $value['country'];
        }
    }
};

$flagPrin = function($data, $Country){
    foreach($data as $key => $value){
        if($Country == $value['parent_id']){
            echo "<h3 class='heading'>". $Country ."</h3>"; 
            return $value['flag'];
        }
    }
};

print_r($flagPrin($flg,$Country($avto, $firstname)));
    
?>
</div>