<?php
/** ---------------------------------------------------------------------
 * app/lib/File/FileMimeTypes.php :
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2009 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This source code is free and modifiable under the terms of
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * @package CollectiveAccess
 * @subpackage File
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */

/**
 *
 */

global $g_mimetypes_to_info;
$g_mimetypes_to_info = array(
    'x-world/x-3dmf' => array('name' => '3DMF'),
    'application/octet-stream' => array('name' => 'Binary data'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/aiff' => array('name' => 'AIFF audio'),
    'application/x-aiff' => array('name' => 'AIFF audio'),
    'video/x-ms-asf' => array('name' => 'Microsoft ASF'),
    'audio/basic' => array('name' => 'AU audio'),
    'audio/x-au' => array('name' => 'AU audio'),
    'text/asp' => array('name' => 'Microsoft ASP'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/x-mplayer2' => array('name' => 'Microsoft ASX'),
    'video/x-ms-asf' => array('name' => 'Microsoft ASX'),
    'video/x-ms-asf-plugin' => array('name' => 'Microsoft ASX'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/postscript' => array('name' => 'Postscript'),
    'application/x-troff-msvideo' => array('name' => 'AVI'),
    'video/avi' => array('name' => 'AVI'),
    'video/msvideo' => array('name' => 'AVI'),
    'video/x-msvideo' => array('name' => 'AVI'),
    'application/mac-binary' => array('name' => 'MacBinary'),
    'application/macbinary' => array('name' => 'MacBinary'),
    'application/x-binary' => array('name' => 'Binary data'),
    'application/x-macbinary' => array('name' => 'MacBinary'),
    'image/bmp' => array('name' => 'BMP'),
    'image/x-windows-bmp' => array('name' => 'MacBinary'),
    'application/x-bzip' => array('name' => 'BZip'),
    'application/x-bzip2' => array('name' => 'BZip2'),
    'text/plain' => array('name' => 'Text'),
    'text/css' => array('name' => 'CSS'),
    'application/x-director' => array('name' => 'Adobe Director'),
    'application/msword' => array('name' => 'Microsoft Word'),
    'video/x-dv' => array('name' => 'DV Video'),
    'application/x-dvi' => array('name' => 'DV'),
    'model/vnd.dwf' => array('name' => 'DWF'),
    'application/acad' => array('name' => 'AutoCad DWG'),
    'image/vnd.dwg' => array('name' => 'AutoCad DWG'),
    'image/x-dwg' => array('name' => 'AutoCad DWG'),
    'application/dxf' => array('name' => 'AutoCad DXF'),
    'image/vnd.dwg' => array('name' => 'AutoCad DWG'),
    'image/x-dwg' => array('name' => 'AutoCad DWG'),
    'application/x-director' => array('name' => 'Adobe Director'),
    'image/vnd.fpx' => array('name' => 'FPX'),
    'image/vnd.net-fpx' => array('name' => 'FPX'),
    'image/gif' => array('name' => 'GIF'),
    'application/x-gtar' => array('name' => 'GNU TAR'),
    'application/x-compressed' => array('name' => 'GZip'),
    'application/x-gzip' => array('name' => 'GZip'),
    'multipart/x-gzip' => array('name' => 'GZip'),
    'text/html' => array('name' => 'HTML'),
    'image/x-icon' => array('name' => 'ICO'),
    'image/jpeg' => array('name' => 'JPEG'),
    'image/pjpeg' => array('name' => 'JPEG'),
    'application/x-javascript' => array('name' => 'Javascript'),
    'video/mpeg' => array('name' => 'MPEG Video'),
    'audio/mpeg' => array('name' => 'MPEG Audio'),
    'application/x-midi' => array('name' => 'MIDI'),
    'audio/midi' => array('name' => 'MIDI'),
    'audio/x-mid' => array('name' => 'MIDI'),
    'audio/x-midi' => array('name' => 'MIDI'),
    'application/x-midi' => array('name' => 'MIDI'),
    'message/rfc822' => array('name' => 'MIME'),
    'www/mime' => array('name' => 'MIME'),
    'video/x-motion-jpeg' => array('name' => 'Motion JPEG'),
    'video/quicktime' => array('name' => 'QuickTime'),
    'audio/x-mpeg' => array('name' => 'MPEG Audio'),
    'video/x-mpeg' => array('name' => 'MPEG Video'),
    'video/x-mpeq2a' => array('name' => 'MPEG-2 Video'),
    'audio/mpeg3' => array('name' => 'MP3'),
    'audio/x-mpeg-3' => array('name' => 'MP3'),
    'application/vnd.ms-project' => array('name' => 'Microsoft Project'),
    'application/marc' => array('name' => 'MARC'),
    'image/x-pict' => array('name' => 'PICT'),
    'image/x-pcx' => array('name' => 'PC'),
    'image/pict' => array('name' => 'PICT'),
    'image/png' => array('name' => 'PNG'),
    'application/mspowerpoint' => array('name' => 'Microsoft PowerPoint'),
    'application/powerpoint' => array('name' => 'Microsoft PowerPoint'),
    'application/vnd.ms-powerpoint' => array('name' => 'Microsoft PowerPoint'),
    'application/x-mspowerpoint' => array('name' => 'Microsoft PowerPoint'),
    'video/x-qtc' => array('name' => 'QuickTime'),
    'image/x-quicktime' => array('name' => 'QuickTime'),
    'image/x-quicktime' => array('name' => 'QuickTime'),
    'application/rtf' => array('name' => 'RTF Text'),
    'application/x-rtf' => array('name' => 'RTF Text'),
    'text/richtext' => array('name' => 'RTF Text'),
    'application/rtf' => array('name' => 'RTF Text'),
    'text/sgml' => array('name' => 'SGML'),
    'text/x-sgml' => array('name' => 'SGML'),
    'text/sgml' => array('name' => 'SGML'),
    'text/x-sgml' => array('name' => 'SGML'),
    'application/x-sit' => array('name' => 'Stuffit'),
    'application/x-stuffit' => array('name' => 'Stuffit'),
    'application/smil' => array('name' => 'SMIL'),
    'application/smil' => array('name' => 'SMIL'),
    'application/x-shockwave-flash' => array('name' => 'Adobe Flash'),
    'application/x-tar' => array('name' => 'TAR'),
    'image/tiff' => array('name' => 'TIFF'),
    'image/x-tiff' => array('name' => 'TIFF'),
    'application/x-vrml' => array('name' => 'VRML'),
    'model/vrml' => array('name' => 'VRML'),
    'x-world/x-vrml' => array('name' => 'VRML'),
    'audio/wav' => array('name' => 'WAV Audio'),
    'audio/x-wav' => array('name' => 'WAV Audio'),
    'windows/metafile' => array('name' => 'Windows Metafile'),
    'application/excel' => array('name' => 'Microsoft Excel'),
    'application/x-excel' => array('name' => 'Microsoft Excel'),
    'application/x-msexcel' => array('name' => 'Microsoft Excel'),
    'application/vnd.ms-excel' => array('name' => 'Microsoft Excel'),
    'application/xml' => array('name' => 'XML'),
    'text/xml' => array('name' => 'XML'),
    'application/zip' => array('name' => 'ZIP'),
    'multipart/x-zip' => array('name' => 'ZIP'),
    'application/x-httpd-php' => array('name' => 'PHP'),
    'application/x-php4' => array('name' => 'PHP'),
    'application/javascript' => array('name' => 'Javascript'),
    'application/json' => array('name' => 'JSON'),
    'video/x-flv' => array('name' => 'Flash Video'),
    'application/atom+xml' => array('name' => 'Atom'),
    'image/svg+xml' => array('name' => 'SVG'),
    'application/x-rar-compressed' => array('name' => 'RAR'),
    'application/pdf' => array('name' => 'PDF'),
    'image/vnd.adobe.photoshop' => array('name' => 'Photoshop PSD'),
    'application/vnd.oasis.opendocument.text' => array('name' => 'OpenDocument Text'),
    'application/vnd.oasis.opendocument.spreadsheet' => array('name' => 'OpenDocument Spreadsheet'),
    'application/x-shockwave-flash2-preview' => array('name' => 'Adobe Flash'),
    'application/futuresplash' => array('name' => 'Adobe Flash'),
    'application/windows-media' => array('name' => 'Windows Media')
);

global $g_file_extensions_to_mimetypes;
$g_file_extensions_to_mimetypes = array(
    '3dm' => 'x-world/x-3dmf',
    '3dmf' => 'x-world/x-3dmf',
    'a' => 'application/octet-stream',
    'aab' => 'application/x-authorware-bin',
    'aam' => 'application/x-authorware-map',
    'aas' => 'application/x-authorware-seg',
    'abc' => 'text/vnd.abc',
    'acgi' => 'text/html',
    'afl' => 'video/animaflex',
    'ai' => 'application/postscript',
    'aif' => 'audio/aiff',
    'aif' => 'audio/x-aiff',
    'aifc' => 'audio/aiff',
    'aifc' => 'audio/x-aiff',
    'aiff' => 'audio/aiff',
    'aiff' => 'audio/x-aiff',
    'aim' => 'application/x-aim',
    'aip' => 'text/x-audiosoft-intra',
    'ani' => 'application/x-navi-animation',
    'aos' => 'application/x-nokia-9000-communicator-add-on-software',
    'aps' => 'application/mime',
    'arc' => 'application/octet-stream',
    'arj' => 'application/arj',
    'arj' => 'application/octet-stream',
    'art' => 'image/x-jg',
    'asf' => 'video/x-ms-asf',
    'asm' => 'text/x-asm',
    'asp' => 'text/asp',
    'asx' => 'application/x-mplayer2',
    'asx' => 'video/x-ms-asf',
    'asx' => 'video/x-ms-asf-plugin',
    'au' => 'audio/basic',
    'au' => 'audio/x-au',
    'avi' => 'application/x-troff-msvideo',
    'avi' => 'video/avi',
    'avi' => 'video/msvideo',
    'avi' => 'video/x-msvideo',
    'avs' => 'video/avs-video',
    'bcpio' => 'application/x-bcpio',
    'bin' => 'application/mac-binary',
    'bin' => 'application/macbinary',
    'bin' => 'application/octet-stream',
    'bin' => 'application/x-binary',
    'bin' => 'application/x-macbinary',
    'bm' => 'image/bmp',
    'bmp' => 'image/bmp',
    'bmp' => 'image/x-windows-bmp',
    'boo' => 'application/book',
    'book' => 'application/book',
    'boz' => 'application/x-bzip2',
    'bsh' => 'application/x-bsh',
    'bz' => 'application/x-bzip',
    'bz2' => 'application/x-bzip2',
    'c' => 'text/plain',
    'c' => 'text/x-c',
    'c++' => 'text/plain',
    'cat' => 'application/vnd.ms-pki.seccat',
    'cc' => 'text/plain',
    'cc' => 'text/x-c',
    'ccad' => 'application/clariscad',
    'cco' => 'application/x-cocoa',
    'cdf' => 'application/cdf',
    'cdf' => 'application/x-cdf',
    'cdf' => 'application/x-netcdf',
    'cer' => 'application/pkix-cert',
    'cer' => 'application/x-x509-ca-cert',
    'cha' => 'application/x-chat',
    'chat' => 'application/x-chat',
    'class' => 'application/java',
    'class' => 'application/java-byte-code',
    'class' => 'application/x-java-class',
    'com' => 'application/octet-stream',
    'com' => 'text/plain',
    'conf' => 'text/plain',
    'cpio' => 'application/x-cpio',
    'cpp' => 'text/x-c',
    'cpt' => 'application/mac-compactpro',
    'cpt' => 'application/x-compactpro',
    'cpt' => 'application/x-cpt',
    'crl' => 'application/pkcs-crl',
    'crl' => 'application/pkix-crl',
    'crt' => 'application/pkix-cert',
    'crt' => 'application/x-x509-ca-cert',
    'crt' => 'application/x-x509-user-cert',
    'csh' => 'application/x-csh',
    'csh' => 'text/x-script.csh',
    'css' => 'application/x-pointplus',
    'css' => 'text/css',
    'cxx' => 'text/plain',
    'dcr' => 'application/x-director',
    'deepv' => 'application/x-deepv',
    'def' => 'text/plain',
    'der' => 'application/x-x509-ca-cert',
    'dif' => 'video/x-dv',
    'dir' => 'application/x-director',
    'dl' => 'video/dl',
    'dl' => 'video/x-dl',
    'doc' => 'application/msword',
    'dot' => 'application/msword',
    'dp' => 'application/commonground',
    'drw' => 'application/drafting',
    'dump' => 'application/octet-stream',
    'dv' => 'video/x-dv',
    'dvi' => 'application/x-dvi',
    'dwf' => 'model/vnd.dwf',
    'dwg' => 'application/acad',
    'dwg' => 'image/vnd.dwg',
    'dwg' => 'image/x-dwg',
    'dxf' => 'application/dxf',
    'dxf' => 'image/vnd.dwg',
    'dxf' => 'image/x-dwg',
    'dxr' => 'application/x-director',
    'el' => 'text/x-script.elisp',
    'elc' => 'application/x-bytecode.elisp',
    'elc' => 'application/x-elc',
    'env' => 'application/x-envoy',
    'eps' => 'application/postscript',
    'es' => 'application/x-esrehber',
    'etx' => 'text/x-setext',
    'evy' => 'application/envoy',
    'evy' => 'application/x-envoy',
    'exe' => 'application/octet-stream',
    'f' => 'text/plain',
    'f' => 'text/x-fortran',
    'f77' => 'text/x-fortran',
    'f90' => 'text/plain',
    'f90' => 'text/x-fortran',
    'fdf' => 'application/vnd.fdf',
    'fif' => 'application/fractals',
    'fif' => 'image/fif',
    'fli' => 'video/fli',
    'fli' => 'video/x-fli',
    'flo' => 'image/florian',
    'flx' => 'text/vnd.fmi.flexstor',
    'fmf' => 'video/x-atomic3d-feature',
    'for' => 'text/plain',
    'for' => 'text/x-fortran',
    'fpx' => 'image/vnd.fpx',
    'fpx' => 'image/vnd.net-fpx',
    'frl' => 'application/freeloader',
    'funk' => 'audio/make',
    'g' => 'text/plain',
    'g3' => 'image/g3fax',
    'gif' => 'image/gif',
    'gl' => 'video/gl',
    'gl' => 'video/x-gl',
    'gsd' => 'audio/x-gsm',
    'gsm' => 'audio/x-gsm',
    'gsp' => 'application/x-gsp',
    'gss' => 'application/x-gss',
    'gtar' => 'application/x-gtar',
    'gz' => 'application/x-compressed',
    'gz' => 'application/x-gzip',
    'gzip' => 'application/x-gzip',
    'gzip' => 'multipart/x-gzip',
    'h' => 'text/plain',
    'h' => 'text/x-h',
    'hdf' => 'application/x-hdf',
    'help' => 'application/x-helpfile',
    'hgl' => 'application/vnd.hp-hpgl',
    'hh' => 'text/plain',
    'hh' => 'text/x-h',
    'hlb' => 'text/x-script',
    'hlp' => 'application/hlp',
    'hlp' => 'application/x-helpfile',
    'hlp' => 'application/x-winhelp',
    'hpg' => 'application/vnd.hp-hpgl',
    'hpgl' => 'application/vnd.hp-hpgl',
    'hqx' => 'application/binhex',
    'hqx' => 'application/binhex4',
    'hqx' => 'application/mac-binhex',
    'hqx' => 'application/mac-binhex40',
    'hqx' => 'application/x-binhex40',
    'hqx' => 'application/x-mac-binhex40',
    'hta' => 'application/hta',
    'htc' => 'text/x-component',
    'htm' => 'text/html',
    'html' => 'text/html',
    'htmls' => 'text/html',
    'htt' => 'text/webviewhtml',
    'htx' => 'text/html',
    'ice' => 'x-conference/x-cooltalk',
    'ico' => 'image/x-icon',
    'idc' => 'text/plain',
    'ief' => 'image/ief',
    'iefs' => 'image/ief',
    'iges' => 'application/iges',
    'iges' => 'model/iges',
    'igs' => 'application/iges',
    'igs' => 'model/iges',
    'ima' => 'application/x-ima',
    'imap' => 'application/x-httpd-imap',
    'inf' => 'application/inf',
    'ins' => 'application/x-internett-signup',
    'ip' => 'application/x-ip2',
    'isu' => 'video/x-isvideo',
    'it' => 'audio/it',
    'iv' => 'application/x-inventor',
    'ivr' => 'i-world/i-vrml',
    'ivy' => 'application/x-livescreen',
    'jam' => 'audio/x-jam',
    'jav' => 'text/plain',
    'jav' => 'text/x-java-source',
    'java' => 'text/plain',
    'java' => 'text/x-java-source',
    'jcm' => 'application/x-java-commerce',
    'jfif' => 'image/jpeg',
    'jfif' => 'image/pjpeg',
    'jfif-tbnl' => 'image/jpeg',
    'jpe' => 'image/jpeg',
    'jpe' => 'image/pjpeg',
    'jpeg' => 'image/jpeg',
    'jpeg' => 'image/pjpeg',
    'jpg' => 'image/jpeg',
    'jpg' => 'image/pjpeg',
    'jps' => 'image/x-jps',
    'js' => 'application/x-javascript',
    'jut' => 'image/jutvision',
    'kar' => 'audio/midi',
    'kar' => 'music/x-karaoke',
    'ksh' => 'application/x-ksh',
    'ksh' => 'text/x-script.ksh',
    'la' => 'audio/nspaudio',
    'la' => 'audio/x-nspaudio',
    'lam' => 'audio/x-liveaudio',
    'latex' => 'application/x-latex',
    'lha' => 'application/lha',
    'lha' => 'application/octet-stream',
    'lha' => 'application/x-lha',
    'lhx' => 'application/octet-stream',
    'list' => 'text/plain',
    'lma' => 'audio/nspaudio',
    'lma' => 'audio/x-nspaudio',
    'log' => 'text/plain',
    'lsp' => 'application/x-lisp',
    'lsp' => 'text/x-script.lisp',
    'lst' => 'text/plain',
    'lsx' => 'text/x-la-asf',
    'ltx' => 'application/x-latex',
    'lzh' => 'application/octet-stream',
    'lzh' => 'application/x-lzh',
    'lzx' => 'application/lzx',
    'lzx' => 'application/octet-stream',
    'lzx' => 'application/x-lzx',
    'm' => 'text/plain',
    'm' => 'text/x-m',
    'm1v' => 'video/mpeg',
    'm2a' => 'audio/mpeg',
    'm2v' => 'video/mpeg',
    'm3u' => 'audio/x-mpequrl',
    'man' => 'application/x-troff-man',
    'map' => 'application/x-navimap',
    'mar' => 'text/plain',
    'mbd' => 'application/mbedlet',
    'mc$' => 'application/x-magic-cap-package-1.0',
    'mcd' => 'application/mcad',
    'mcd' => 'application/x-mathcad',
    'mcf' => 'image/vasa',
    'mcf' => 'text/mcf',
    'mcp' => 'application/netmc',
    'me' => 'application/x-troff-me',
    'mht' => 'message/rfc822',
    'mhtml' => 'message/rfc822',
    'mid' => 'application/x-midi',
    'mid' => 'audio/midi',
    'mid' => 'audio/x-mid',
    'mid' => 'audio/x-midi',
    'mid' => 'music/crescendo',
    'mid' => 'x-music/x-midi',
    'midi' => 'application/x-midi',
    'midi' => 'audio/midi',
    'midi' => 'audio/x-mid',
    'midi' => 'audio/x-midi',
    'midi' => 'music/crescendo',
    'midi' => 'x-music/x-midi',
    'mif' => 'application/x-frame',
    'mif' => 'application/x-mif',
    'mime' => 'message/rfc822',
    'mime' => 'www/mime',
    'mjf' => 'audio/x-vnd.audioexplosion.mjuicemediafile',
    'mjpg' => 'video/x-motion-jpeg',
    'mm' => 'application/base64',
    'mm' => 'application/x-meme',
    'mme' => 'application/base64',
    'mod' => 'audio/mod',
    'mod' => 'audio/x-mod',
    'moov' => 'video/quicktime',
    'mov' => 'video/quicktime',
    'movie' => 'video/x-sgi-movie',
    'mp2' => 'audio/mpeg',
    'mp2' => 'audio/x-mpeg',
    'mp2' => 'video/mpeg',
    'mp2' => 'video/x-mpeg',
    'mp2' => 'video/x-mpeq2a',
    'mp3' => 'audio/mpeg3',
    'mp3' => 'audio/x-mpeg-3',
    'mp3' => 'video/mpeg',
    'mp3' => 'video/x-mpeg',
    'mpa' => 'audio/mpeg',
    'mpa' => 'video/mpeg',
    'mpc' => 'application/x-project',
    'mpe' => 'video/mpeg',
    'mpeg' => 'video/mpeg',
    'mpg' => 'audio/mpeg',
    'mpg' => 'video/mpeg',
    'mpga' => 'audio/mpeg',
    'mpp' => 'application/vnd.ms-project',
    'mpt' => 'application/x-project',
    'mpv' => 'application/x-project',
    'mpx' => 'application/x-project',
    'mrc' => 'application/marc',
    'ms' => 'application/x-troff-ms',
    'mv' => 'video/x-sgi-movie',
    'my' => 'audio/make',
    'mzz' => 'application/x-vnd.audioexplosion.mzz',
    'nap' => 'image/naplps',
    'naplps' => 'image/naplps',
    'nc' => 'application/x-netcdf',
    'ncm' => 'application/vnd.nokia.configuration-message',
    'nif' => 'image/x-niff',
    'niff' => 'image/x-niff',
    'nix' => 'application/x-mix-transfer',
    'nsc' => 'application/x-conference',
    'nvd' => 'application/x-navidoc',
    'o' => 'application/octet-stream',
    'oda' => 'application/oda',
    'omc' => 'application/x-omc',
    'omcd' => 'application/x-omcdatamaker',
    'omcr' => 'application/x-omcregerator',
    'p' => 'text/x-pascal',
    'p10' => 'application/pkcs10',
    'p10' => 'application/x-pkcs10',
    'p12' => 'application/pkcs-12',
    'p12' => 'application/x-pkcs12',
    'p7a' => 'application/x-pkcs7-signature',
    'p7c' => 'application/pkcs7-mime',
    'p7c' => 'application/x-pkcs7-mime',
    'p7m' => 'application/pkcs7-mime',
    'p7m' => 'application/x-pkcs7-mime',
    'p7r' => 'application/x-pkcs7-certreqresp',
    'p7s' => 'application/pkcs7-signature',
    'part' => 'application/pro_eng',
    'pas' => 'text/pascal',
    'pbm' => 'image/x-portable-bitmap',
    'pcl' => 'application/vnd.hp-pcl',
    'pcl' => 'application/x-pcl',
    'pct' => 'image/x-pict',
    'pcx' => 'image/x-pcx',
    'pdb' => 'chemical/x-pdb',
    'pdf' => 'application/pdf',
    'pfunk' => 'audio/make',
    'pfunk' => 'audio/make.my.funk',
    'pgm' => 'image/x-portable-graymap',
    'pgm' => 'image/x-portable-greymap',
    'pic' => 'image/pict',
    'pict' => 'image/pict',
    'pkg' => 'application/x-newton-compatible-pkg',
    'pko' => 'application/vnd.ms-pki.pko',
    'pl' => 'text/plain',
    'pl' => 'text/x-script.perl',
    'plx' => 'application/x-pixclscript',
    'pm' => 'image/x-xpixmap',
    'pm' => 'text/x-script.perl-module',
    'pm4' => 'application/x-pagemaker',
    'pm5' => 'application/x-pagemaker',
    'png' => 'image/png',
    'pnm' => 'application/x-portable-anymap',
    'pnm' => 'image/x-portable-anymap',
    'pot' => 'application/mspowerpoint',
    'pot' => 'application/vnd.ms-powerpoint',
    'pov' => 'model/x-pov',
    'ppa' => 'application/vnd.ms-powerpoint',
    'ppm' => 'image/x-portable-pixmap',
    'pps' => 'application/mspowerpoint',
    'pps' => 'application/vnd.ms-powerpoint',
    'ppt' => 'application/mspowerpoint',
    'ppt' => 'application/powerpoint',
    'ppt' => 'application/vnd.ms-powerpoint',
    'ppt' => 'application/x-mspowerpoint',
    'ppz' => 'application/mspowerpoint',
    'pre' => 'application/x-freelance',
    'prt' => 'application/pro_eng',
    'ps' => 'application/postscript',
    'psd' => 'application/octet-stream',
    'pvu' => 'paleovu/x-pv',
    'pwz' => 'application/vnd.ms-powerpoint',
    'py' => 'text/x-script.phyton',
    'pyc' => 'applicaiton/x-bytecode.python',
    'qcp' => 'audio/vnd.qcelp',
    'qd3' => 'x-world/x-3dmf',
    'qd3d' => 'x-world/x-3dmf',
    'qif' => 'image/x-quicktime',
    'qt' => 'video/quicktime',
    'qtc' => 'video/x-qtc',
    'qti' => 'image/x-quicktime',
    'qtif' => 'image/x-quicktime',
    'ra' => 'audio/x-pn-realaudio',
    'ra' => 'audio/x-pn-realaudio-plugin',
    'ra' => 'audio/x-realaudio',
    'ram' => 'audio/x-pn-realaudio',
    'ras' => 'application/x-cmu-raster',
    'ras' => 'image/cmu-raster',
    'ras' => 'image/x-cmu-raster',
    'rast' => 'image/cmu-raster',
    'rexx' => 'text/x-script.rexx',
    'rf' => 'image/vnd.rn-realflash',
    'rgb' => 'image/x-rgb',
    'rm' => 'application/vnd.rn-realmedia',
    'rm' => 'audio/x-pn-realaudio',
    'rmi' => 'audio/mid',
    'rmm' => 'audio/x-pn-realaudio',
    'rmp' => 'audio/x-pn-realaudio',
    'rmp' => 'audio/x-pn-realaudio-plugin',
    'rng' => 'application/ringing-tones',
    'rng' => 'application/vnd.nokia.ringing-tone',
    'rnx' => 'application/vnd.rn-realplayer',
    'roff' => 'application/x-troff',
    'rp' => 'image/vnd.rn-realpix',
    'rpm' => 'audio/x-pn-realaudio-plugin',
    'rt' => 'text/richtext',
    'rt' => 'text/vnd.rn-realtext',
    'rtf' => 'application/rtf',
    'rtf' => 'application/x-rtf',
    'rtf' => 'text/richtext',
    'rtx' => 'application/rtf',
    'rtx' => 'text/richtext',
    'rv' => 'video/vnd.rn-realvideo',
    's' => 'text/x-asm',
    's3m' => 'audio/s3m',
    'saveme' => 'application/octet-stream',
    'sbk' => 'application/x-tbook',
    'scm' => 'application/x-lotusscreencam',
    'scm' => 'text/x-script.guile',
    'scm' => 'text/x-script.scheme',
    'scm' => 'video/x-scm',
    'sdml' => 'text/plain',
    'sdp' => 'application/sdp',
    'sdp' => 'application/x-sdp',
    'sdr' => 'application/sounder',
    'sea' => 'application/sea',
    'sea' => 'application/x-sea',
    'set' => 'application/set',
    'sgm' => 'text/sgml',
    'sgm' => 'text/x-sgml',
    'sgml' => 'text/sgml',
    'sgml' => 'text/x-sgml',
    'sh' => 'application/x-bsh',
    'sh' => 'application/x-sh',
    'sh' => 'application/x-shar',
    'sh' => 'text/x-script.sh',
    'shar' => 'application/x-bsh',
    'shar' => 'application/x-shar',
    'shtml' => 'text/html',
    'shtml' => 'text/x-server-parsed-html',
    'sid' => 'audio/x-psid',
    'sit' => 'application/x-sit',
    'sit' => 'application/x-stuffit',
    'skd' => 'application/x-koan',
    'skm' => 'application/x-koan',
    'skp' => 'application/x-koan',
    'skt' => 'application/x-koan',
    'sl' => 'application/x-seelogo',
    'smi' => 'application/smil',
    'smil' => 'application/smil',
    'snd' => 'audio/basic',
    'snd' => 'audio/x-adpcm',
    'sol' => 'application/solids',
    'spc' => 'application/x-pkcs7-certificates',
    'spc' => 'text/x-speech',
    'spl' => 'application/futuresplash',
    'spr' => 'application/x-sprite',
    'sprite' => 'application/x-sprite',
    'src' => 'application/x-wais-source',
    'ssi' => 'text/x-server-parsed-html',
    'ssm' => 'application/streamingmedia',
    'sst' => 'application/vnd.ms-pki.certstore',
    'step' => 'application/step',
    'stl' => 'application/sla',
    'stl' => 'application/vnd.ms-pki.stl',
    'stl' => 'application/x-navistyle',
    'stp' => 'application/step',
    'sv4cpio' => 'application/x-sv4cpio',
    'sv4crc' => 'application/x-sv4crc',
    'svf' => 'image/vnd.dwg',
    'svf' => 'image/x-dwg',
    'svr' => 'application/x-world',
    'svr' => 'x-world/x-svr',
    'swf' => 'application/x-shockwave-flash',
    't' => 'application/x-troff',
    'talk' => 'text/x-speech',
    'tar' => 'application/x-tar',
    'tbk' => 'application/toolbook',
    'tbk' => 'application/x-tbook',
    'tcl' => 'application/x-tcl',
    'tcl' => 'text/x-script.tcl',
    'tcsh' => 'text/x-script.tcsh',
    'tex' => 'application/x-tex',
    'texi' => 'application/x-texinfo',
    'texinfo' => 'application/x-texinfo',
    'text' => 'application/plain',
    'text' => 'text/plain',
    'tgz' => 'application/gnutar',
    'tgz' => 'application/x-compressed',
    'tif' => 'image/tiff',
    'tif' => 'image/x-tiff',
    'tiff' => 'image/tiff',
    'tiff' => 'image/x-tiff',
    'tr' => 'application/x-troff',
    'tsi' => 'audio/tsp-audio',
    'tsp' => 'application/dsptype',
    'tsp' => 'audio/tsplayer',
    'tsv' => 'text/tab-separated-values',
    'turbot' => 'image/florian',
    'txt' => 'text/plain',
    'uil' => 'text/x-uil',
    'uni' => 'text/uri-list',
    'unis' => 'text/uri-list',
    'unv' => 'application/i-deas',
    'uri' => 'text/uri-list',
    'uris' => 'text/uri-list',
    'ustar' => 'application/x-ustar',
    'ustar' => 'multipart/x-ustar',
    'uu' => 'application/octet-stream',
    'uu' => 'text/x-uuencode',
    'uue' => 'text/x-uuencode',
    'vcd' => 'application/x-cdlink',
    'vcs' => 'text/x-vcalendar',
    'vda' => 'application/vda',
    'vdo' => 'video/vdo',
    'vew' => 'application/groupwise',
    'viv' => 'video/vivo',
    'viv' => 'video/vnd.vivo',
    'vivo' => 'video/vivo',
    'vivo' => 'video/vnd.vivo',
    'vmd' => 'application/vocaltec-media-desc',
    'vmf' => 'application/vocaltec-media-file',
    'voc' => 'audio/voc',
    'voc' => 'audio/x-voc',
    'vos' => 'video/vosaic',
    'vox' => 'audio/voxware',
    'vqe' => 'audio/x-twinvq-plugin',
    'vqf' => 'audio/x-twinvq',
    'vql' => 'audio/x-twinvq-plugin',
    'vrml' => 'application/x-vrml',
    'vrml' => 'model/vrml',
    'vrml' => 'x-world/x-vrml',
    'vrt' => 'x-world/x-vrt',
    'vsd' => 'application/x-visio',
    'vst' => 'application/x-visio',
    'vsw' => 'application/x-visio',
    'w60' => 'application/wordperfect6.0',
    'w61' => 'application/wordperfect6.1',
    'w6w' => 'application/msword',
    'wav' => 'audio/wav',
    'wav' => 'audio/x-wav',
    'wb1' => 'application/x-qpro',
    'wbmp' => 'image/vnd.wap.wbmp',
    'web' => 'application/vnd.xara',
    'wiz' => 'application/msword',
    'wk1' => 'application/x-123',
    'wmf' => 'windows/metafile',
    'wml' => 'text/vnd.wap.wml',
    'wmlc' => 'application/vnd.wap.wmlc',
    'wmls' => 'text/vnd.wap.wmlscript',
    'wmlsc' => 'application/vnd.wap.wmlscriptc',
    'word' => 'application/msword',
    'wp' => 'application/wordperfect',
    'wp5' => 'application/wordperfect',
    'wp5' => 'application/wordperfect6.0',
    'wp6' => 'application/wordperfect',
    'wpd' => 'application/wordperfect',
    'wpd' => 'application/x-wpwin',
    'wq1' => 'application/x-lotus',
    'wri' => 'application/mswrite',
    'wri' => 'application/x-wri',
    'wrl' => 'application/x-world',
    'wrl' => 'model/vrml',
    'wrl' => 'x-world/x-vrml',
    'wrz' => 'model/vrml',
    'wrz' => 'x-world/x-vrml',
    'wsc' => 'text/scriplet',
    'wsrc' => 'application/x-wais-source',
    'wtk' => 'application/x-wintalk',
    'xbm' => 'image/x-xbitmap',
    'xbm' => 'image/x-xbm',
    'xbm' => 'image/xbm',
    'xdr' => 'video/x-amt-demorun',
    'xgz' => 'xgl/drawing',
    'xif' => 'image/vnd.xiff',
    'xl' => 'application/excel',
    'xla' => 'application/excel',
    'xla' => 'application/x-excel',
    'xla' => 'application/x-msexcel',
    'xlb' => 'application/excel',
    'xlb' => 'application/vnd.ms-excel',
    'xlb' => 'application/x-excel',
    'xlc' => 'application/excel',
    'xlc' => 'application/vnd.ms-excel',
    'xlc' => 'application/x-excel',
    'xld' => 'application/excel',
    'xld' => 'application/x-excel',
    'xlk' => 'application/excel',
    'xlk' => 'application/x-excel',
    'xll' => 'application/excel',
    'xll' => 'application/vnd.ms-excel',
    'xll' => 'application/x-excel',
    'xlm' => 'application/excel',
    'xlm' => 'application/vnd.ms-excel',
    'xlm' => 'application/x-excel',
    'xls' => 'application/excel',
    'xls' => 'application/vnd.ms-excel',
    'xls' => 'application/x-excel',
    'xls' => 'application/x-msexcel',
    'xlt' => 'application/excel',
    'xlt' => 'application/x-excel',
    'xlv' => 'application/excel',
    'xlv' => 'application/x-excel',
    'xlw' => 'application/excel',
    'xlw' => 'application/vnd.ms-excel',
    'xlw' => 'application/x-excel',
    'xlw' => 'application/x-msexcel',
    'xm' => 'audio/xm',
    'xml' => 'application/xml',
    'xml' => 'text/xml',
    'xmz' => 'xgl/movie',
    'xpix' => 'application/x-vnd.ls-xpix',
    'xpm' => 'image/x-xpixmap',
    'xpm' => 'image/xpm',
    'x-png' => 'image/png',
    'xsr' => 'video/x-amt-showrun',
    'xwd' => 'image/x-xwd',
    'xwd' => 'image/x-xwindowdump',
    'xyz' => 'chemical/x-pdb',
    'z' => 'application/x-compress',
    'z' => 'application/x-compressed',
    'zip' => 'application/x-compressed',
    'zip' => 'application/x-zip-compressed',
    'zip' => 'application/zip',
    'zip' => 'multipart/x-zip',
    'zoo' => 'application/octet-stream',
    'zsh' => 'text/x-script.zsh',
    'txt' => 'text/plain',
    'htm' => 'text/html',
    'html' => 'text/html',
    'php' => 'application/x-httpd-php',
    'phps' => 'application/x-httpd-phps',
    'css' => 'text/css',
    'js' => 'application/javascript',
    'json' => 'application/json',
    'xml' => 'application/xml',
    'swf' => 'application/x-shockwave-flash',
    'flv' => 'video/x-flv',
    'asc' => 'text/plain',
    'atom' => 'application/atom+xml',
    'bcpio' => 'application/x-bcpio',
    'png' => 'image/png',
    'jpe' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif',
    'bmp' => 'image/bmp',
    'ico' => 'image/vnd.microsoft.icon',
    'tiff' => 'image/tiff',
    'tif' => 'image/tiff',
    'svg' => 'image/svg+xml',
    'svgz' => 'image/svg+xml',
    'zip' => 'application/zip',
    'rar' => 'application/x-rar-compressed',
    'exe' => 'application/x-msdownload',
    'msi' => 'application/x-msdownload',
    'cab' => 'application/vnd.ms-cab-compressed',
    'mp3' => 'audio/mpeg',
    'qt' => 'video/quicktime',
    'mov' => 'video/quicktime',
    'au' => 'audio/basic',
    'avi' => 'video/x-msvideo',
    'pdf' => 'application/pdf',
    'psd' => 'image/vnd.adobe.photoshop',
    'ai' => 'application/postscript',
    'eps' => 'application/postscript',
    'ps' => 'application/postscript',
    'aif' => 'audio/x-aiff',
    'aifc' => 'audio/x-aiff',
    'aiff' => 'audio/x-aiff',
    'doc' => 'application/msword',
    'rtf' => 'application/rtf',
    'xls' => 'application/vnd.ms-excel',
    'ppt' => 'application/vnd.ms-powerpoint',
    'odt' => 'application/vnd.oasis.opendocument.text',
    'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    'swf' => 'application/x-shockwave-flash',
    'swf' => 'application/x-shockwave-flash2-preview',
    'swf' => 'application/futuresplash',
    'swf' => 'image/vnd.rn-realflash',
    'wmv' => 'application/windows-media'
);


class FileMimeTypes
{
    # ------------------------------------------------
    /**
     * Convert file extension into mimetype. If extension is not known 'application/octet-stream' is returned.
     */
    static function mimeTypeForFileExtension($ps_extension)
    {
        global $g_file_extensions_to_mimetypes;
        return isset($g_file_extensions_to_mimetypes[$ps_extension]) ? $g_file_extensions_to_mimetypes[$ps_extension] : 'application/octet-stream';
    }
    # ------------------------------------------------

    /**
     * Convert mimetype into human-readable name for display. If mimetype is not known the mimetype is returned unchanged.
     */
    static function nameForMimeType($ps_mimetype)
    {
        global $g_mimetypes_to_info;
        return isset($g_mimetypes_to_info[$ps_mimetype]) ? $g_mimetypes_to_info[$ps_mimetype]['name'] : $ps_mimetype;
    }
    # ------------------------------------------------

    /**
     * Converts file extension into human-readable name for display. Generic 'application/octet-stream' mimetype is returned if
     * extension is unknown.
     */
    static function nameForFileExtension($ps_extension)
    {
        return FileMimeTypes::nameForMimeType(FileMimeTypes::mimeTypeForFileExtension($ps_extension));
    }
    # ------------------------------------------------
}
