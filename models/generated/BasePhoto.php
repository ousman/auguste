<?php

/**
 * BasePhoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $Label
 * @property string $Fichier
 * @property string $Extension
 * @property string $Description
 * @property integer $IdSerie
 * @property integer $IdTag
 * @property Serie $Serie
 * @property Tag $Tag
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePhoto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Photo');
        $this->hasColumn('Label', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('Fichier', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('Extension', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('Description', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('IdSerie', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('IdTag', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Serie', array(
             'local' => 'IdSerie',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Tag', array(
             'local' => 'IdTag',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'Add_date',
             ),
             'updated' => 
             array(
              'name' => 'Mod_date',
             ),
             ));
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'id',
              1 => 'Label',
              2 => 'IdSerie',
              3 => 'IdTag',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
    }
}