<?php
/*
 *	File for email form 
 * 
 */
?>
<?php
add_action( 'wp_ajax_ajax_order', 'ajax_mail_function' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_ajax_order', 'ajax_mail_function' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
function ajax_mail_function(){

    //Variables
        $headers = "Content-type: text/html; charset=utf-8\r\n";
        $sitename = get_bloginfo('name');
        $admin_email = get_field('mail_form','options');
        $subject = "Новий лист з сайту ". $sitename;
        $user_name = htmlspecialchars(trim($_POST['name']));
        $user_header = htmlspecialchars(trim($_POST['header']));
        $user_email = htmlspecialchars(trim($_POST['email']));
        $user_message = htmlspecialchars(trim($_POST['message']));
        $message = '<html>
<head>
     <meta charset="UTF-8">
     <title>Форма зворотнього зв\'язку</title>
</head>
<body>
    <body style="width:94%; height:auto;">
    <table style="width:100%; max-width:600px;height:auto;vertical-align: middle;border-color:#000;border:0px;border-style:solid;border-spacing:unset;padding:0;" summary="форма заявки" rules="none" frame="border" cellpadding="0" cellspacing="0">
        <caption align="justify" style="height: 45px;">
            <h2 style="margin: 5px;font-size: 1.5rem;">Лист</h2>
        </caption>
        <thead align="justify" style="background-color:#ddd;border-color:#000;border:1px;border-style:solid;">
            <tr style="height: 30px;">
                <td align="center" style="width:100%;" colspan="4">
                    <h3 style="margin:5px;font-size: 1.1rem;">' . $subject . '</h3>
                </td>
            </tr>
        </thead>
        <tbody style="font-size: 1rem;">';

if(isset($user_name)&&!empty($user_name)) {            
    $message .=   '<tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">Ім\'я користувача:</td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">'. $user_name .'</td>
            </tr>';
}
if(isset($user_header)&&!empty($user_header)) {
    $message .= '<tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">
                    Тема:
                </td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">
                    '. $user_header .'
                </td>
            </tr>';
}
if(isset($user_email)&&!empty($user_email)) {
    $message .= '<tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">
                    Email:
                </td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">
                    '. $user_email .'
                </td>
            </tr>';
}
if(isset($user_message)&&!empty($user_message)) {
    $message .= '<tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td colspan="4" align="center">
                    Лист:
                </td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td colspan="4" align="center">
                    '. $user_message .'
                </td>
            </tr>';
}
    $message .= '</tbody></table>';
mail($admin_email,$subject,$message,$headers);
}