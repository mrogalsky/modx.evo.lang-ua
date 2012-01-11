<?php
/*
 * Title: Language File
 * Purpose: Ukranian language file for Ditto
 * Note: New language keys should added at the bottom of this page
 * Translated by:  Max Rogalsky (max.rogalsky@gmail.com)
 * Date:           11/01/12
 */

$_lang['language'] = "ukranian";

$_lang['abbr_lang'] = "uk";

$_lang['file_does_not_exist'] = "не існує. Будь ласка, перевірте файл.";

$_lang['extender_does_not_exist'] = "- дане розширення відсутнє. Будь ласка, перевірте його";

$_lang['default_template'] = <<<TPL

    <div class="ditto_item" id="ditto_item_[+id+]">
        <h3 class="ditto_pageTitle"><a href="[~[+id+]~]">[+pagetitle+]</a></h3>
        <div class="ditto_documentInfo">Автор: <strong>[+author+]</strong> on [+date+]</div>
        <div class="ditto_introText">[+introtext+]</div>
    </div>

TPL;

$_lang["bad_tpl"] = "<p>&[+tpl+] або не містить будь-яких плейсхолдерів, чи є невірним назвою чанка, блоком коду або ім'ям файлу. Будь ласка, перевірте його.</p>';

";

$_lang['no_documents'] = '<p>Записів не знайдено.</p>';

$_lang['resource_array_error'] = 'Помилка масиву ресурсів';
 
$_lang['prev'] = "&lt; назад";

$_lang['next'] = "далі  &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2012";

$_lang['invalid_class'] = "Недійсний клас Ditto. Будь ласка, перевірте його.";

$_lang['none'] = "Ні";

$_lang['edit'] = "Редагувати";

$_lang['dateFormat'] = "%d-%b-%y %H:%M";

// Debug Tab Names

$_lang['info'] = "Інформація";

$_lang['modx'] = "MODX";

$_lang['fields'] = "Поля";

$_lang['templates'] = "Шаблони";

$_lang['filters'] = "Фільтри";

$_lang['prefetch_data'] = "Попередні дані";

$_lang['retrieved_data'] = "Отримані дані";

// Debug Text

$_lang['placeholders'] = "Плейсхолдери"; 

$_lang['params'] = "Параметри";

$_lang['basic_info'] = "Основна інформація";

$_lang['document_info'] = "Інформація про ресурси"

$_lang['debug'] = "Налагоджування";

$_lang['version'] = "Версія";

$_lang['summarize'] = "Число виведених записів (summarize):";

$_lang['total'] = "Всього";

$_lang['sortBy'] = "Сортувати за:";

$_lang['sortDir'] = "Порядок сортування:";

$_lang['start'] = "Почати з";
	 
$_lang['stop'] = "Закінчити";

$_lang['ditto_IDs'] = "ID";

$_lang['ditto_IDs_selected'] = "Вибрані ID";

$_lang['ditto_IDs_all'] = "Всі IDs";

$_lang['open_dbg_console'] = "Відкрити консоль налагодження";

$_lang['save_dbg_console'] = "Завантажити звіт налагодження";

?>