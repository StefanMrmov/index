<?php
$student1 =[
    "name" => "john Doe",

    "age" => 20,

    "grades" => [85, 90, 78]
];
$student2 =[
    "name" => "john Doe1",

    "age" => 21,

    "grades" => [58, 90, 78]
];
$student3 =[
    "name" => "john Doe2",

    "age" => 22,

    "grades" => [49, 90, 78]
];
$student4 =[
    "name" => "john Doe3",

    "age" => 23,

    "grades" => [25, 90, 78]
];
$student5 =[
    "name" => "john Doe4",

    "age" => 24,

    "grades" => [99, 90, 78]
];

$student=[$student1,$student2,$student3,$student4,$student5];

function averageocena($student)
{
    for ($i=0; $i < count($student); $i++) {
           $a=array_filter($student[$i]["grades"]);
        $average = array_sum($a)/count($a);
        echo $average;
        echo "</br>";
    }
}
averageocena($student);

function postariod($age,$student)
{
    for ($i=0; $i < count($student); $i++) {
    if($student[$i]["age"]>$age){
        echo $student[$i]["name"];
        echo "</br>";
    }

    }
}
postariod(22,$student);

function capitalizeNames($student)
{
    for ($i=0; $i < count($student); $i++) {
        $student[$i]["name"]=strtoupper($student[$i]["name"]);
        echo $student[$i]["name"];
        echo "</br>";
    }
}
capitalizeNames($student);

function averagee($ocena){
    for ($i=0; $i < count($ocena); $i++) {
        $average = array_sum($ocena)/count($ocena);

    }
    echo $average;
}
function displayStudents($student)
{
        for ($i=0; $i < count($student); $i++) {
            $student[$i]["name"]=strtoupper($student[$i]["name"]);
            echo "Name ". $student[$i]["name"];
            echo "</br>";
            echo "Age ". $student[$i]["age"];
            echo "</br>";
            $ocena=$student[$i]["grades"];
            averagee($ocena);
            echo "</br>";
        }

}
displayStudents($student);

function sortByName($student)
{
sort($student);
    for ($i=0; $i < count($student); $i++) {
        echo $student[$i]["name"];
        echo "</br>";
    }
}
sortByName($student);
?>