<?php
///*

//to print hello
echo "hello";







// to have a varriable
$a = "im programmer";
const HELLO = "my name is 'programmer' "; //we can use define for "ثابت" too








//string
$a = "im programmer";



//int
$a = 1000;



//float
$a = 12.5652;



//null
$a = null;









$khobi = "خوبی";
//to know the typeof something
var_dump($khobi);








//to add a var to another var we use "." , like js var some = programmer1 + programmer2
$b = 2;
$c = 4;
$a = $b . $c;

//or you can use dobule coat (not single coat)
$name = "programmer";
$family = "programmer2";
$fullname = $name . $family;
echo $fullname;








//عمرگرها
var_dump(1+1);
var_dump(1-1);
var_dump(1*1);
var_dump(1/1);
var_dump(1%1);
var_dump(1**1);

//  +
//  -
//  *
//  /
//  %
//  ++
//  --
(int)(float)(string)(bool)






//to change types
$a = 1.45;
$b = (int)$a;
var_dump($b);






//arrays
$user = [
    "programmer1",
    "programmer2",
    "programmer3"
];









//if ,else ,elseif
$color = "red";
if ($color=="red") {
    echo"red";
}elseif ($color=="blue") {
    echo"blue";
}elseif ($color=="green") {
    echo"green";
}else {
    echo"not red blue or green";
}
//short form
$color =="red" ? "programmer1" : "programmer2";








//switch
$glass = "yellow";
switch ($glass) {
    case 'red':
        echo"programmer1";
        break;
    case 'blue':
        echo"programmer2";
        break;
    default:
        echo"not yellow or blue";
}







$list = [1,2,3,4,5,6,7,8,9,10];
$i = 0;
//while
while ($i < 10) {
    echo $list[$i] ."<br>";
    $i++;
};







$list = [1,2,3,4,5,6,7,8,9,10];
$i = 0;
//do while
do {
    echo $list[$i] ."<br>";
    $i++;
} while ($i < 10);






$list = [1,2,3,4,5,6,7,8,9,10];
$i = 0;
do {
    echo $list[$i] ."<br>";
    $i++;
} while ($i < 10);








//for
for ($i = 0 ; $i < 10 ; $i++ ) { 
    echo $list[$i] ."<br>";
}








//foreach
foreach ($list as $item) {
    echo $item ."<br>";
}






//function
//declare(strict_types=1);//برای ایجاد دقت رو عدد یا رشته بودن متغیر
function myfunction(int$a , int$b) {
$c = $a + $b ;
$d = $b ** 2 ;
return [$c , $d];
}

list($num1 , $num2) = myfunction(1,2);
echo $num1 , "<br>" , $num2 ;







//anonymous function
$sum = function ($A , $B){
    return $A + $B ;
};
var_dump($sum(1,3));









//arrow function
// $list2 = [1,2,3,4,56,7,8,9];
// $list1 = map($list , fn($num) => $num * 3);









//string function
$text ="hello!!! my name is programmer im from from iran i live in tehran im young and im a programmer";
echo strlen($text); //برای فهمیدن چند کارکتری بودن یک var
echo str_word_count($text);//برای فمهیدن چند کلمه ای بودن 
echo strpos($text , "true");// برای پیدا کردن کلمه دریک جمله
echo str_replace("true" , "درست" , $text);//جایگزین یک متن با یک متن دیگه
echo strtolower($text);//برای حروف کوچک کردن کل
echo strtoupper($text);//برای بزرگ کردن کل حروف متن
echo str_repeat("_-" , 2000); // برای تکرار کردن 
echo substr($text, 12 , 1);
echo trim($text);//spaceبرای پاک کردن 
explode(' ' , $text);//جدا کردن کلمات
echo strip_tags($text);//حذف همه ی تگ های html




//array function
$list4 = [
    "name" => "programmer",
    "family" => "programmer2",
    "country" => "Iran",
    "age" => "30",
    "gender" => "man"
];
$list5 = [
    "name" => "programmer3",
    "family" => "programmer4",
    "country" => "italy",
    "age" => "10"
];
echo count($list4);//چند تا ایتم داخلش هست
echo sizeof($list4);// معنای بالایی رو میده
echo is_array($text);//لیست هست یانه 
echo in_array("programmer" , $list4);//متن سینا وجود داره یا نه
print_r($list4);//همان var_dump
array_merge($list4 , $list5);//دو تا لیست قاطی کردن
array_values($list4);// رو برمیگردنه مثلا محمد ایران 10value فقط 
array_keys($list4);//name,family,country,age هارو برمیگردونه مثلاkeyفقط 
array_key_exists("name" , $list4);//هست یا نه key بفهمیم یک
array_push($list4 , "dad name");//اضافه کردن چیزی به لیست
array_pop($list4);//حذف چیزی از لیست (از اخر از سمت راست)
array_shift($list4);//حذف چیزی از لیست (از اول سمت چپ)
array_flip($list4);//key و value عوض کردن جا 
array_reverse($list4);//برعکس کردن لیست 
array_unique($list4);//پاک کردن اعداد تکراری
array_slice($list4, 3, 3);







//array sort function
;$list6 = [1,5,8,12,22,45,85,100];
sort($list6);//مرتب
rsort($list6);//مرتب برعکس
ksort($list6);// key مرتب براساس
asort($list6);// value مرتب براساس
var_dump($list6);








//ارایه های چندتایی
$user = [[
    "name" => "programmer1",
    "age" => "10"
],
[
    "name" => "programmer2",
    "age" => "50"
],
[
    "name" => "programmer3",
    "age" => "30"
]];








//super global
//get
 if (isset($_GET["username"]) && isset($_GET["password"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    echo (" خوش امدی " . $username . " جان! ");
}else{echo "please login first";}






//post
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo (" خوش امدی " . $username . " جان! ");
}else{echo "please login first";}






//file






//server
var_dump($_SERVER);






//request
var_dump($_REQUEST);






//cookies
setcookie("site_name" , "my_site" , ["expire" => time()+3600 , "domain" => "programmer.com" , "path" => "/" , "htpponly" => true]);
var_dump($_COOKIE);
//remove cookie
if (isset($_COOKIE["site_name"])) {
    setcookie("site_name" , "my_site" , ["expire" => time()-3600 , "domain" => "programmer.com" , "path" => "/" , "htpponly" => true]);}



//session
$_SESSION["auth"] = true;
unset($_SESSION["auth"]);//to remove a session
session_destroy();//حذف تمام سشن ها
var_dump($_SESSION["auth"]);
session_start([
"name" => "programmerir_session",
"save_path" => __DIR__ . '/session',

]);

//*/


//my sql
$connect = mysqli_connect("localhost:3306" , 'root' , '');
var_dump($connect);

if (! $connect) {
echo "could'nt connect :" . mysqli_connect_error();
exit;
} else {
    echo "succsesfully! ! !";
}mysqli_select_db($connect , 'test');
//$sql = "CREAT DATABASE TEST "; //if u want remove a database write "DROP DATABSE TEST"
$sql = "creat table users (id INT AUTO_INCREMENT , email VARCHAR(100) NOT NULL , password VARCHAR(100) NOT NULL , primary key(id))";
if ($result = mysqli_query($connect , $sql)) {
    echo"quary run succsesfully! ! !";
} else {
    echo"error :" . mysqli_error($connect);
}


$ds= "sdsdsd";



















//important thing
/*1 = "1"
"{}" mean "Block"
"and" or "&&" mean "and"
"or"  or   "||" mean "or"
"!" mean Not 
"xor" mean "xor"  //برمیگرداند true باشد  true برمیگردد واگر یکی false باشد true اگر دو تا 
array = list
ctrl + / = comment or uncomment
php -S localhost:80 -t my_tranings //to creat a server in cdn
61 rocket "to use a function in 3 or 4 fiiles"
*/






//all of them are boolean (true or false)

$a = 1;
$b = 2;
var_dump($a == $b);    //return false مساوی هست یا نه
var_dump($a === $b);   //return false هم مساوی اند و هم یک نوع هستند (هردو رشته مثلا)
var_dump($a == $b);    //return false مساوی هست یا نه
var_dump($a == $b);    //return false مساوی هست یا نه
var_dump($a != $b);    //return true برابر نیست؟
var_dump($a <> $b);    //return true دقیقا معنای بالایی میده 
var_dump($a > $b);     //return false بزرگتر
var_dump($a < $b);     //return true کوچکتر
var_dump($a < $b);     //return true کوچکتر
var_dump($a <= $b);    //return true کوچکتر  یا مساوی بود مساوی
echo 1 <=> 1 ;         //return 0 اگر برابر باشند 
echo 1 <=> 2 ;         //return -1 اگر سمت راست بزرگتر باشد
echo 2 <=> 1 ;         //return 1 اگر سمت چپ بزرگتر باشد



?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
</head>
<body>
    <form action="/index.php" method="post">
        <h3 align="center">ثبت نام</h3>
        <input placeholder="username" style="margin-right: 600px;" type="text" name="username">
        <input placeholder="password" type="password" name="password">
        <button type="submit">فرستادن</button>
    </form>
    <form action="/file.php" method="post" enctype= "multipart/form-data">
    <input name="image" type="file">
    <button type="submit">فرستادن</button>
    </form>
</body>
</html>