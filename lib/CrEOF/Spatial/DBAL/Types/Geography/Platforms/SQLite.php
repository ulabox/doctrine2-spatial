<?php
namespace CrEOF\Spatial\DBAL\Types\Geography\Platforms;

use CrEOF\Spatial\PHP\Types\Geography\GeographyInterface;

/**
 * SQLite spatial platform
 *
 * @author  Juanma Orta <juanma.orta@gmail.com>
 */
class SQLite extends \CrEOF\Spatial\DBAL\Types\Geometry\Platforms\SQLite
{
    /**
     * {@inheritdoc}
     */
    public function getTypeFamily()
    {
        return GeographyInterface::GEOGRAPHY;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration)
    {
        if ($fieldDeclaration['type']->getSQLType() == GeographyInterface::GEOGRAPHY) {
            return 'GEOMETRY';
        }

        return parent::getSQLDeclaration($fieldDeclaration);
    }

}
