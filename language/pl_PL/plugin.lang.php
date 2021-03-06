<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['fhp_sts_maxage_comment'] = 'Maksymalny wiek STS w sekundach';
$lang['fhp_sts_maxage_label'] = 'Maksymalny wiek STS';
$lang['fhp_description'] = 'Wtyczka ta wypełnia lukę w zabezpieczeniach Piwigo. Umożliwia administratorom wymuszenie korzystania z szyfrowanych połączeń SSL przy przeglądaniu Piwigo (gdy https jest dostępny na serwerze).<br />Korzystanie z szyfrowanych połączeń zaleca się by chronić transmisję użytkowników i ich haseł.';
$lang['fhp_activate_sts_comment'] = 'Aktywuj HTTP Strict Transport Security (HSTS)<br />Ta opcja musi być ustawiona jeżeli posiadasz podpisany certyfikat TLS. Nic ona nie zmienia jeżeli "Wymuszanie bezpiecznych połączeń" jest wyłączone.<br /><br /><i>HSTS jest mechanizmem umożliwiającym serwerowi informowanie, żeby komunikować się z nim wyłącznie przy pomocy połączeń szyfrowanych HTTPS. Gdy HSTS jest aktywny, do komunikacji dodawany jest nagłówek "Strict-Transport-Security", a każdy odnośnik na stronie jest automatycznie zamieniany na jego bezpieczną wersję.</i><br />';
$lang['fhp_force_https_warning'] = '<b>Ostrzeżenie!</b> Przed aktywacją bezpiecznych połączeń, proszę się uprawnić, że serwer obsługuje https. Możesz kliknąć na poniższy odnośnik, aby to przetestować (wczytuje tę stronę używając protokołu https).';
$lang['fhp_force_https_comment'] = 'Aktywuj tę opcję, aby zmusić użytkowników do korzystania z bezpiecznych połączeń.';
$lang['fhp_about'] = 'O';
$lang['fhp_activate_sts_label'] = 'Użyj STS';
$lang['fhp_force_https_label'] = 'Wymuś HTTPS';
$lang['fhp_options_group'] = 'Opcje';
$lang['fhp_security_group'] = 'Ustawienia bezpieczeństwa';
$lang['fhp_submit'] = 'Wyślij';
$lang['fhp_test_https_link'] = 'Strona testowa przez https (wyskakujące okno)';
?>