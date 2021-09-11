<?php

function strategy_assets() {
wp_enqueue_style( 'Circe', get_template_directory_uri() . '/assets/Fonts/Circe.css' );

wp_enqueue_style( 'GOST', get_template_directory_uri() . '/assets/Fonts/GOST.css' );

wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/CSS/reset.css' );

wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/CSS/normalize.css' );

wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/CSS/main.css' );

wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/CSS/media.css' );

wp_enqueue_script( 'system', get_template_directory_uri() . '/assets/JS/system.js', array(), '20151215', true );

wp_enqueue_script( 'works', get_template_directory_uri() . 'JS/works.js', array(), '20151215', true );

wp_enqueue_script( 'stonk', get_template_directory_uri() . '/assets/JS/stonk.js', array(), '20151215', true );

wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/JS/form.js', array(), '20151215', true );

wp_enqueue_script( 'atestats', get_template_directory_uri() . '/assets/JS/atestats.js', array(), '20151215', true );


}
add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");

function send_mail(){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $plusPhone ='+'.$phone;
    
    print_r($_POST);

    $message = 'Клиент '.$name.' заявку, его номер: '.$phone;
    
    $token = "1905621045:AAE37TDjaita3SAOHGbQif8OS4WJbtu40RM";
$chat_id = "-593503131";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,

);

foreach($arr as $key => $value) {
  $txt = "<b>".$key."</b> ".$value."%0A";
};
$txt = '<b>Оставлена заявка!</b>%0A%0A<b>Имя: </b>'.$name.'%0A<b>Телефон: </b>'.$plusPhone;
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Errors Man";
} else {
  echo "Error";
  
}

    

  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );


  wp_mail( 'fireautomatic@yandex.ru', 'Заявка с сайта fireautomatic.com', $message );
  wp_die();
}