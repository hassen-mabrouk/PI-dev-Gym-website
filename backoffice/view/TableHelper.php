<?php
namespace App;
class TableHelper{
    const SORT_KEY= 'sort';
    const DIR_KEY = 'dir';
    public static function sort($sortkey,$label,array $data)
    {
        $sort=$data[self::SORT_KEY] ?? null;
        $direction=$data[self::DIR_KEY] ?? null;
        $url=URLHelper::withParams([$data,['sort' => $sortkey, 'dir' => 'asc']);
        return <<<HTML 
        <a href="?surl">$label</a>
        HTML;

    }
}
?>