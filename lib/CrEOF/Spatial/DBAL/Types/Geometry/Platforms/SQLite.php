<?php

namespace CrEOF\Spatial\DBAL\Types\Geometry\Platforms;

use CrEOF\Spatial\DBAL\Types\Platforms\AbstractPlatform;
use CrEOF\Spatial\PHP\Types\Geometry\GeometryInterface;

/**
 * SQLite spatial platform
 *
 * @author  Juanma Orta <juanma.orta@gmail.com>
 */
class SQLite extends AbstractPlatform
{
    /**
     * {@inheritdoc}
     */
    public function getTypeFamily()
    {
        return GeometryInterface::GEOMETRY;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration)
    {
        return strtoupper($fieldDeclaration['type']->getSQLType());
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValueSQL($sqlExpr)
    {
        return $sqlExpr;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValueSQL($sqlExpr)
    {
        return $sqlExpr;
    }
}
