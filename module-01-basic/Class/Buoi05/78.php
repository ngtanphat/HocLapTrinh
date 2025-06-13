<?php
/*1. Lập trình web (3): HTML CSS, PHP, Laravel
  2. Lập trình phần mềm (2): Winform, NodeJS
  3. Lập trình di động (1): React Native*/
$inputCategory = 'D1|Lập trình web$D2|Lập trình phần mềm$D3|Lập trình di động';
$inputCourse = "1|HTML CSS|D1=2|PHP|D1=3|Laravel|D1=4|Winform|D2=5|NodeJS|D2=6|React Native|D3";

$categoryTemp = '';
$arrCategory = explode('$',$inputCategory);
$arrCourse = explode('=',$inputCourse);
/*
[
  'D1' => [
    'categoryName: 'Lập trình web',
    'courses' => [
      1 => 'HTML, CSS',
      2 => 'PHP',
      3 => 'Laravel'
    ]
  ],
  'D2' => [
    'categoryName: 'Lập trình phan mem',
    'courses' => [
      4 => 'winform',
      5 => 'nodejs'
    ]
  ]
]

[
  'D1' => [],
  'D2' => [],
  'D3' => [],
]
[
  'D1' => [
    'categoryName': 'lap trinh web'
  ],
  'D2' => [
    'categoryName': 'lap trinh phan mem'
  ],
  'D3' => [],
]
*/
// print_r($arrCategory);
$result = [];
foreach($arrCategory as $key => $value){
  $arrCategoryA = explode('|',$value);
  $arrCourseByCategory = [];
  foreach($arrCourse as $keyCourse => $courseItem){
    $arrCourseItem = explode('|',$courseItem);
    // print_r($arrCourseItem);
    if($arrCategoryA[0] == $arrCourseItem[2]){
      $arrCourseByCategory[$arrCourseItem[0]] = $arrCourseItem[1];
    }
  }
  $result[$arrCategoryA[0]] = [
    'categoryName' => $arrCategoryA[1],
    'courses' => $arrCourseByCategory
  ];
}
print_r($result['D2']['categoryName']);
print_r($result['D2']['courses']);












$string ='';
foreach($arrCategory as $keyCategory => $categoryInfo){
  // chuyen categoryInfo ve mang -> 2 phan tu: 0 => categoryId, 1 => categoryName
  // duyet mang arrCourse -> courseItem
    // tach courseItem -> array -> 0 -> courseId, 1 -> courseName, 2 -> categoryId
    // so sanh 0 => categoryId == 2 -> categoryId
      // ghep courseName
  $arrCategoryInfo = explode('|', $categoryInfo);
  $arrCourseByCategory = [];
  // print_r($arrCategoryInfo);
  foreach($arrCourse as $keyCourse => $courseItem){
    $arrCourseItem = explode('|',$courseItem);
    // print_r($arrCourseItem);
    if($arrCategoryInfo[0] == $arrCourseItem[2]){
      $arrCourseByCategory[] = $arrCourseItem[1];
    }
  }
  $categoryName = $arrCategoryInfo[1];
  $countCourses = count($arrCourseByCategory);
  $strCourseByCategory = implode(', ', $arrCourseByCategory);
  $string .=  "$categoryName ($countCourses): $strCourseByCategory";
  $string .= PHP_EOL;
}


// print_r($arrCategory);
// print_r($arrCourse);
// echo $string;