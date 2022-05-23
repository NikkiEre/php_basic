<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 4,
        'Егор Егоров' => 4,
        'Максим Максимов' => 5,
        'Джек Потрошитель' => 2,
        'Константин Константинов' => 4,
        'Кожанное лицо' => 3,
        'Марина Марьевна' => 4,
        'Надежда Надеждова' => 5,
        'Фредди Крюгер' => 2,
        'Светлана Светова' => 4,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Глеб Глебов' => 5,
        'Олег Олегов' => 5,
        'Майк Маерс' => 2,
        'Ярослав Ярославов' => 4,
        'Ирладнский Липрекон' => 3,
        'Алексей Алексеев' => 4,
        'Зеленый Гремлен' => 2,
    ]
];

$average_rating_groups = [];
$black_list_students = [];

foreach($students as $name_group => $group) {
    $average_rating = 0;
    foreach($group as $name_student => $student_group) {
        $average_rating += $student_group;
        if($student_group <= 3) {
            $black_list_students[$name_group][] = $name_student;
        }
    }
    $average_rating = $average_rating / count($group);
    $average_rating_groups[$name_group] = $average_rating;
};

print_r($average_rating_groups);
print_r($black_list_students);

