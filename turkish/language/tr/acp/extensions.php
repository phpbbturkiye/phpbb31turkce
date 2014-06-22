<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Uzantı',
	'EXTENSIONS'				=> 'Uzantılar',
	'EXTENSIONS_ADMIN'			=> 'Uzantı Yöneticisi',
	'EXTENSIONS_EXPLAIN'		=> 'Uzantı Yöneticisi, phpBB Mesaj Panonuzdaki tüm uzantıların durumlarını yönetmeye ve bunlar hakkındaki bilgileri görüntülemeye imkan veren bir araçtır.',
	'EXTENSION_INVALID_LIST'	=> '“%s” uzantısı geçerli değil.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Seçilen uzantı bu mesaj panosu için mevcut değil, lütfen izin verilen phpBB ve PHP sürümünüzü doğrulayın (ayrıntılar sayfasına bakın).',
	'EXTENSION_DIR_INVALID'		=> 'Seçilen uzantı geçersiz bir dizin yapısına sahip ve etkinleştirilemiyor.',

	'DETAILS'				=> 'Ayrıntılar',

	'EXTENSIONS_DISABLED'	=> 'Devre dışı bırakılan Uzantılar',
	'EXTENSIONS_ENABLED'	=> 'Etkinleştirilen Uzantılar',

	'EXTENSION_DELETE_DATA'	=> 'Veriyi sil',
	'EXTENSION_DISABLE'		=> 'Devre dışı bırak',
	'EXTENSION_ENABLE'		=> 'Etkinleştir',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Bir uzantının silinmesi o uzantıya ait tüm verileri ve ayarları kaldırır. Ancak uzantıyı daha sonra tekrar etkinleştirebilmek için dosyalar saklanır.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Bir uzantının devre dışı bırakılması o uzantıya ait dosyaları, verileri ve ayarları kaldırmaz. Ancak uzantı tarafından eklenen tüm özellikler kaldırılır.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Bir uzantının etkinleştirilmesi o uzantının mesaj panonuzda kullanılmasına izin verir.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Uzantı verileri şu anda siliniyor. Lütfen işlem tamamlanana kadar bu sayfayı kapatmayın ya da yenilemeyin.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Uzantı şu anda devre dışı bırakılıyor. Lütfen işlem tamamlanana kadar bu sayfayı kapatmayın ya da yenilemeyin.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Uzantı şu anda etkinleştiriliyor. Lütfen işlem tamamlanana kadar bu sayfayı kapatmayın ya da yenilemeyin.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Uzantı verileri başarıyla silindi',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Uzantı başarıyla devre dışı bırakıldı',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Uzantı başarıyla etkinleştirildi',

	'EXTENSION_NAME'			=> 'Uzantı Adı',
	'EXTENSION_ACTIONS'			=> 'Eylemler',
	'EXTENSION_OPTIONS'			=> 'Seçenekler',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Uzantı güncelleniyor',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Uzantı devre dışı bırakıldı</li>
			<li>Uzantı dosyaları dosya sisteminden silindi</li>
			<li>Yeni dosyalar yüklendi</li>
			<li>Uzantı etkinleştirildi</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Uzantı mesaj panonuzdan tamamen siliniyor',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Uzantı devre dışı bırakıldı</li>
			<li>Uzantı verileri silindi</li>
			<li>Uzantı dosyaları dosya sisteminden silindi</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> '“%s” ile ilişkili verileri silmek istediğinize emin misiniz?<br /><br />Bu işlem uzantıya ait tüm verileri ve ayarları kaldıracaktır, geri alınamaz!',
	'EXTENSION_DISABLE_CONFIRM'		=> '“%s” uzantısını devre dışı bırakmak istediğinize emin misiniz?',
	'EXTENSION_ENABLE_CONFIRM'		=> '“%s” uzantısını etkinleştirmek istediğinize emin misiniz?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Kararsız sürümün kullanımı için ilerlemek istediğinize emin misiniz?',	

	'RETURN_TO_EXTENSION_LIST'	=> 'Uzantı listesine geri dön',

	'EXT_DETAILS'			=> 'Uzantı Ayrıntıları',
	'DISPLAY_NAME'			=> 'Görünen Adı',
	'CLEAN_NAME'			=> 'Saf Adı',
	'TYPE'					=> 'Tür',
	'DESCRIPTION'			=> 'Açıklama',
	'VERSION'				=> 'Sürüm',
	'HOMEPAGE'				=> 'Anasayfa',
	'PATH'					=> 'Dosya Yolu',
	'TIME'					=> 'Yayınlanma Zamanı',
	'LICENSE'				=> 'Lisans',

	'REQUIREMENTS'			=> 'Gereksinimler',
	'PHPBB_VERSION'			=> 'phpBB Sürümü',
	'PHP_VERSION'			=> 'PHP Sürümü',
	'AUTHOR_INFORMATION'	=> 'Yazar Bilgileri',
	'AUTHOR_NAME'			=> 'Ad',
	'AUTHOR_EMAIL'			=> 'E-posta',
	'AUTHOR_HOMEPAGE'		=> 'Anasayfa',
	'AUTHOR_ROLE'			=> 'Rol',

	'NOT_UP_TO_DATE'		=> '%s güncel değil',
	'UP_TO_DATE'			=> '%s güncel',
	'ANNOUNCEMENT_TOPIC'	=> 'Sürüm Duyurusu',
	'DOWNLOAD_LATEST'		=> 'Sürümü İndir',
	'NO_VERSIONCHECK'		=> 'Verilmiş bir sürüm kontrol bilgisi yok.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Tüm sürümleri yeniden kontrol et',
	'FORCE_UNSTABLE'					=> 'Her zaman kararsız sürümleri kontrol et',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Sürüm kontrol ayarları',	
));
