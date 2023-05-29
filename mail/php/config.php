<?
    // *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

    // Фамилия
    const FAMISREQUIRED = false;
    const MSGSFAMEERROR = "⚠ Поле обязательно для заполнения";

    // Имя
    const NAMEISREQUIRED = false;
    const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

    // Email
    const EMAILISREQUIRED = true;
    const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
    const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

    // Текстовое поле
    const MESSAGEISREQUIRED = true;
    const MSGSMESSAGEERROR = "⚠ Поле обязательно для заполнения";

    // Сообщение об успешной отправке
    const MSGSSUCCESS = "Сообщение успешно отправлено";

    // *** SMTP *** //

        require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
        const HOST = 'ssl://smtp.yandex.ru';
        const LOGIN = 'sanart14@yandex.ru';
        const PASS = '09252000y4555a';
        const PORT = '465';

    // *** /SMTP *** //

  // Почта с которой будет приходить письмо
    const SENDER = 'sanart14@yandex.ru';

    // Почта на которую будет приходить письмо
    const CATCHER = 'olex.art@yandex.ua';

    // Тема письма
    const SUBJECT = 'Заявка с сайта';

    // Кодировка
  const CHARSET = 'UTF-8';
