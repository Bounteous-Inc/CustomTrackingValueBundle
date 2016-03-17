<?php

namespace DemacMedia\Bundle\CustomTrackingValueBundle\ImportExport;

use Oro\Bundle\ImportExportBundle\Converter\AbstractTableDataConverter;
use Oro\Bundle\TrackingBundle\ImportExport\DataConverter as BaseDataConverter;

class DataConverter extends AbstractTableDataConverter
{
    /**
     * {@inheritdoc}
     */
    protected function getHeaderConversionRules()
    {
        $baseDataConverter = new BaseDataConverter();
        $parent = $baseDataConverter->getHeaderConversionRules();
        $parent['_cvar'] = 'cvar';

        return $parent;
    }

    /**
     * {@inheritdoc}
     */
    protected function getBackendHeader()
    {
        throw new \Exception('Normalization is not implemented!');
    }
}
