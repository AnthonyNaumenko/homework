<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 09.03.18
 * Time: 20:08
 */

class Tag
{
    /**
     * @var string
     */
    private $tag;


    /**
     * @var string
     */
    private $text;


    /**
     * @var array
     */
    private $attributes;

    public function __construct($tag)
    {
        $this->tag = $tag;
        $this->attributes = [];
    }

    /**
     * @return string
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;

    }

    public function setAttr($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function show()
    {
        $ret = '<' . $this->tag;
        foreach ($this->attributes as $name => $value) {
            $ret .= ' ' . $name . '="' . htmlspecialchars($value) . '"';

        }
        $ret .= '>' . $this->text . '</' . $this->tag . '>';
        return $ret;
    }

    public static function getClassDescription()
    {
        return 'Этот класс' . __CLASS__ . ' генерирует хтмл код для одного тега';
    }
}

