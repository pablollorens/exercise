<?php

namespace Map;

use \Store;
use \StoreQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'store' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class StoreTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.StoreTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'searchengine';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'store';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Store';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Store';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the id field
     */
    const COL_ID = 'store.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'store.name';

    /**
     * the column name for the latitude field
     */
    const COL_LATITUDE = 'store.latitude';

    /**
     * the column name for the longitude field
     */
    const COL_LONGITUDE = 'store.longitude';

    /**
     * the column name for the address field
     */
    const COL_ADDRESS = 'store.address';

    /**
     * the column name for the postalcode field
     */
    const COL_POSTALCODE = 'store.postalcode';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'store.city';

    /**
     * the column name for the is_open_on_sunday field
     */
    const COL_IS_OPEN_ON_SUNDAY = 'store.is_open_on_sunday';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /** The enumerated values for the is_open_on_sunday field */
    const COL_IS_OPEN_ON_SUNDAY_Y = 'Y';
    const COL_IS_OPEN_ON_SUNDAY_N = 'N';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Latitude', 'Longitude', 'Address', 'Postalcode', 'City', 'IsOpenOnSunday', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'latitude', 'longitude', 'address', 'postalcode', 'city', 'isOpenOnSunday', ),
        self::TYPE_COLNAME       => array(StoreTableMap::COL_ID, StoreTableMap::COL_NAME, StoreTableMap::COL_LATITUDE, StoreTableMap::COL_LONGITUDE, StoreTableMap::COL_ADDRESS, StoreTableMap::COL_POSTALCODE, StoreTableMap::COL_CITY, StoreTableMap::COL_IS_OPEN_ON_SUNDAY, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'latitude', 'longitude', 'address', 'postalcode', 'city', 'is_open_on_sunday', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Latitude' => 2, 'Longitude' => 3, 'Address' => 4, 'Postalcode' => 5, 'City' => 6, 'IsOpenOnSunday' => 7, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'latitude' => 2, 'longitude' => 3, 'address' => 4, 'postalcode' => 5, 'city' => 6, 'isOpenOnSunday' => 7, ),
        self::TYPE_COLNAME       => array(StoreTableMap::COL_ID => 0, StoreTableMap::COL_NAME => 1, StoreTableMap::COL_LATITUDE => 2, StoreTableMap::COL_LONGITUDE => 3, StoreTableMap::COL_ADDRESS => 4, StoreTableMap::COL_POSTALCODE => 5, StoreTableMap::COL_CITY => 6, StoreTableMap::COL_IS_OPEN_ON_SUNDAY => 7, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'latitude' => 2, 'longitude' => 3, 'address' => 4, 'postalcode' => 5, 'city' => 6, 'is_open_on_sunday' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
                StoreTableMap::COL_IS_OPEN_ON_SUNDAY => array(
                            self::COL_IS_OPEN_ON_SUNDAY_Y,
            self::COL_IS_OPEN_ON_SUNDAY_N,
        ),
    );

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return static::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     * @param string $colname
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = self::getValueSets();

        return $valueSets[$colname];
    }

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('store');
        $this->setPhpName('Store');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Store');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('latitude', 'Latitude', 'DOUBLE', true, null, null);
        $this->addColumn('longitude', 'Longitude', 'DOUBLE', true, null, null);
        $this->addColumn('address', 'Address', 'VARCHAR', false, 255, null);
        $this->addColumn('postalcode', 'Postalcode', 'VARCHAR', false, 255, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('is_open_on_sunday', 'IsOpenOnSunday', 'ENUM', true, null, 'N');
        $this->getColumn('is_open_on_sunday')->setValueSet(array (
  0 => 'Y',
  1 => 'N',
));
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? StoreTableMap::CLASS_DEFAULT : StoreTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Store object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = StoreTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = StoreTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + StoreTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StoreTableMap::OM_CLASS;
            /** @var Store $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            StoreTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = StoreTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = StoreTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Store $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StoreTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(StoreTableMap::COL_ID);
            $criteria->addSelectColumn(StoreTableMap::COL_NAME);
            $criteria->addSelectColumn(StoreTableMap::COL_LATITUDE);
            $criteria->addSelectColumn(StoreTableMap::COL_LONGITUDE);
            $criteria->addSelectColumn(StoreTableMap::COL_ADDRESS);
            $criteria->addSelectColumn(StoreTableMap::COL_POSTALCODE);
            $criteria->addSelectColumn(StoreTableMap::COL_CITY);
            $criteria->addSelectColumn(StoreTableMap::COL_IS_OPEN_ON_SUNDAY);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.latitude');
            $criteria->addSelectColumn($alias . '.longitude');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.postalcode');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.is_open_on_sunday');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(StoreTableMap::DATABASE_NAME)->getTable(StoreTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(StoreTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(StoreTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new StoreTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Store or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Store object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoreTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Store) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StoreTableMap::DATABASE_NAME);
            $criteria->add(StoreTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = StoreQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            StoreTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                StoreTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return StoreQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Store or Criteria object.
     *
     * @param mixed               $criteria Criteria or Store object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoreTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Store object
        }

        if ($criteria->containsKey(StoreTableMap::COL_ID) && $criteria->keyContainsValue(StoreTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.StoreTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = StoreQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // StoreTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
StoreTableMap::buildTableMap();
