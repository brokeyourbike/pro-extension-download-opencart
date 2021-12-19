<?php

namespace pro_extension_download;

use pro_extension_download\constant;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
final class pro_extension_download
{
    public function getAdminPath()
    {
        return basename(DIR_APPLICATION);
    }

    private static function getRootDir()
    {
        return dirname(DIR_SYSTEM) . '/';
    }

    // TODO: do not create folder in the root of the store
    // use download or upload folder, or pass the resultimg file through php
}
