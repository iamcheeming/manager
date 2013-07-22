<?php
$arr = array(
    array(
        'id' => 1,
        'name' => 'A',
        'childs' => array(
            array(
                'id' => 11,
                'name' => 'AA',
                'childs' => array(
                    array(
                        'id' => 21,
                        'name' => 'AAA',
                        'childs' => array(
                            array(
                                'id' => 31,
                                'name' => 'AAAA',
                            ),
                            array(),
                        ),
                    ),
                    array(),
                ),
            ),
            array(),
        ),
    ),
    array(),
);

$array = array(
    array('id' => 1, 'pid' => 0, 'name' => 'A'),
    array('id' => 2, 'pid' => 0, 'name' => 'B'),
    array('id' => 3, 'pid' => 0, 'name' => 'C'),
    array('id' => 4, 'pid' => 1, 'name' => 'AA'),
    array('id' => 5, 'pid' => 1, 'name' => 'aa'),
    array('id' => 6, 'pid' => 4, 'name' => 'AAA'),
    array('id' => 9, 'pid' => 4, 'name' => 'AA2'),
    array('id' => 7, 'pid' => 6, 'name' => 'AAAA'),
    array('id' => 8, 'pid' => 7, 'name' => 'AAAAA'),
);

function tree($data, $root = 0, $id = 'id', $pid = 'pid', $child = '_child')
{
    $tree = array();
    $temp = array();
    foreach ($data as $item) {
        $temp[$item[$id]] = &$item;
    }
    unset($item);
    foreach ($data as $item) {
        $parentId = $item[$pid];
        if ($root == $parentId) {
            $tree[] = &$temp[$item[$id]];
        } else {
            if (isset($temp[$parentId])) {
                $temp[$parentId][$child][] = &$temp[$item[$item]];
            }
        }
    }
    // unset($temp);
    return $tree;
}

print_r(tree($array));

function tree2($data)
{
    $temp = array();
    foreach ($data as $item) {
        $temp[$item['id']] = $item;
    }
    foreach ($data as $item) {
        $temp[$item['pid']]['_child'][$item['id']] = &$temp[$item['id']];
    }
    return isset($temp[0]['_child']) ? $temp[0]['_child'] : array();
}

print_r(tree2($array));