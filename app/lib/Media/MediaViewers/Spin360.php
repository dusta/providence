<?php
/** ---------------------------------------------------------------------
 * app/lib/Media/MediaViewers/Spin360.php :
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2016 Whirl-i-Gig
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
 * @subpackage Media
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */

/**
 *
 */

require_once(__CA_LIB_DIR__ . '/Configuration.php');
require_once(__CA_LIB_DIR__ . '/Media/IMediaViewer.php');
require_once(__CA_LIB_DIR__ . '/Media/BaseMediaViewer.php');

class Spin360 extends BaseMediaViewer implements IMediaViewer
{
    # -------------------------------------------------------
    /**
     *
     */
    protected static $s_callbacks = [];
    # -------------------------------------------------------

    /**
     *
     */
    public static function getViewerHTML($po_request, $ps_identifier, $pa_data = null, $pa_options = null)
    {
        if ($o_view = BaseMediaViewer::getView($po_request)) {
            $o_view->setVar('identifier', $ps_identifier);
            $o_view->setVar('viewer', 'Spin360');
            $o_view->setVar('data', $pa_data);

            $t_instance = $pa_data['t_instance'];
            $t_subject = $pa_data['t_subject'];

            $o_view->setVar(
                'id',
                $vs_id = 'caMediaOverlaySpin360_' . $t_instance->getPrimaryKey(
                    ) . '_' . ($vs_display_type = caGetOption(
                        'display_type',
                        $pa_data,
                        caGetOption(
                            'display_version',
                            $pa_data['display'],
                            ''
                        )
                    ))
            );
            $o_view->setVar('t_instance', $t_instance);

            if (is_a($t_instance, "ca_object_representations") || is_a($t_instance, "ca_site_page_media")) {
                $va_viewer_opts = [
                    'id' => $vs_id,
                    'viewer_width' => caGetOption('viewer_width', $pa_data['display'], '100%'),
                    'viewer_height' => caGetOption('viewer_height', $pa_data['display'], '100%')
                ];

                if (!$t_instance->hasMediaVersion(
                    'media',
                    $vs_version = caGetOption(
                        'display_version',
                        $pa_data['display'],
                        'original'
                    )
                )) {
                    if (!$t_instance->hasMediaVersion(
                        'media',
                        $vs_version = caGetOption(
                            'alt_display_version',
                            $pa_data['display'],
                            'original'
                        )
                    )) {
                        $vs_version = 'original';
                    }
                }
            } else {
                $va_viewer_opts = [
                    'id' => $vs_id,
                    'viewer_width' => caGetOption('viewer_width', $pa_data['display'], '100%'),
                    'viewer_height' => caGetOption('viewer_height', $pa_data['display'], '100%')
                ];

                $t_instance->useBlobAsMediaField(true);
                if (!$t_instance->hasMediaVersion(
                    'value_blob',
                    $vs_version = caGetOption(
                        'display_version',
                        $pa_data['display'],
                        'original'
                    )
                )) {
                    if (!$t_instance->hasMediaVersion(
                        'value_blob',
                        $vs_version = caGetOption(
                            'alt_display_version',
                            $pa_data['display'],
                            'original'
                        )
                    )) {
                        $vs_version = 'original';
                    }
                }
            }

            $o_view->setVar('images', $t_instance->getFileList(null, null, null, ['original']));

            return BaseMediaViewer::prepareViewerHTML($po_request, $o_view, $pa_data, $pa_options);
        }

        return _t("Could not load viewer");
    }
    # -------------------------------------------------------

    /**
     *
     */
    public static function getViewerData($po_request, $ps_identifier, $pa_data = null, $pa_options = null)
    {
        if ($o_view = BaseMediaViewer::getView($po_request)) {
            if ($t_instance = caGetOption('t_instance', $pa_data, null)) {
                if (!($va_identifier = caParseMediaIdentifier($ps_identifier))) {
                    // error: invalid identifier
                    throw new ApplicationException(_t('Invalid identifier %1', $ps_identifier));
                }

                $app = AppController::getInstance();
                $app->removeAllPlugins();

                if (($vn_page = ($va_identifier['page']) - 1) >= 0) {
                    $va_file_list = array_values($t_instance->getFileList(null, null, null, ['original']));
                    if (isset($va_file_list[$vn_page])) {
                        if ($vs_mimetype = Media::getMimetypeForExtension(
                            pathinfo($va_file_list[$vn_page]['original_path'], PATHINFO_EXTENSION)
                        )) {
                            header("Content-type: {$vs_mimetype}");
                        }
                        return file_get_contents($va_file_list[$vn_page]['original_path']);
                    }
                }
            }
        }

        throw new ApplicationException(_t('Media is not available'));
    }
    # -------------------------------------------------------
}
