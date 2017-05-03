<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 03.05.17
 * Time: 10:35
 */
$a = ['title'=>'foo',
    'text'=>'somthing'];
?>
<?php
if(!empty($a['title'])){
    echo '!!!';
}else{
    echo 'Новость без заголовка';
}
?>
