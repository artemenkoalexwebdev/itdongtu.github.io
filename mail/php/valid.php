<?php
    $msgs = [];
if (isset($_POST['fam']) ) {
        if(empty($_POST['fam']) && FAMISREQUIRED) {
            $msgs['fam'] = MSGSFAMERROR;
        } else {
            if (!empty($_POST['fam'])) {
                $fam = "<b>Фамилия* </b>" . trim(strip_tags($_POST['fam'])) . "<br>";
            }
        }
    }
    if (isset($_POST['name']) ) {
        if(empty($_POST['name']) && NAMEISREQUIRED) {
            $msgs['name'] = MSGSNAMEERROR;
        } else {
            if (!empty($_POST['name'])) {
                $name = "<b>Имя* </b>" . trim(strip_tags($_POST['name'])) . "<br>";
            }
        }
    }

    if (isset($_POST['email']) ) {
        if(empty($_POST['email']) && EMAILISREQUIRED) {
            $msgs['email'] = MSGSEMAILERROR;
        } else {
            if(!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = "<b>Почта* </b> " . trim(strip_tags($_POST['email'])) . "<br>";
                } else {
                    $msgs['email'] = MSGSEMAILINCORRECT;
                }
            }
        }
    }
if (isset($_POST['message']) ) {
        if(empty($_POST['message']) && MESSAGEISREQUIRED) {
            $msgs['message'] = MSGSMESSAGEERROR;
        } else {
            if (!empty($_POST['message'])) {
                $message = "<b>Сообщение* </b> " . trim(strip_tags($_POST['message'])) . "<br>";
            }
        }
    }

    if((empty($_POST['email']) && empty($_POST['name'])) && (!EMAILISREQUIRED && !NAMEISREQUIRED)) {
        $msgs['attantion'] = 'Заполните хотя бы одно контактное поле для связии с вами';
    }

    if ($msgs) {
        echo json_encode($msgs);
        die;
    } else {
        $msgs['success'] = MSGSSUCCESS;
    }
