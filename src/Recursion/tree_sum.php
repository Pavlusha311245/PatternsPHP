<?php

namespace Recursion;
class Node
{
    private array $children;
    private int|null $number;

    public function __construct($number = null, Node ...$node)
    {
        $this->children = $node;
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function addNode(Node $node): void
    {
        $this->children[] = $node;
    }

    public function hasChildren(): bool
    {
        return !empty($this->children);
    }
}

$node5 = new Recursion\Node(5);
$node7 = new Recursion\Node(7);
$node8 = new Recursion\Node(8);
$node9 = new Recursion\Node(9);
$node11 = new Recursion\Node(11);
$node4 = new Recursion\Node(4, $node8, $node9);
$node10 = new Recursion\Node(10, $node11);
$node6 = new Recursion\Node(6, $node10);
$node2 = new Recursion\Node(2, $node4, $node5);
$node3 = new Recursion\Node(3, $node6, $node7);
$node1 = new Recursion\Node(1, $node2, $node3);

/**
 * @param \Recursion\Node $node
 * @return int|mixed|null
 */
function nodes_sum(Recursion\Node $node): int
{
    if (!$node->hasChildren())
        return $node->getNumber();

    $count = $node->getNumber();

    foreach ($node->getChildren() as $child) {
        $count += nodes_sum($child);
    };

    return $count;
}

echo nodes_sum($node1);
