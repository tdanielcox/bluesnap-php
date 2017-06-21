<?php

namespace tdanielcox\Bluesnap\Models;

use tdanielcox\Bluesnap\Utility;

class Model
{
    const COLLECTION = 'collection';
    const ITEM = 'item';

    /**
     * @var array $children
     */
    protected $children = [];

    /**
     * Model constructor.
     * @param object $data
     * @param string $replace_id_key
     */
    public function __construct($data, $replace_id_key = null)
    {
        $data = Utility::objectToArray($data);

        if ($replace_id_key && isset($data[$replace_id_key]))
        {
            $this->id = $data[$replace_id_key];
            unset($data[$replace_id_key]);
        }

        if (is_array($data) && count($data))
        {
            foreach ($data as $key => $value)
            {
                if (!is_array($value))
                {
                    $value = html_entity_decode($value);
                }

                $this->$key = $value;
            }
        }

        $this->_loadChildren();
    }

    private function _loadChildren()
    {
        if (count($this->children))
        {
            foreach ($this->children as $child => $type)
            {
                if (isset($this->$child))
                {
                    $this->$child = $this->_parseChild($child, $type);
                }
            }
        }
    }

    private function _parseChild($child, $type)
    {
        $class_name = '\\tdanielcox\\Bluesnap\\Models\\'. ucfirst($child);

        if ($type === 'collection')
        {
            $items = [];
            foreach ($this->$child as $item)
            {
                $items[] = new $class_name($item);
            }
            return $items;
        }

        return new $class_name($this->$child);
    }
}