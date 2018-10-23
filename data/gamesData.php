<?php
header('contend-type:test/html;charset=utf-8');
/*echo 'hello,world!';
echo '    <div class="card">
            <div class="card-header"></div>
            <div class="card-text"></div>
            <div class="card-button"></div>
        </div>';
$food=array('name'=>'榴莲','sex'=>'male','age'=>'16');
echo $food['name'];
echo '<br>';
print_r($food);
echo '<br>';
foreach($food as $key => $value){
    echo $key.'----'.$value.'<br>';*/

//二维数组
/*$starArray=array(
    array('name'=>'james','height'=>'2.10','mvp'=>'4'),
    array('name'=>'durant','height'=>'2.16','mvp'=>'0'),
    array('name'=>'iving','height'=>'2.09','mvp'=>'4'),
    array('name'=>'jordan','height'=>'2.08','mvp'=>'3')
);
echo $starArray[2]['name'];
for($i=0;$i<count($starArray);$i++){
  echo  'player:'.$starArray[$i]['name'].'夺得了'.$starArray[$i]['mvp'].'次mvp';
  echo '<br>';
}*/
$gameArry=array(
    array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司','type'=>'MOBA',
        'sign'=>'只要我e的够快，队友的问号就更不上我','plat'=>'wegame','imgsrc'=>'./img/img1.jpg'),

    array('title'=>'守望先锋','english'=>'overwatch','company'=>'暴雪公司','type'=>'MOBA+FPS',
        'sign'=>'D.va爱你哟！','plat'=>'battle.net','imgsrc'=>'./img/img2.jpg'),

    array('title'=>'风暴英雄','english'=>'heros of storm','company'=>'暴雪公司','type'=>'MOBA',
        'sign'=>'我的瓦王只会掰筷子','plat'=>'battle.net','imgsrc'=>'./img/img3.jpg'),

    array('title'=>'怪物猎人世界','english'=>'monster hunter world','company'=>'capcom公司','type'=>'RPG',
        'sign'=>'这波龙车我能停','plat'=>'steam','imgsrc'=>'./img/img4.jpeg'),

    array('title'=>'反恐精英：全球攻势','english'=>'csgo','company'=>'valve','type'=>'FPS',
        'sign'=>'不听不听，大甲沙鹰','plat'=>'wegame','imgsrc'=>'./img/img5.jpg'),

    array('title'=>'使命召唤4：现代战争','english'=>'call of duty','company'=>'暴雪动视公司','type'=>'FPS',
        'sign'=>'RPG！！！','plat'=>'orange','imgsrc'=>'./img/img6.jpg'),

    array('title'=>'绝地求生：大逃杀','english'=>'playunkonws\'battleground','company'=>'bluehole','type'=>'大逃杀',
        'sign'=>'我在哪，是谁在打我','plat'=>'steam','imgsrc'=>'./img/img7.jpg'),

    array('title'=>'孤岛惊魂3','english'=>'FAR CRY 3','company'=>'育碧','type'=>'FPS',
        'sign'=>'没事不要去无人荒岛','plat'=>'steam','imgsrc'=>'./img/img8.jpg'),

    array('title'=>'孤岛惊魂4','english'=>'FAR CRY 4','company'=>'拳头公司','type'=>'FPS',
        'sign'=>'天真boy帮贱民推翻干爹的统制','plat'=>'wegame','imgsrc'=>'./img/img9.jpg'),

    array('title'=>'帝国时代3','english'=>'Age of Empires III','company'=>'微软公司','type'=>'RTS',
        'sign'=>'伐伐伐伐伐木工','plat'=>'battle.net','imgsrc'=>'./img/img10.jpg'),

    array('title'=>'孤岛危机2','english'=>'CRYSIS','company'=>'公司','type'=>'FPS',
        'sign'=>'他们叫我 先知','plat'=>'battle.net','imgsrc'=>'./img/img11.jpg'),

    array('title'=>'火影忍者：究极风暴4','english'=>'Naruto Shippuden：Ultimate Ninja Storm 4','company'=>'万代南梦宫','type'=>'格斗游戏',
        'sign'=>'naruto！ sasuke！','plat'=>'steam','imgsrc'=>'./img/img12.png')

);
   /* array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司'),
    array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司'),
    array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司'),
    array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司'),
    array('title'=>'英雄联盟','english'=>'legue of lagens','company'=>'拳头公司')
);*/
   /*for($i=0;$i<count($gameArry);$i++){

       echo '<div class="col-md-3">';
       echo '<div class="card">';
       echo '<div class="card-head"></div>';
       echo '<div class="card-text">
                <h5>中文名: '.$gameArry[$i]['title'].'</h5>;
                <h6>英文名：'.$gameArry[$i]['english'].'</h6>
                <p>类型：'.$gameArry[$i]['type'].'</p>
            </div>';
       echo '<div class="card-btn">
            <button class="btn-primary">详情</button>
         </div>';
       echo '</div>';
       echo '</div>';
}*/

?>

