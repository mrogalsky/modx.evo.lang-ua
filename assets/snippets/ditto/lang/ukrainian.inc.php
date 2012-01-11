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

$_lang['file_does_not_exist'] = "�� ����. ���� �����, �������� ����.";

$_lang['extender_does_not_exist'] = "- ���� ���������� ������. ���� �����, �������� ����";

$_lang['default_template'] = <<<TPL

    <div class="ditto_item" id="ditto_item_[+id+]">
        <h3 class="ditto_pageTitle"><a href="[~[+id+]~]">[+pagetitle+]</a></h3>
        <div class="ditto_documentInfo">�����: <strong>[+author+]</strong> on [+date+]</div>
        <div class="ditto_introText">[+introtext+]</div>
    </div>

TPL;

$_lang["bad_tpl"] = "<p>&[+tpl+] ��� �� ������ ����-���� ������������, �� � ������� ������ �����, ������ ���� ��� ��'�� �����. ���� �����, �������� ����.</p>';

";

$_lang['no_documents'] = '<p>������ �� ��������.</p>';

$_lang['resource_array_error'] = '������� ������ �������';
 
$_lang['prev'] = "&lt; �����";

$_lang['next'] = "���  &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2012";

$_lang['invalid_class'] = "�������� ���� Ditto. ���� �����, �������� ����.";

$_lang['none'] = "ͳ";

$_lang['edit'] = "����������";

$_lang['dateFormat'] = "%d-%b-%y %H:%M";

// Debug Tab Names

$_lang['info'] = "����������";

$_lang['modx'] = "MODX";

$_lang['fields'] = "����";

$_lang['templates'] = "�������";

$_lang['filters'] = "Գ�����";

$_lang['prefetch_data'] = "�������� ���";

$_lang['retrieved_data'] = "������� ���";

// Debug Text

$_lang['placeholders'] = "������������"; 

$_lang['params'] = "���������";

$_lang['basic_info'] = "������� ����������";

$_lang['document_info'] = "���������� ��� �������"

$_lang['debug'] = "��������������";

$_lang['version'] = "�����";

$_lang['summarize'] = "����� ��������� ������ (summarize):";

$_lang['total'] = "������";

$_lang['sortBy'] = "��������� ��:";

$_lang['sortDir'] = "������� ����������:";

$_lang['start'] = "������ �";
	 
$_lang['stop'] = "��������";

$_lang['ditto_IDs'] = "ID";

$_lang['ditto_IDs_selected'] = "������ ID";

$_lang['ditto_IDs_all'] = "�� IDs";

$_lang['open_dbg_console'] = "³������ ������� ������������";

$_lang['save_dbg_console'] = "����������� ��� ������������";

?>